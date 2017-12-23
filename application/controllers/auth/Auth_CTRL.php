<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('Auth');
	 }

	 public function register() {
		 if ($this->Auth->logged_in() === FALSE) {
			 $this->form_validation->set_rules('username', 'Username', 'required|is_unique[user.user_username]');
			 $this->form_validation->set_rules('password', 'Password', 'required');
			 $this->form_validation->set_rules('confirm_password', 'Konfirmasi Password', 'required|matches[password]');

			 if ($this->form_validation->run() === FALSE) {
				 $this->load->view('templates/header');
				 $this->load->view('templates/appbar', ['logged_in' => $this->session->has_userdata('logged_in')]);
				 $this->load->view('auth/register');
				 $this->load->view('templates/footer');
			 }
			 else {
				 if ($this->Auth->insert_user()) {
					 redirect('login');
				 }
				 else {
					 redirect('register', 'refresh');
				 }
			 }
	 	}
		else {
			redirect('/');
		}
	 }

	 public function login() {
		 if ($this->Auth->logged_in() === FALSE) {
			 $this->form_validation->set_rules('username', 'Username', 'required');
			 $this->form_validation->set_rules('password', 'Password', 'required');

			 $data = [
				 'user_username' => $this->input->post('username'),
				 'user_password' => $this->input->post('password')
			 ];

			 if ($this->form_validation->run() === FALSE) {
				 $this->load->view('templates/header');
				 $this->load->view('templates/appbar', ['logged_in' => $this->session->has_userdata('logged_in')]);
				 $this->load->view('auth/login');
				 $this->load->view('templates/footer');
			 }
			 else {
				 if ($this->Auth->valid_user($data) === TRUE) {
					 $this->session->set_userdata(['logged_in' => TRUE]);
					 $this->session->set_userdata(['user_username' => $data['user_username']]);
					 redirect('dashboard');
				 }
				redirect('login');
			 }
		 }
		 else {//sudah login
			 redirect('/');
		 }

	 }

	 public function logout() {
		 $this->session->unset_userdata();
		 $this->session->sess_destroy();
		 redirect('/');
	 }

}
