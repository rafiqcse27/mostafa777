<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Gallery extends MY_Controller {
    function __construct() {
        parent::__construct();       
    }

    public function index() {
        $this->data['meta_title'] = 'Image Gallery';
        $this->data['meta_sub_title'] = '';
        $this->load_view('gallery', $this->data);
    }

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */