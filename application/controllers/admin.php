<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Admin extends Admin_Controller {

    function __construct() {
        parent::__construct();       
    }

    public function index() {
        $this->data['meta_title'] = 'My Profile';
        $this->data['meta_sub_title'] = '';
        $this->load_view('admin/index', $this->data);
    }

    public function gallery() {
        $this->data['meta_title'] = 'My Profile';
        $this->data['meta_sub_title'] = '';
        $this->load_view('admin/gallery', $this->data);
    }


}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */