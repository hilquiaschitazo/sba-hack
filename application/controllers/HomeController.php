<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class HomeController extends CI_Controller {

//Instacia
    public function __construct() {
        parent:: __construct();
    }

    //Nova 
    public function index() {
        $this->load->view('Home');
    }

    
}
