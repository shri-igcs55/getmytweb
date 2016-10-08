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
	public function place_transporter_order(){
		// echo "<script>alert('work');</script>";
		if (isset($this->session->userdata['logged_in_user'])) {

       		$this->load->view('comman/header');
			$this->load->view('place_order_transport');
			$this->load->view('comman/footer');

       	}else{
       		redirect(site_url('user/signin'));
       	}
	}

	// place order for packer mover
	public function place_packer_mover_order(){
		if(isset($this->session->userdata['logged_in_user'])){

			$this->load->view('comman/header');
			$this->load->view('place_order_pack_move');
			$this->load->view('comman/footer');

		}else{
			redirect(site_url('user/signin'));
		}
	}

	// place order for crane
	public function place_crane_order(){
		if(isset($this->session->userdata['logged_in_user'])){

			$this->load->view('comman/header');
			$this->load->view('place_order_crane');
			$this->load->view('comman/footer');
			
		}else{
			redirect(site_url('user/signin'));
		}
	}

	// place order for crane
	public function booked_orders(){
		if(isset($this->session->userdata['logged_in_user'])){

			$this->load->view('comman/header');
			$this->load->view('order_detls');
			$this->load->view('comman/footer');
			
		}else{
			redirect(site_url('user/signin'));
		}
	}

}