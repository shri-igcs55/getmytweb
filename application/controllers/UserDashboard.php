<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* this controller is for dashboad
*/
class UserDashboard extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		if (!isset($this->session->userdata['logged_in_user'])) {
			redirect(site_url('user/signin'));
		}
	}

	// after login dashboard
	public function place_transporter_order(){
	
   		$this->load->view('comman/header');
		$this->load->view('place_order_transport');
		$this->load->view('comman/footer');

	}

	// place order for packer mover
	public function place_packer_mover_order(){
		
		$this->load->view('comman/header');
		$this->load->view('place_order_pack_move');
		$this->load->view('comman/footer');

	}

	// place order for crane
	public function place_crane_order(){
		
		$this->load->view('comman/header');
		$this->load->view('place_order_crane');
		$this->load->view('comman/footer');
		
	}

	// place order for crane
	public function booked_orders(){
			

		$logged_in_user = $this->session->userdata('logged_in_user');			
		$arrayParameter = array('user_id'=>$logged_in_user['user_id']);
		$objData = $this->getData('book_history','book_history',$arrayParameter);

		/*echo '<pre>';
		print_r($objData->data);
		exit;*/
	
		$this->load->view('comman/header');
		$this->load->view('order_detls',array('orderObj'=>$objData));
		$this->load->view('comman/footer');
		
	}

	// Save transporter work station
	public function save_working_station(){
		$arrayParameter = array('user_id'=>2);
		$objData = $this->getData('view_station','view_station',$arrayParameter);
		
		/*echo '<pre>';
		print_r($objData);
		exit;*/
		$this->load->view('comman/header');
		$this->load->view('selectStation',$objData);
		$this->load->view('comman/footer');
	}

	
	// Search order for transporter
	public function search_transporter_order(){
	
		$this->load->view('comman/header');
		$this->load->view('findorder_transporter');
		$this->load->view('comman/footer');
	}


	// Find order for crane
	public function search_cranes_order(){
		$this->load->view('comman/header');
		$this->load->view('findorder_cranes');
		$this->load->view('comman/footer');
	}

	// Find order for packer movers
	public function search_packer_mover_order(){
		
		$this->load->view('comman/header');
		$this->load->view('findorder_packers');
		$this->load->view('comman/footer');
	}
	
	public function getData($class,$method,$arrayField){		
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