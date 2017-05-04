<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
  {
            parent::__construct();
            $this->load->library('session');  // เรียกใช้งาน session
						$this->load->helpers('path_helper');
    }
	 public function index()
	 {
		 if($this->session->userdata('logged_in')){
		 $sess = $this->session->userdata('logged_in');

		 $this->load->view('mainpage',$sess);
		 }
			else
		{
			redirect('login');
		}
 	}

	public function user_profile()
	{
			if($this->session->userdata('logged_in')){
				$sess = $this->session->userdata('logged_in');
				$userid = $sess['userid'];

				$this->load->model('user_model');
				$data['userprofile'] = $this->user_model->get_user($userid);

				echo ('<pre>');
				print_r ($data);
				exit();

				$this->load->view('header',$sess);
				$this->load->view('user_profile',$data);
				$this->load->view('footer');

			}
			else
			{
				redirect('login');
			}
  }
}
