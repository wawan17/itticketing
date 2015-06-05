<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_ticket
 *
 * @author wawan.setiawan
 */
class m_ticket extends MY_Model {

    public function __construct() {
        parent::__construct();
    }

    public function get_all_ticket() {
        $this->db->select('a.PRIORITY');
        $this->db->select('a.TICKET_ID');
        $this->db->select('b.TICKET_CATEGORY');
        $this->db->select('a.SUBJECT');
        $this->db->select('a.ASSIGNED_BY');
        $this->db->select('a.DESCRIPTION');
        $this->db->select('a.CREATED_BY');
        $this->db->select('a.CREATE_DATE');
        $this->db->select('c.TICKET_STATUS');
        $this->db->select('a.ATTACHMENT');
        $this->db->select('a.USER_CONTACT');
        $this->db->from('ticket a');
        $this->db->join('ticket_category b', 'a.ticket_category_id=b.ticket_category_id', 'left');
        $this->db->join('ticket_status c', 'a.ticket_status_id=c.ticket_status_id', 'left');
        $this->db->order_by('a.ticket_status_id', 'asc');
        $this->db->order_by('a.priority','desc');
        $this->db->order_by('a.ticket_id', 'desc');
        return $this->db->get();
    }
    
    public function get_all_ticket_user() {
        $this->db->select('a.PRIORITY');
        $this->db->select('a.TICKET_ID');
        $this->db->select('b.TICKET_CATEGORY');
        $this->db->select('a.SUBJECT');
        $this->db->select('a.ASSIGNED_BY');
        $this->db->select('a.DESCRIPTION');
        $this->db->select('a.CREATE_DATE');
        $this->db->select('c.TICKET_STATUS');
        $this->db->select('a.ATTACHMENT');
        $this->db->select('a.USER_CONTACT');
        $this->db->from('ticket a');
        $this->db->join('ticket_category b', 'a.ticket_category_id=b.ticket_category_id', 'left');
        $this->db->join('ticket_status c', 'a.ticket_status_id=c.ticket_status_id', 'left');
        $this->db->where('a.created_by', $this->session->userdata('username'));
        $this->db->order_by('a.ticket_status_id', 'asc');
        $this->db->order_by('a.priority','desc');
        $this->db->order_by('a.ticket_id', 'desc');
        return $this->db->get();
    }
    
    public function get_all_ticket_status($status) {
        $this->db->select('a.PRIORITY');
        $this->db->select('a.TICKET_ID');
        $this->db->select('b.TICKET_CATEGORY');
        $this->db->select('a.SUBJECT');
        $this->db->select('a.ASSIGNED_BY');
        $this->db->select('a.DESCRIPTION');
        $this->db->select('a.CREATED_BY');
        $this->db->select('a.CREATE_DATE');
        $this->db->select('c.TICKET_STATUS');
        $this->db->select('a.ATTACHMENT');
        $this->db->select('a.USER_CONTACT');
        $this->db->from('ticket a');
        $this->db->join('ticket_category b', 'a.ticket_category_id=b.ticket_category_id', 'left');
        $this->db->join('ticket_status c', 'a.ticket_status_id=c.ticket_status_id', 'left');
        if ($status!="") {
            $this->db->where('a.ticket_status_id', $status);
        }
        $this->db->order_by('a.ticket_status_id', 'asc');
        $this->db->order_by('a.priority','desc');
        $this->db->order_by('a.ticket_id', 'desc');
        return $this->db->get();
    }
    
    public function get_all_ticket_user_status($status) {
        $this->db->select('a.PRIORITY');
        $this->db->select('a.TICKET_ID');
        $this->db->select('b.TICKET_CATEGORY');
        $this->db->select('a.SUBJECT');
        $this->db->select('a.ASSIGNED_BY');
        $this->db->select('a.DESCRIPTION');
        $this->db->select('a.CREATE_DATE');
        $this->db->select('c.TICKET_STATUS');
        $this->db->select('a.ATTACHMENT');
        $this->db->select('a.USER_CONTACT');
        $this->db->from('ticket a');
        $this->db->join('ticket_category b', 'a.ticket_category_id=b.ticket_category_id', 'left');
        $this->db->join('ticket_status c', 'a.ticket_status_id=c.ticket_status_id', 'left');
        $this->db->where('a.created_by', $this->session->userdata('username'));
        if ($status!="") {
            $this->db->where('a.ticket_status_id', $status);
        }
        $this->db->order_by('a.ticket_status_id', 'asc');
        $this->db->order_by('a.priority','desc');
        $this->db->order_by('a.ticket_id', 'desc');
        return $this->db->get();
    }

    public function get_comment($ticket_id) {
        $this->db->select('a.TICKET_COMMENT_ID');
        $this->db->select('a.COMMENT');
        $this->db->select('c.NAME');
        $this->db->select('c.AVATAR');
        $this->db->select('a.ATTACHMENT');
        $this->db->select('a.CREATE_DATE');
        $this->db->from('ticket_comment a');
        $this->db->join('ticket b', 'a.TICKET_ID=b.TICKET_ID', 'left');
        $this->db->join('user c', 'a.USERNAME=c.USERNAME', 'left');
        $this->db->where('a.TICKET_ID', $ticket_id);
        $this->db->order_by('a.TICKET_COMMENT_ID', 'DESC');
        return $this->db->get();
    }

    public function get_id_ticket($value) {
        $this->db->select('a.TICKET_ID');
        $this->db->select('a.SUBJECT');
        $this->db->select('a.DESCRIPTION');
        $this->db->select('a.TICKET_CATEGORY_ID');
        $this->db->select('b.TICKET_CATEGORY');
        $this->db->select('a.TICKET_STATUS_ID');
        $this->db->select('c.TICKET_STATUS');
        $this->db->select('a.PRIORITY');
        $this->db->select('a.USER_CONTACT');
        $this->db->select('a.CREATE_DATE');
        $this->db->select('a.CREATED_BY');
        $this->db->select('a.LAST_EDIT_DATE');
        $this->db->select('a.LAST_EDIT_BY');
        $this->db->select('a.CLOSE_DATE');
        $this->db->select('a.CLOSED_BY');
        $this->db->select('a.ASSIGNED_DATE');
        $this->db->select('a.ASSIGNED_BY');
        $this->db->select('a.DO_DATE');
        $this->db->select('a.DO_BY');
        $this->db->select('b.UOM_ID');
        $this->db->select('b.TIME_STANDARD');
        $this->db->select('e.LONG_UOM');
        $this->db->select('d.EMAIL');
        $this->db->select('d.USERNAME');
        $this->db->select('d.NAME');
        $this->db->from('ticket a');
        $this->db->join('ticket_category b', 'a.ticket_category_id=b.ticket_category_id', 'left');
        $this->db->join('ticket_status c', 'a.ticket_status_id=c.ticket_status_id', 'left');
        $this->db->join('user d','a.created_by=d.username','left');
        $this->db->join('uom e','b.uom_id=e.uom_id','left');
        $this->db->where('a.TICKET_ID', $value);
        return $this->db->get();
    }

}
