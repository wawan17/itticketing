<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of m_it_configuration
 *
 * @author wawan.setiawan
 */
class m_it_configuration extends MY_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function check_user_exists ($username) {
        $this->db->from('IP_CONFIG');
        $this->db->where('USERNAME',$username);
        $query = $this->db->get();
        return $query->num_rows();
    }
    
    //get by id
    function get_id($tbl, $filed, $id) {
        $this->db->where($filed,$id);
        $this->db->order_by('CONF_ID','ASC');
        $this->db->group_by('USERNAME');
        $sql=  $this->db->get($tbl);
        return $sql->result();
    }
}
