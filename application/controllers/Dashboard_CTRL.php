<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('village');
	 }

	public function view($page = 'main') {
		if (!file_exists(FCPATH. 'application/views/dashboard/' . $page . '.php')) {
			show_404();
		}
		else {
			$this->load->view('templates/header');
			$this->load->view('templates/appbar', ['logged_in' => $this->session->has_userdata('logged_in')]);
			$this->load->view('dashboard/'. $page);
			$this->load->view('templates/footer');
		}
	}

}
