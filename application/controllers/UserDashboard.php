<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* this controller is for dashboad
*/
class UserDashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
	}

	// after login dashboard
	public function customer(){

		$this->load->view('comman/header');
		$this->load->view('place_order_transport');
		$this->load->view('comman/footer');

	}
}