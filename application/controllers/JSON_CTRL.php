<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class JSON_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('village');
		 $this->load->model('ticket');
	 }

   public function searchticket() {
		 $source = $this->input->post('source');
		 $destination = $this->input->post('destination');

		 $result = $this->ticket->get_ticket_sd($source, $destination);
		 echo json_encode($result);
   }

	 public function getvillagename() {
		$id = $this->input->post('id');
		$result = $this->village->get_village_name($id);
		echo json_encode($result);
	 }
}
