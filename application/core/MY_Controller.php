<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/*
 * @author    : Mhd Zaher Ghaibeh
 * @company   : IRWork Canada
 * @link      : http://www.IRWork
 * @email     : info@IRWork
 * @date      : Dec 4, 2011
 * @copyright :	Copyright (c) 2011 , IRWork Canada, Inc.
 * @version   :	Version 1.0
 * @filename  : MY_Controller.php
 */

class MY_Controller extends CI_Controller {

    protected $theme;
    protected $debug;
    protected $clean_output;

    public function __construct() {
        parent::__construct();
        $this->theme = config_item('app_theme');
        $this->debug = config_item('app_debug');
        $this->clean_output = config_item('app_clean_output');
        if ($this->debug) {
            $this->load->spark('Debug-Toolbar/1.0.7');
            $this->load->library('console');
            $this->output->enable_profiler(true);
        }

        $this->layout->set_layout_dir('views/themes/' . $this->theme . '/layouts/');
        $layout_file = (!$this->mobiledetection->isMobile()) ? 'layout' : 'mobile_layout' ;
        $this->layout->set_layout($layout_file);
        if(!$this->clean_output){
            $this->layout->disable_clean_output();
        }

    }

}
