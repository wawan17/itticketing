<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of report
 *
 * @author wawan.setiawan
 */
class Report extends MY_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $data['title'] = 'Report';
        parent::_view('report/reports', $data);
    }
}
