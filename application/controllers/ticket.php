<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ticket
 *
 * @author wawan.setiawan
 */
class ticket extends MY_Controller {

    public $table = 'ticket';

    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'm_ticket',
            'm_ticket_category',
            'm_uom',
            'm_ticket_status',
            'm_ticket_comment'
        ));
        $this->is_logged_in();
    }

    public function index($ticket_id = "") {
        if ($ticket_id != "") {
            $data['ticket'] = $this->m_ticket->get_id_ticket($ticket_id);
            $data['comment'] = $this->m_ticket->get_comment($ticket_id);
        }
        $data['title'] = 'Tickets';
        if ($this->session->userdata('group') == "Admin") {
            $data['tickets'] = $this->m_ticket->get_all_ticket();
        } else {
            $data['tickets'] = $this->m_ticket->get_all_ticket_user();
        }
        $data['ticket_category'] = $this->m_ticket_category->get_all('ticket_category', 'ticket_category_id', 'desc');
        parent::_view('ticket', $data);
    }

    public function status($status = "") {
        $data['title'] = 'Tickets';
        if ($this->session->userdata('group') == "Admin") {
            $data['tickets'] = $this->m_ticket->get_all_ticket_status($status);
        } else {
            $data['tickets'] = $this->m_ticket->get_all_ticket_user_status($status);
        }
        $data['ticket_category'] = $this->m_ticket_category->get_all('ticket_category', 'ticket_category_id', 'desc');
        parent::_view('ticket', $data);
    }

    public function ticket_detail($ticket_id = '') {
        if ($ticket_id != '') {
            $data['ticket'] = $this->m_ticket->get_id_ticket($ticket_id);
            $data['comment'] = $this->m_ticket->get_comment($ticket_id);
        }
        $this->load->view('ticket_detail', $data);
    }

    protected function _get_id() {
        $max_id = $this->m_ticket->get_max_id($this->table, 'TICKET_ID');
        foreach ($max_id->result() as $row) {
            $ticket_id = $row->TICKET_ID + 1;
        }
        return $ticket_id;
    }

    public function add() {
        // upload file
        if ($this->input->post('fileAttachment') !== null) {
            $config['upload_path'] = './uploads/ticket';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|doc|pdf|bmp|doc|xls|xlsx';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('fileAttachment')) {
                $error = array('error' => $this->upload->display_errors());
                //$this->session->set_flashdata('error_msg', $error['error']);
            } else {
                $uploaded = $this->upload->data();
            }
        }


        $data = array(
            'ticket_id' => $this->_get_id(),
            'subject' => $this->input->post('txtSubject'),
            'description' => $this->input->post('txtDescription'),
            'ticket_category_id' => $this->input->post('listCategory'),
            'ticket_status_id' => 1,
            'priority' => $this->input->post('listPriority'),
            'user_contact' => $this->input->post('txtUserContact'),
            'attachment' => $uploaded['file_name'],
            'create_date' => date('Y-m-d H:i:s'),
            'created_by' => $this->session->userdata('username'),
        );

        $data2 = array(
            'TICKET_COMMENT_ID' => '',
            'COMMENT' => 'Ticket created by ' . $this->session->userdata('username') . ' at ' . date('m/d/Y H:i:s'),
            'USERNAME' => $this->session->userdata('username'),
            'TICKET_ID' => $this->_get_id(),
            'CREATE_DATE' => date('Y-m-d H:i:s')
        );

        $insert = $this->m_ticket->add($this->table, $data);

        if ($insert) {
            $this->m_ticket->add('ticket_comment', $data2);
            $this->session->set_flashdata('success_msg', 'Ticket has been succesful created');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to create ticket. Please try again');
        }
        redirect('ticket');
    }

    public function ticket_assign($ticket_id) {
        $data = array(
            'ticket_status_id' => 2,
            'assigned_date' => date('Y-m-d H:i:s'),
            'assigned_by' => $this->session->userdata('username'),
        );
        $data2 = array(
            'TICKET_COMMENT_ID' => '',
            'COMMENT' => 'Ticket has been assigned by ' . $this->session->userdata('username') . ' at ' . date('m/d/Y H:i:s'),
            'USERNAME' => $this->session->userdata('username'),
            'TICKET_ID' => $ticket_id,
            'CREATE_DATE' => date('Y-m-d H:i:s')
        );
        $this->m_ticket->update($this->table, 'TICKET_ID', $ticket_id, $data);
        $this->m_ticket->add('ticket_comment', $data2);
        $ticket_info = $this->m_ticket->get_id_ticket($ticket_id);
        foreach ($ticket_info->result() as $t_info) {
            $to = $t_info->EMAIL;
            $name = $t_info->NAME;
            $username = $t_info->CREATED_BY;
        }
        $message = array($name, $ticket_id, $username);
        $this->send_mail($to, 'Ticket Help Desk', $message, 'assign_email');
    }

    public function ticket_do($ticket_id) {
        $data = array(
            'ticket_status_id' => 3,
            'do_date' => date('Y-m-d H:i:s'),
            'do_by' => $this->session->userdata('username'),
        );
        $data2 = array(
            'TICKET_COMMENT_ID' => '',
            'COMMENT' => $this->session->userdata('username') . ' is starting to solve your ticket at ' . date('m/d/Y H:i:s'),
            'USERNAME' => $this->session->userdata('username'),
            'TICKET_ID' => $ticket_id,
            'CREATE_DATE' => date('Y-m-d H:i:s')
        );
        $this->m_ticket->update($this->table, 'TICKET_ID', $ticket_id, $data);
        $this->m_ticket->add('ticket_comment', $data2);
        $ticket_info = $this->m_ticket->get_id_ticket($ticket_id);
        foreach ($ticket_info->result() as $t_info) {
            $to = $t_info->EMAIL;
            $name = $t_info->NAME;
            $username = $t_info->CREATED_BY;
        }
        $message = array($name, $ticket_id, $username);
        $this->send_mail($to, 'Ticket Help Desk', $message, 'do_email');
    }

    public function ticket_close($ticket_id) {
        $data = array(
            'ticket_status_id' => 4,
            'last_edit_date' => date('Y-m-d H:i:s'),
            'last_edit_by' => $this->session->userdata('username'),
        );
        $data2 = array(
            'TICKET_COMMENT_ID' => '',
            'COMMENT' => 'Ticket has been closed by ' . $this->session->userdata('name') . ' at ' . date('m/d/Y H:i:s'),
            'USERNAME' => $this->session->userdata('username'),
            'TICKET_ID' => $ticket_id,
            'CREATE_DATE' => date('Y-m-d H:i:s')
        );
        $this->m_ticket->update($this->table, 'TICKET_ID', $ticket_id, $data);
        $this->m_ticket->add('ticket_comment', $data2);

        $ticket_info = $this->m_ticket->get_id_ticket($ticket_id);
        foreach ($ticket_info->result() as $t_info) {
            $to = $t_info->EMAIL;
            $name = $t_info->NAME;
            $username = $t_info->CREATED_BY;
        }
        $message = array($name, $ticket_id, $username);
        $this->send_mail($to, 'Ticket Help Desk', $message, 'close_email');
    }

    public function ticket_close_user($ticket_id) {
        $data = array(
            'ticket_status_id' => 5,
            'close_date' => date('Y-m-d H:i:s'),
            'closed_by' => $this->session->userdata('username'),
        );
        $data2 = array(
            'TICKET_COMMENT_ID' => '',
            'COMMENT' => 'Ticket has been closed by user ' . $this->session->userdata('name') . ' at ' . date('m/d/Y H:i:s'),
            'USERNAME' => $this->session->userdata('username'),
            'TICKET_ID' => $ticket_id,
            'CREATE_DATE' => date('Y-m-d H:i:s')
        );
        $this->m_ticket->update($this->table, 'TICKET_ID', $ticket_id, $data);
        $this->m_ticket->add('ticket_comment', $data2);
    }

    private function send_mail($to, $subject, $message, $mail_type) {
        $data['name'] = $message[0];
        $data['ticket_id'] = $message[1];
        $data['username'] = $message[2];

        $this->load->library('email');

        $messages = $this->load->view('email/' . $mail_type, $data, TRUE);

        $this->email->clear();

        $this->email->to($to);
        $this->email->from('admin.it@mpm-rent.com');
        $this->email->subject($subject);
        $this->email->message($messages);
        $this->email->send();

        echo $this->email->print_debugger();
    }

    public function tes() {
        $data['name'] = 'Angela Fatmawati';
        $data['ticket_id'] = '234';
        $this->load->view('email/assign_email', $data);
    }

    public function ticket_print($ticket_id) {
        $data['ticket'] = $this->m_ticket->get_id_ticket($ticket_id);
        $data['comment'] = $this->m_ticket->get_comment($ticket_id);
        $this->load->view('print/ticket', $data);
    }

    // check new ticket
    public function check_new_ticket() {
        $rows = $this->m_ticket->get_all_ticket();
        echo count($rows->result());
    }
    
    // close ticket by system
    public function ticket_close_system($ticket_id) {
        $data = array(
            'ticket_status_id' => 5,
            'last_edit_date' => date('Y-m-d H:i:s'),
            'last_edit_by' => 'system',
        );
        $data2 = array(
            'TICKET_COMMENT_ID' => '',
            'COMMENT' => 'Ticket has been closed automatically by system at ' . date('m/d/Y H:i:s'),
            'USERNAME' => 'system',
            'TICKET_ID' => $ticket_id,
            'CREATE_DATE' => date('Y-m-d H:i:s')
        );
        $this->m_ticket->update($this->table, 'TICKET_ID', $ticket_id, $data);
        $this->m_ticket->add('ticket_comment', $data2);

        $ticket_info = $this->m_ticket->get_id_ticket($ticket_id);
        foreach ($ticket_info->result() as $t_info) {
            $to = $t_info->EMAIL;
            $name = $t_info->NAME;
            $username = $t_info->CREATED_BY;
        }
        $message = array($name, $ticket_id, $username);
        $this->send_mail($to, 'Ticket Help Desk', $message, 'close_email');
    }

}
