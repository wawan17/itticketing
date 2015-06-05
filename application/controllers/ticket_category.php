<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ticket_category
 *
 * @author wawan.setiawan
 */
class ticket_category extends MY_Controller {

    protected $table = 'ticket_category';
    protected $pk = 'ticket_category_id';

    public function __construct() {
        parent::__construct();
        $this->load->model(array('m_ticket_category', 'm_uom'));
        $this->is_logged_in();
    }

    public function index() {
        $data['title'] = 'Ticket Category';
        $data['ticket_categories'] = $this->m_ticket_category->get_all_ticket_category($this->pk, 'asc');
        $data['uoms'] = $this->m_uom->get_all('uom', 'uom_id', 'asc');
        parent::_view('ticket_category', $data);
    }

    public function add() {
        $data = array(
            'ticket_category' => '',
            'ticket_category' => $this->input->post('txtCategory'),
            'time_standard' => $this->input->post('txtTimeStandard'),
            'uom_id' => $this->input->post('listUoM'),
            'create_date' => date('Y-m-d'),
            'created_by' => $this->session->userdata('username')
        );
        $insert = $this->m_ticket_category->add($this->table, $data);
        if ($insert) {
            $this->session->set_flashdata('success_msg', 'Ticket category has been succesful created');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to create ticket category');
        }
        redirect('ticket_category');
    }

    public function update() {
        $id = $this->input->post('txtCategoryId');
        $data = array(
            'TICKET_CATEGORY' => $this->input->post('txtCategory'),
            'TIME_STANDARD' => $this->input->post('txtTimeStandard'),
            'UOM_ID' => $this->input->post('listUoM'),
            'LAST_EDIT_DATE' => date('Y-m-d H:i:s'),
            'LAST_EDIT_BY' => $this->session->userdata('username')
        );
        $update = $this->m_ticket_category->update($this->table, $this->pk, $id, $data);
        echo $update;
        if ($update) {
            $this->session->set_flashdata('success_msg', 'Ticket category has been succesful updated');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to update ticket category');
        }
        redirect('ticket_category');
    }

    public function delete($id) {
        //$id = $this->input->post('id');
        $delete = $this->m_ticket_category->delete($this->table, $this->pk, $id);
        //redirect('ticket_category');
    }

}
