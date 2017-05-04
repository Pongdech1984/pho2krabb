<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('session');  // เรียกใช้งาน session
   $this->load->helpers('path_helper');
 }

 function index()
 {
   //$this->load->helper(array('form'));
   $this->load->view('mainpage2');
 }

 public function verify_login()
 {
     $this->load->model('user_model');
     $u_user = $this->input->post("username");
     $u_pass = $this->input->post("password");
     $user = $this->user_model->check_user($u_user);
     $user_id = $user->user_id;
     $pass = $user->user_pass;
     $userpic = $user->upf_pic;
     $userid = $user_id;

       if($u_pass==$pass)
       {
         //echo "ล็อคอินสำเร็จ";
         $sess_array['username'] = $user->user_name;
         $sess_array['userid'] = $user_id;
         $sess_array['userpass'] =$pass;
         $sess_array['userpic'] =$userpic;
         //echo ('<pre>');
         //print_r ($sess_array);
         //exit();
         $this->session->set_userdata('logged_in',$sess_array);
           redirect('user');
       }else{
         echo "<script type='text/javascript'>window.location.href = 'index';";
         echo "alert('ชื่อผู้ใช้หรือรหัสผ่านไม่ถูกต้อง');" ;
         echo "</script>" ;
       }
     //$this->session->sess_expiration('1200');

 }
 public function logout()
 {
   if($this->session->userdata('logged_in')){
     $sess = $this->session->userdata('logged_in');

     $this->session->unset_userdata('logged_in');
     session_destroy();
     redirect('home');
   }
   else
   {
     redirect('home');
   }
 }


}

?>
