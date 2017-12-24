<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('village');
		 $this->load->model('auth');
		 $this->load->model('user');
		 $this->load->model('bus');
	 }

	public function view($page = 'main', $id) {
		if (!file_exists(FCPATH. 'application/views/dashboard/' . $page . '.php')) {
			show_404();
		}
		else {
			$data = [
				'page' => $page,
				'user' => $this->auth->get_user($this->session->userdata('user_username')),
				'bus' => $this->bus->get_bus()
			];
			if ($id) {
				$data['id'] = $id;
				if ($page == 'buschange') {
					$data['bus'] = $this->bus->get_bus_id($id);
				}
			}
			$this->load->view('templates/header');
			$this->load->view('templates/appbar', ['logged_in' => $this->session->has_userdata('logged_in')]);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('dashboard/'. $page, $data);
			$this->load->view('templates/footer');
		}
	}

	/* Profile */
	public function changeprofile() {
		$data = [
			'username' => $this->input->post('username'),
			'realname' => $this->input->post('realname'),
			'password' => $this->input->post('password'),
		];
		if ($this->user->update_user($data) === TRUE) {
			redirect('dashboard/');
		}
		redirect('dashboard/', 'refresh');
	}

	/* Bus */
	public function addbus() {
		$data = [
			'busname' => $this->input->post('busname'),
			'buscapacity' => $this->input->post('buscapacity')
		];
		if ($this->bus->insert_bus($data) === TRUE) {
			redirect('dashboard/bus');
		}
		redirect('dashboard/bus', 'refresh');
	}

	public function deletebus($id) {
		if ($this->bus->delete_bus($id) === TRUE) {
			redirect('dashboard/bus');
		}
		redirect('dashboard/bus', 'refresh');
	}

	public function changebus($id) {
		$data = [
			'busid' => $id,
			'busname' => $this->input->post('busname'),
			'buscapacity' => $this->input->post('buscapacity')
		];
		if ($this->bus->change_bus($data) === TRUE) {
			redirect('dashboard/bus');
		}
		redirect('dashboard/bus', 'refresh');
	}

}
