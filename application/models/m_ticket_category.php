<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_ticket_category
 *
 * @author wawan.setiawan
 */
class m_ticket_category extends MY_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_ticket_category ($field, $order) {
        $this->db->from('ticket_category a');
        $this->db->join('uom b','a.uom_id=b.uom_id','left');
        $this->db->order_by($field, $order);
        return $this->db->get();
    }
}
