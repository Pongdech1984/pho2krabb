<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

      public function check_user($u_user = '')
      {
              $this->db->select('u.user_id,u.user_name,u.user_pass,up.upf_pic');
              $this->db->from('user u');
              $this->db->join('user_profile up' , 'u.user_id = up.user_id');
              $this->db->where('user_name',$u_user);

              $query = $this->db->get();
              return $query->row();
      }
      public function get_user($userid = '')
      {
              $this->db->select('u.user_id,u.user_name,u.user_pass,up.upf_name,up.upf_tel,up.upf_email,up.upf_line,up.upf_fb,up.upf_pic');
              $this->db->from('user u');
              //$this->db->join('user_folio uf' , 'u.user_id = uf.user_id');
              $this->db->join('user_profile up' , 'u.user_id = up.user_id');
              $this->db->where('u.user_id',$userid);

              $query = $this->db->get();
              return $query->row();
      }


    }

?>
