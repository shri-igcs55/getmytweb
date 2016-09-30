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
		// echo "<script>alert('work');</script>";
		if (isset($this->session->userdata['logged_in_user'])) {

       		$this->load->view('comman/header');
			$this->load->view('place_order_transport');
			$this->load->view('comman/footer');

       	}else{
       		redirect(site_url('user/signin'));
       	}
	}

}