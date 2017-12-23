<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticket_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('village');
		 $this->load->model('ticket');
	 }

 	public function view($page = 'main') {
 		if (!file_exists(FCPATH. 'application/views/ticket/' . $page . '.php')) {
 			show_404();
 		}
 		else {
 			$village = new Village();
 			$ticket = new Ticket();
 			$data = [
 				'village' => $village->get_village(),
 				'ticket' => $ticket->get_ticket('*'),
 				'ticket_today' => $ticket->get_ticket('today'),
 				'ticket_tomorrow' => $ticket->get_ticket('tomorrow'),
 				'logged_in' => $this->session->has_userdata('logged_in'),
 				'village_model' => $village
 			];

 			$this->load->view('templates/header');
 			$this->load->view('templates/appbar', ['logged_in' => $this->session->has_userdata('logged_in')]);
 			$this->load->view('ticket/' . $page, $data);
 			$this->load->view('templates/footer');
 		}
 	}

  public function detail($id) {
 		if (!file_exists(FCPATH. 'application/views/ticket/detail.php')) {
 			show_404();
 		}
 		else {
 			$data = [
 				'ticket' => $this->ticket->get_ticket_id($id),
 				'logged_in' => $this->session->has_userdata('logged_in')
 			];
      if ($this->ticket->get_ticket_id($id)) {
        $this->load->view('templates/header');
        $this->load->view('templates/appbar', $data);
        $this->load->view('ticket/detail', $data);
        $this->load->view('templates/footer');
      }
      else {
        show_404();
      }

 		}
 	}


}
