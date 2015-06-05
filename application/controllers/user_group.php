<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of user_group
 *
 * @author wawan.setiawan
 */
class user_group extends MY_Controller {
    public function __construct() {
        parent::__construct();
        $this->is_logged_in();
    }
    
    public function index () {
        
    }
}
