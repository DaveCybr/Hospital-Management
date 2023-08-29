<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index()
    {
        $data = array(
            'body' => 'Home/index',
        );
        $this->load->view('index', $data);
    }
}