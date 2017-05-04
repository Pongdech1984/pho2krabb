<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
            parent::__construct();
            $this->load->library('session');  // เรียกใช้งาน session
						$this->load->helpers('path_helper');
    }
	public function index()
	{
		$this->load->view('mainpage2');
	}
}
