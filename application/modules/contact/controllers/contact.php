<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MY_Controller {
    function __construct() {
        parent::__construct();       
    }

    public function index() {
        $this->data['meta_title'] = 'Contact Us';
        $this->data['meta_sub_title'] = '';
        $this->load_view('public/contact', $this->data);
    }

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */