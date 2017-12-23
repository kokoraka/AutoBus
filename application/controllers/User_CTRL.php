<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_CTRL extends CI_Controller {

	 public function __construct() {
		 parent::__construct();
		 $this->load->model('User');
	 }


}
