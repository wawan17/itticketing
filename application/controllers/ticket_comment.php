<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ticket_comment
 *
 * @author wawan.setiawan
 */
class ticket_comment extends MY_Controller {
    
    public $table = 'ticket_comment';

    public function __construct() {
        parent::__construct();
        $this->load->model(array('m_ticket_comment'));
    }

    public function add() {
        // upload file
        if ($this->input->post('commentFileAttachment') !== null) {
            $config['upload_path'] = './uploads/comment';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|bmp|xls|xlsx';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('commentFileAttachment')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error_msg', $error['error']);
            } else {
                $uploaded = $this->upload->data();
            }
        }

        $data = array(
            'TICKET_COMMENT_ID' => '',
            'COMMENT' => '<pre>'.$this->input->post('txtComment').'</pre>',
            'USERNAME' => $this->session->userdata('username'),
            'TICKET_ID' => $this->input->post('txtHiddenTicketId'),
            'ATTACHMENT' => $uploaded['file_name'],
            'CREATE_DATE' => date('Y-m-d H:i:s')
        );

        $this->m_ticket_comment->add($this->table, $data);
    }

}
