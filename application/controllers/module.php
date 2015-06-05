<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of module
 *
 * @author wawan.setiawan
 */
class module extends MY_Controller {

    protected $table = 'user_module';
    protected $pk = 'module_id';

    public function __construct() {
        parent::__construct();
        $this->load->model(array('m_module'));
    }

    public function index() {
        $data['title'] = 'Modules';
        $data['module_group'] = $this->m_module->get_all('user_module_group', 'module_group_name', 'asc');
        $data['modules'] = $this->m_module->get_all_module($this->pk, 'asc');
        parent::_view('module', $data);
    }

    function add() {
        $data = array(
            'MODULE_ID' => '',
            'MODULE_NAME' => $this->input->post('txtModuleName'),
            'MODULE_DESC' => $this->input->post('txtModuleDescription'),
            'LINK' => $this->input->post('txtLink'),
            'CREATE_DATE' => date('Y-m-d'),
            'MODULE_GROUP_ID' => $this->input->post('listModuleGroup'),
            'CREATED_BY' => $this->session->userdata('username')
        );

        $insert = $this->m_module->add($this->table, $data);
        if ($insert) {
            $this->session->set_flashdata('success_msg', 'New module has been succesful created');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to create new module. Please try again');
        }
        redirect('module');
    }

}
