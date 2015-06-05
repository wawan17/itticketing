<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of portal
 *
 * @author wawan.setiawan
 */
class Portal extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array(
            'm_ticket',
            'm_ticket_category',
            'm_uom',
            'm_ticket_status',
            'm_ticket_comment'
        ));
        //$this->is_logged_in();
    }
    
    public function index($ticket_id="") {
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
        parent::_portal_front('portal', $data);
    }
}
