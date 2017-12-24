<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Order_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('order');
		 $this->load->model('auth');
	 }

	/* Order */

	public function addticket($id) {
		if ($this->auth->logged_in() === TRUE) {
			if ($this->order->get_order_username($this->session->userdata('user_username'))) {
				$orderid = $this->order->get_order_username($this->session->userdata('user_username'))[0]->order_id;
			}
			else {
				$orderid = $this->order->insert();
			}
			$data = array(
				'order_id' => $orderid,
				'orderdetail_quantity' => 1,
				'ticket_id' => $id
			);
			if ($this->order->insert_detil($data) === TRUE) {
				redirect('dashboard/order');
			}
			redirect('dashboard/order', 'refresh');
		}
		redirect('login', 'refresh');
	}

}
