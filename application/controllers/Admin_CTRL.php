<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
	 }


	public function view($page = 'dashboard') {
		if (!file_exists(FCPATH. 'application/views/admin/' . $page . '.php')) {
			show_404();
		}
		else {
			$this->load->view('templates/header');
			$this->load->view('templates/appbar', ['logged_in' => $this->session->has_userdata('logged_in')]);
			$this->load->view('admin/' . $page);
			$this->load->view('templates/footer');
		}
	}

}
