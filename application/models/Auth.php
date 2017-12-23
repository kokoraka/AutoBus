<?php
  class Auth extends CI_MODEL {
    public function __construct() {
      parent::__construct();
      $this->load->database();
    }

    public function insert_user() {
      $data = [
        'user_username' => $this->input->post('username'),
        'user_password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        'user_realname' => '',
        'authority_id' => 'USER'
      ];
      $try = $this->db->insert('user', $data);
      if ($try) {
        return TRUE;
      }
      return FALSE;
    }

    public function get_user($username) {
      $condition = "user_username =" . "'" . $username . "'";
      $this->db->select('*');
      $this->db->from('user');
      $this->db->where($condition);
      $try = $this->db->get();
      if ($try->num_rows() == 1) {
        return $try->row();
      }
      return FALSE;
    }

    public function valid_user($data) {
      $user = $this->get_user($data['user_username']);
      if ($user) {
        if ($user->user_username == $data['user_username']  && password_verify($data['user_password'], $user->user_password)) {
          return TRUE;
        }
        return FALSE;
      }
      return FALSE;
    }

    public function logged_in() {
      if ($this->session->has_userdata('logged_in') === TRUE) {
        if ($this->session->userdata('logged_in') === TRUE) {
          return TRUE;
        }
        return FALSE;
      }
      return FALSE;
    }

  }
?>
