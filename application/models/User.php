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

  }
?>
