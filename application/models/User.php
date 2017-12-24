<?php
  class User extends CI_MODEL {
    public function __construct() {
      parent::__construct();
      $this->load->database();
    }

   public function get_user($cat = '*') {
     switch ($cat) {
       case '*':
        $qry = "SELECT * FROM user";
        return $this->db->query($qry)->result_object();
       break;
       default:
         return $this->db->query($qry)->result_object();
       break;
     }
   }

   public function update_user($data) {
     $field = array(
      'user_realname' => $data['realname']
     );

     if ($data['password']) {
       $field = array(
         'user_realname' => $data['realname'],
         'user_password' => password_hash($data['password'], PASSWORD_DEFAULT)
       );
     }

     $this->db->set($field);
     $this->db->where('user_username', $data['username']);
     $try = $this->db->update('user', $field);
     if ($try) {
       return TRUE;
     }
     return FALSE;
   }

   public function delete($id) {
     $this->db->where('user_username', $id);
     $try = $this->db->delete('user');
     if ($try) {
       return TRUE;
     }
     return FALSE;
   }


  }
?>
