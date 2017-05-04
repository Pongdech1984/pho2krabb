<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class login_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }
     public function user_permission()
     {
             $query = $this->db->query('select * from user_permission');
             return $query->result();
     }
     public function user($user_id='')
     {
             $sql = 'select u.user_id,u.name_user,u.user_name,ua.user_id,ua.user_auth,up.permission_id,up.permission_name from user u';
             $sql .= ' inner join user_auth ua on (u.user_id=ua.user_id) ';
             $sql .= ' inner join user_permission up on (u.user_permission=up.permission_id) ';
             $sql .= ' where u.user_id = '.$user_id;
             $query = $this->db->query($sql);
             return $query->row();
     }
     public function user_login($u_user,$auth_pass)
     {
              $this->db->select('u.user_name,u.name_user,up.permission_name,ua.user_auth');
              $this->db->from('user u');
              $this->db->join('user_auth ua' , 'u.user_id = ua.user_id');
              $this->db->join('user_permission up' , 'u.user_permission = up.permission_id');
              $this->db->where('u.user_name',$u_user);
              $this->db->where('ua.user_auth',$auth_pass);
              $this->db->where('u.rec_status = 1');
              $this->db->where('ua.rec_status = 1');
              //$this->db->limit(1);

              $query = $this->db->get();

                if($query->num_rows() == 1)
              {
                return $query->result();
              }
                else
              {
                return false;
              }
      }
      public function check_user($u_user = '')
      {
              $this->db->select('u.user_id,u.user_name,u.name_user,up.permission_id,up.permission_name');
              $this->db->from('user u');
              $this->db->join('user_permission up', 'u.user_permission = up.permission_id');
              $this->db->where('u.user_name',$u_user);
              $this->db->where('u.rec_status = 1');

              $query = $this->db->get();
              return $query->row();
      }
      public function check_password($user_id = '')
      {
              $this->db->select('user_auth');
              $this->db->from('user_auth');
              //$this->db->where('user_auth',$auth_pass);
              $this->db->where('user_id',$user_id);
              $this->db->where('rec_status = 1');

              $query = $this->db->get();
              return $query->row();
      }
      public function get_images_user($userid = '')
      {
              $this->db->select('userpic_path, userpic_filename');
              $this->db->from('user_picture');
              $this->db->where('user_id', $userid);
              $this->db->where('rec_status', 1);
              $query = $this->db->get();
              return $query->result();
      }
      public function get_img_user($userid = '')
      {
              $this->db->select('userpic_path, userpic_filename');
              $this->db->from('user_picture');
              $this->db->where('user_id', $userid);
              $this->db->where('rec_status', 1);
              $query = $this->db->get();
              return $query->row();
      }
      public function list_user()
      {
              $this->db->select('u.user_id, u.user_name, u.name_user, up.permission_name');
              $this->db->from('user u');
              $this->db->join('user_permission up' , 'u.user_permission = up.permission_id');
              $this->db->where('rec_status', 1);
              $query = $this->db->get();
              return $query->result();
      }
    }

?>
