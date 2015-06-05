<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_module
 *
 * @author wawan.setiawan
 */
class m_module extends MY_Model {

    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_module($field, $order) {
        $this->db->from('user_module a');
        $this->db->join('user_module_group b', 'a.module_group_id=b.module_group_id', 'left');
        $this->db->order_by($field, $order);
        return $this->db->get();
    }


}
