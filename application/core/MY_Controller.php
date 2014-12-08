<?php


class MY_Controller extends CI_Controller {

    public $data = array();
    public $parser;
    function __construct() {
        parent::__construct();
            $data = new stdClass();
            $data->site_name = config_item('site_name');
            $this->load->vars($data);
    }
    /**
     * Set subview and load layout
     * @param string $subview
     */
    public function load_view($subview) {
        $this->data['subview'] = $subview;
        $this->data['site_name'] = config_item('site_name');
        $this->data['site_short_name'] = config_item('site_short_name');
        $this->load->view('public/layout', $this->data);
    }
}

class Admin_Controller extends CI_Controller {
    protected $the_user;
    public function __construct() {
        parent::__construct();
        $this->load->model('admin_m');
        if ($this->ion_auth->in_group('admin')) {
            $this->the_user = $this->ion_auth
                    ->user()
                    ->row();
            $data = new stdClass();
            $data->the_user = $this->the_user;
            $data->site_name = config_item('site_name');
           
            $this->load->vars($data);
             
        } else {
            redirect('auth/login');
        }
    }
    public function load_view($subview) {
        $this->data['subview'] = $subview;
        $this->data['site_name'] = config_item('site_name');
        $this->data['site_short_name'] = config_item('site_short_name');
        $this->load->view('admin/layout', $this->data);
    }
}


