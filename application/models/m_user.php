<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_user
 *
 * @author wawan.setiawan
 */
class m_user extends MY_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function get_all_users() {
        $this->db->from('user a');
        $this->db->join('user_group b','a.user_group_id=b.user_group_id','left');
        $this->db->order_by('a.user_id','asc');
        return $this->db->get();
    }

    public function check_user_exists ($username) {
        $this->db->from('USER');
        $this->db->where('USERNAME',$username);
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    public function get_id_user($username) {
        $this->db->from('user a');
        $this->db->join('user_group b','a.USER_GROUP_ID=b.USER_GROUP_ID');
        $this->db->where('a.USERNAME',$username);
        return $this->db->get();
    }
}
