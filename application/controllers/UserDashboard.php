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
			
			$logged_in_user = $this->session->userdata('logged_in_user');			
			$arrayParameter = array('user_id'=>$logged_in_user['user_id']);
			$objData = $this->getData('book_history','book_history',$arrayParameter);

			//echo '<pre>';
			//print_r($objData);
			//exit;
		
			$this->load->view('comman/header');
			$this->load->view('order_detls');
			$this->load->view('comman/footer');
			
		}else{
			redirect(site_url('user/signin'));
		}
	}

	// Save transporter work station
	public function save_working_station(){
		
		$arrayParameter = array('user_id'=>2);
		$objData = $this->getData('view_station','view_station',$arrayParameter);
		
		echo '<pre>';
		print_r($objData);
		exit;
		if (isset($this->session->userdata['logged_in_user'])) {
			$this->load->view('comman/header');
			$this->load->view('selectStation',$objData);
			$this->load->view('comman/footer');
		} else {
			redirect(site_url('user/signin'));
		}
		
	}

	
	// Search order for transporter
	public function search_transporter_order(){
		if(isset($this->session->userdata['logged_in_user'])){

			$this->load->view('comman/header');
			$this->load->view('findorder_transporter');
			$this->load->view('comman/footer');
			
		}else{
			redirect(site_url('user/signin'));
		}
	}


	// Find order for crane
	public function search_cranes_order(){
		if (isset($this->session->userdata['logged_in_user'])) {
			$this->load->view('comman/header');
			$this->load->view('findorder_cranes');
			$this->load->view('comman/footer');
		} else {
			redirect(site_url('user/signin'));
		}
		
	}

	// Find order for packer movers
	public function search_packer_mover_order(){
		if (isset($this->session->userdata['logged_in_user'])) {
			$this->load->view('comman/header');
			$this->load->view('findorder_packers');
			$this->load->view('comman/footer');
		} else {
			redirect(site_url('user/signin'));
		}
		
	}
	
	public function getData($class,$method,$arrayField)
	{		
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL, 'http://localhost/gmt/'.$class.'/'.$method);
		curl_setopt($ch,CURLOPT_POST, count($arrayField));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $arrayField);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$result = curl_exec($ch);
		$obj = json_decode($result);		
		curl_close($ch);
		return $obj;
	}

	

}