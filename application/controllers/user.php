<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user
 *
 * @author wawan.setiawan
 */
class user extends MY_Controller {
    
    public $table = "user";
    public $unique = "username";

    public function __construct() {
        parent::__construct();
        $this->load->library(array('ldap','Excel'));
        $this->load->config('ldap');
        $this->load->model(array('m_user'));
        $this->is_logged_in();
    }

    public function index() {
        // data direct from active directory
        //$data['entries'] = $this->ldap->get_entries();
        
        // data from application table, app server
        $data['entries'] = $this->m_user->get_all_users();
        parent::_view('user', $data);
    }
    
    public function retrive_user() {
        $rows_data= array();
        $rows_update = array();
        $entries = $this->ldap->get_entries();
        for($i=0; $i < $entries['count']; $i++) {
            $username = $entries[$i]['samaccountname'][0];
            $name = $entries[$i]['name'][0];
            if (isset($entries[$i]['userprincipalname'][0])) { 
                $userprincipalname = $entries[$i]['userprincipalname'][0]; 
                $email = str_replace(".local", ".com", $userprincipalname);
            } else {
                $email = "";
            }
            $data = array (
                'USERNAME'=>$username,
                'NAME'=>$name,
                'EMAIL'=>$email
            );
            $data2 = array(
                'USERNAME'=>$username,
                'NAME'=>$name
            );
            
            //check user exists
            $num_row = $this->m_user->check_user_exists($username);
            if ($num_row > 0) {                
                array_push($rows_update, $data2); //add an array if existing
            } else {                
                array_push($rows_data, $data); //add an array if not existing
            }
            
        }
        if (count($rows_data) > 0) {
            $insert_batch = $this->m_user->add_batch('user',$rows_data);
        }
        if (count($rows_update) > 0) {
            $this->m_user->update_batch('user',$rows_update, 'USERNAME'); // update batch
        }
        if ($insert_batch) {
            $this->session->set_flashdata('success_msg', 'Synchronization with active directory server are successful. Users has been up to date');
        } else  {
            $this->session->set_flashdata('success_update_msg', 'Users are up to date');
        }
        
        redirect('user');
    }
    
    public function user_profile () {
        $data['title'] = 'User Profile';
        $data['user'] = $this->m_user->get_id('user','USERNAME',  $this->session->userdata('username'));
        parent::_view('user_profile', $data);
    }
    
    public function update_profile () {
        // upload file
        if ($this->input->post('fileAvatar') !== null) {
            $config['upload_path'] = './uploads/avatar';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';

            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('fileAvatar')) {
                $error = array('error' => $this->upload->display_errors());
                //$this->session->set_flashdata('error_msg', $error['error']);
            } else {
                $uploaded = $this->upload->data();                
            }
        }
        
        if ($uploaded['file_name']!="") {
            $data = array(
                'EMAIL' => $this->input->post('txtEmail'),
                'MOBILE' => $this->input->post('txtMobile'),
                'BIO' => $this->input->post('txtBio'),            
                'LAST_EDIT_DATE' => date('Y-m-d H:i:s'),
                'LAST_EDITED_BY' => $this->session->userdata('username'),
                'AVATAR' => $uploaded['file_name']
            );
            $this->session->set_userdata('avatar', $uploaded['file_name']);
        } else {
            $data = array(
                'EMAIL' => $this->input->post('txtEmail'),
                'MOBILE' => $this->input->post('txtMobile'),
                'BIO' => $this->input->post('txtBio'),            
                'LAST_EDIT_DATE' => date('Y-m-d H:i:s'),
                'LAST_EDITED_BY' => $this->session->userdata('username'),
            );
        }

        $update = $this->m_user->update($this->table, 'USERNAME',  $this->session->userdata('username'),$data);
        if ($update) {            
            $this->session->set_flashdata('success_msg', 'User profile has been updated');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to update user profile. Please try again');
        }
        redirect('user/user_profile');
        
    }
    
    public function user_info($username) {
        $info = $this->m_user->get_id_user($username);
        
    }
    
    public function update() {
        $username = $this->input->post('txtUsername');
        $data = array (
            'EMAIL' => $this->input->post('txtEmail'),
            'USER_GROUP_ID'=>  $this->input->post('listUserGroup')
        );
        $update = $this->m_user->update($this->table, $this->unique, $username, $data);
        if ($update) {            
            $this->session->set_flashdata('success_msg', 'User "'.$username.'" has been updated');
        } else {
            $this->session->set_flashdata('error_msg', 'Failed to update user "'.$username.'". Please try again');
        }
        redirect('user');
    }
    
    public function export_excel() {
        $this->load->library('excel');
        $this->excel->setActiveSheetIndex(0);
        $this->excel->getActiveSheet()->setTitle('Users');
        $this->excel->getActiveSheet()->setCellValue('A1', 'All Users');
        $this->excel->getActiveSheet()->mergeCells('A1:D1');
        $this->excel->getActiveSheet()->getStyle('A1')->getAlignment()->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_CENTER);
        
        //set column width
        $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
        $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(25);
        $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(40);
        $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(10);        
        
        // set table header
        $this->excel->getActiveSheet()->setCellValue('A3', 'Username');
        $this->excel->getActiveSheet()->setCellValue('B3', 'Name');
        $this->excel->getActiveSheet()->setCellValue('C3', 'Email');
        $this->excel->getActiveSheet()->setCellValue('D3', 'Grup');
        
        $this->excel->getActiveSheet()->getStyle('A3')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('B3')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('C3')->getFont()->setBold(true);
        $this->excel->getActiveSheet()->getStyle('D3')->getFont()->setBold(true);
        
        
        $users = $this->m_user->get_all_users();
        $cellRow=3;
        
        foreach ($users->result() as $row) { 
            
            $cellRow++;
            
            $this->excel->getActiveSheet()->setCellValue('A' . $cellRow, strtolower($row->USERNAME));
            $this->excel->getActiveSheet()->setCellValue('B' . $cellRow, strtolower($row->NAME));
            $this->excel->getActiveSheet()->setCellValue('C' . $cellRow, strtolower($row->EMAIL));
            $this->excel->getActiveSheet()->setCellValue('D' . $cellRow, strtolower($row->USER_GROUP_NAME));
        }

        $filename = 'users.xlsx';
        header('Content-Type: application/vnd.ms-excel');
        header('Content-Disposition: attachment; filename="' . $filename . '"'); //tell the browser what's the filename
        header('Cache-Control: max-age=0'); // no chache
        //save it to Excel5 format(excel 2003 .XLS file), change this to 'Excel2007' (and adjust the filename extension, also the header mime type)
        //if you want ti save it as .XLSX excel 2007 format

        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel2007');
        $objWriter->save('php://output');
    }
    
    // for testing only
    public function get_ad_users() {
        $entries = $this->ldap->get_entries();
        for($i=0; $i < $entries['count']; $i++) {
            $username = $entries[$i]['samaccountname'][0];
            $name = $entries[$i]['name'][0];
            
            echo $username."<br>";
        }
    }
}
