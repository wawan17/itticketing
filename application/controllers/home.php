<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of home
 *
 * @author wawan.setiawan
 */
class home extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model(array('m_user','m_ticket'));
//        if ($this->session->userdata('username')!="") {
//            redirect('ticket');
//        }
    }
    
    public function index() {
        if ($this->session->userdata('username')) {
            redirect('dashboard');
        }
        $data['Title'] = 'Home';
        parent::_view_fron('index', $data);        
    }
    
    public function login_process() {
        // check user in LDAP / Directory Access
        $this->load->library('ldap');

        $username = $this->input->post('txtLDAPus');
        $password = $this->input->post('txtLDAPp');

        if ($username=="" || $password=="") {
            $this->session->set_flashdata('login_error_msg', 'Please type your username or password before!');
            redirect('home');
        }
        
        $ldap = $this->ldap->auth($username, $password);
        if ($ldap) {
            //$info = $this->ldap->user_info($username);
            //$name = $info[0]['name'][0];
            //$username = $info[0]['samaccountname'][0];
//            if (isset($info[0]['userprincipalname'][0])) { 
//                $userprincipalname = $info[0]['userprincipalname'][0]; 
//                $email = str_replace(".local", ".com", $userprincipalname);
//            } else {
//                $email = "";
//            }
            
            // get user info
            $info = $this->m_user->get_id_user($username);
            foreach ($info->result() as $info_user) {
                $name = $info_user->NAME;
                $email = $info_user->EMAIL;
                $avatar = $info_user->AVATAR;
                $groupid = $info_user->USER_GROUP_ID;
                $group = $info_user->USER_GROUP_NAME;
            }
            
            
            $data = array(
                'username' => $this->input->post('txtLDAPus'),
                'pword' => $this->input->post('txtLDAPp'),
                'name' => $name,
                'email' => $email,
                'avatar' => $avatar,
                'group_id' => $groupid,
                'group' => $group,
                'is_logged_in' => TRUE
            );

            $this->session->set_userdata($data);
            redirect('dashboard');
        } else {    
            $this->session->set_flashdata('login_error_msg', 'Username or password are incorect. Please try again!');
            redirect('home');
        }  
    }
    
    function logout() {
        $this->session->unset_userdata();
        $this->session->sess_destroy();

        $this->output->set_header("HTTP/1.0 200 OK");
        $this->output->set_header("HTTP/1.1 200 OK");
        $this->output->set_header('Last-Modified: ' . gmdate('D, d M Y H:i:s', $last_update) . ' GMT');
        $this->output->set_header("Cache-Control: no-store, no-cache, must-revalidate");
        $this->output->set_header("Cache-Control: post-check=0, pre-check=0");
        $this->output->set_header("Pragma: no-cache");

        redirect('home');
    }
    
    public function closed_ticket($ticket_id,$ename) {
        $data = array(
            'ticket_status_id' => 5,
            'close_date' => date('Y-m-d H:i:s'),
            'closed_by' => $ename,
        );
        $data2 = array(
            'TICKET_COMMENT_ID' => '',
            'COMMENT' => 'Ticket has been closed by user at ' . date('m/d/Y H:i:s'),
            'USERNAME' => $ename,
            'TICKET_ID' => $ticket_id,
            'CREATE_DATE' => date('Y-m-d H:i:s')
        );
        $this->m_ticket->update('ticket', 'TICKET_ID', $ticket_id, $data);
        $this->m_ticket->add('ticket_comment', $data2);
        redirect('home');
    }
    
    public function under_construction() {
        $this->load->view('welcome_message');
    }
    
    public function user_guide($lang="en") {
        if ($lang=="id") {
            $this->load->view('guide/guide_id');
        } else {
            $this->load->view('guide/guide_en');
        }
    }
}
