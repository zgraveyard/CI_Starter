<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends MY_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->load->view('themes/' . $this->theme . '/welcome_message');
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */