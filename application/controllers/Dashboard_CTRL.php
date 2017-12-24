<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('village');
		 $this->load->model('auth');
		 $this->load->model('user');
		 $this->load->model('bus');
		 $this->load->model('ticket');
	 }

	public function view($page = 'main', $id) {
		if ($this->auth->logged_in() === FALSE) {
			redirect('/');
		}
		else {
			if (!file_exists(FCPATH. 'application/views/dashboard/' . $page . '.php')) {
				show_404();
			}
			else {
				$data = [
					'page' => $page,
					'user' => $this->auth->get_user($this->session->userdata('user_username')),
					'bus' => $this->bus->get_bus(),
					'ticket' => $this->ticket->get_ticket(),
					'village' => $this->village->get_village(),
				];
				if ($id) {
					$data['id'] = $id;
					if ($page == 'buschange') {
						$data['bus'] = $this->bus->get_bus_id($id);
					}
					if ($page == 'ticketchange') {
						$data['ticket'] = $this->ticket->get_ticket_id($id);
					}

				}
				$this->load->view('templates/header');
				$this->load->view('templates/appbar', ['logged_in' => $this->session->has_userdata('logged_in')]);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('dashboard/'. $page, $data);
				$this->load->view('templates/footer');
			}
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

	/* Ticket */
	public function addticket() {
		$data = [
			'ticketname' => $this->input->post('ticketname'),
			'ticketquantity' => $this->input->post('ticketquantity'),
			'ticketprice' => $this->input->post('ticketprice'),
			'busid' => $this->input->post('busid'),
			'sourceid' => $this->input->post('sourceid'),
			'destinationid' => $this->input->post('destinationid'),
			'datedepart' => $this->input->post('datedepart'),
			'datearrive' => $this->input->post('datearrive'),
		];
		if ($this->ticket->insert($data) === TRUE) {
			redirect('dashboard/ticket');
		}
		redirect('dashboard/ticket', 'refresh');
	}

	public function deleteticket($id) {
		if ($this->ticket->delete($id) === TRUE) {
			redirect('dashboard/ticket');
		}
		redirect('dashboard/ticket', 'refresh');
	}

	public function changeticket($id) {
		$data = [
			'ticketid' => $id,
			'ticketname' => $this->input->post('ticketname'),
			'ticketquantity' => $this->input->post('ticketquantity'),
			'ticketprice' => $this->input->post('ticketprice'),
			'busid' => $this->input->post('busid'),
			'sourceid' => $this->input->post('sourceid'),
			'destinationid' => $this->input->post('destinationid'),
			'datedepart' => $this->input->post('datedepart'),
			'datearrive' => $this->input->post('datearrive'),
		];
		if ($this->ticket->change($data) === TRUE) {
			redirect('dashboard/ticket');
		}
		redirect('dashboard/ticket', 'refresh');
	}

}
