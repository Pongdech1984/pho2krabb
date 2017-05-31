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
	public function register()
	{
		$this->load->view('user-register');
	}
	public function register_add(){
		$u_user = $this->input->post("username");
		$pass = $this->input->post("password");
		$conpass = $this->input->post("conpassword");

		$userid = array(
        'user_name' => $u_user,
        'user_pass' => $pass,
				'rec_create_when' =>date("Y-m-d H:i:s")

		);
		$this->db->insert('user', $userid);
		$insert_id = $this->db->insert_id();

		$name = $this->input->post("name");
		$phone = $this->input->post("phone");
		$email = $this->input->post("email");
		$appline = $this->input->post("appline");
		$fb = $this->input->post("fb");

		$useradd = array(
				'user_id' => $insert_id,
        'upf_name' => $name,
        'upf_tel' => $phone,
				'upf_email' => $email,
				'upf_line' => $appline,
				'upf_fb' => $fb,
				'rec_create_when' =>date("Y-m-d H:i:s")

		);
		$this->db->insert('user_profile', $useradd);

		redirect('home');
	}
}
