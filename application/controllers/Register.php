<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->library('session');  // เรียกใช้งาน session
   $this->load->helpers('path_helper');
 }

 function index()
 {
   //$this->load->helper(array('form'));
   $this->load->view('regis');
 }

 

}

?>
