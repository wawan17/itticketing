<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of it_configuration
 *
 * @author wawan.setiawan
 */
class It_configuration extends MY_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('ldap');
        $this->load->config('ldap');
        $this->load->model(array('m_user','m_it_configuration'));
        $this->is_logged_in();
    }
    
    // Config IT
    public function config_ip($loc_id=null) {
        $data['entries'] = $this->m_it_configuration->get_id('ip_config','LOC_ID',$loc_id);
        $data['loc'] = $this->m_it_configuration->get_all('location','LOC_ID','ASC');
        parent::_view('config_ip', $data);
    }
    
    public function set_new_ip() {
        $data = array(
            'USERNAME' => $this->input->post('txtUsername'),
            'NAME' => $this->input->post('txtName'),
            'LOC_ID' => $this->input->post('listLocation'),
            'TAGGING' => $this->input->post('txtTagging'),
            'IP_ADDRESS' => $this->input->post('txtIP'),
            'NOTES' => $this->input->post('txtNotes'),
            'CREATE_DATE' => date('Y-m-d H:i:s'),
            'CREATED_BY' => $this->session->userdata('username')
        );
        
        // check for user with IP
        $username = $this->input->post('txtUsername');
        $row = $this->m_it_configuration->get_id('ip_config', 'USERNAME', $username);
        foreach ($row as $r) {
            $ip = $r->IP_ADDRESS;
        }
        
        if ($ip != "") {
            $set_new = $this->m_it_configuration->add('ip_config', $data);
            if ($set_new) {
                $this->session->set_flashdata('success_msg', 'New IP Address has been set to user '.$username);
            } else {
                $this->session->set_flashdata('error_msg', 'Failet to set new IP address to user '.$username);
            }
        } else {
            $set = $this->m_it_configuration->update('ip_config', 'USERNAME', $username, $data);
            if($set) {
                $this->session->set_flashdata('success_msg', 'New IP Address has been set to user '.$username);
            } else {
                $this->session->set_flashdata('error_msg', 'Failet to set new IP address to user '.$username);
            }
        }
        
        redirect('it_configuration/config_ip');
        
        
    }

    public function retrive_user() {
        $rows_data= array();
        $rows_update = array();
        $entries = $this->ldap->get_entries();
        for($i=0; $i < $entries['count']; $i++) {
            $username = $entries[$i]['samaccountname'][0];
            $name = $entries[$i]['name'][0];
            $data = array (
                'USERNAME'=>$username,
                'NAME'=>$name,
            );
            $data2 = array(
                'USERNAME'=>$username,
                'NAME'=>$name
            );
            
            //check user exists
            $num_row = $this->m_it_configuration->check_user_exists($username);
            if ($num_row > 0) {                
                array_push($rows_update, $data2); //add an array if existing
            } else {                
                array_push($rows_data, $data); //add an array if not existing
            }
            
        }
        if (count($rows_data) > 0) {
            $insert_batch = $this->m_it_configuration->add_batch('ip_config',$rows_data);
        }
        if (count($rows_update) > 0) {
            $this->m_user->update_batch('ip_config',$rows_update, 'USERNAME'); // update batch
        }
        if ($insert_batch) {
            $this->session->set_flashdata('success_msg', 'Synchronization with active directory server are successful. Users has been up to date');
        } else  {
            $this->session->set_flashdata('success_update_msg', 'Users are up to date');
        }
        
        redirect('it_configuration/config_ip');
    }
    
    public function add_location() {
        $data = array(
            'LOC_ID' => '',
            'LOCATION' => $this->input->post('txtLocation'),
            'CREATE_DATE' => date('Y-m-d H:i:s'),
            'CREATED_BY' => $this->session->userdata('username')
        );
        $this->m_it_configuration->add('location',$data);
        redirect('it_configuration/config_ip');
    }

    public function software_license() {
        $data['title'] = "Software License List";
        parent::_view('software_license', $data);
    }

}
