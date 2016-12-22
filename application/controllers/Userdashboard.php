<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* this controller is for dashboad
*/
class Userdashboard extends CI_Controller
{
	
	public function Userdashboard()
	{
		parent:: __construct();
		$logged_in_user = $this->session->userdata('logged_in_user');
		if (!isset($logged_in_user)) {
			redirect(site_url('user/signin'));
		}
		
	}

	public function index(){
		$logged_in_user = $this->session->userdata('logged_in_user');
		if($logged_in_user['user_status'] == '1'){
			$this->load->view('comman/header');
			$this->load->view('user_verification');
			$this->load->view('comman/footer');
		}else{
			redirect('user/edit');
		}
	}
	
	// after login dashboard
	public function place_transporter_order(){
		
		$logged_in_user = $this->session->userdata('logged_in_user');
		$this->load->view('comman/header');	
		
		if($logged_in_user['user_status'] != '1'){
	   		$this->load->view('place_order_transport');
		}else{
			$this->load->view('user_verification');
		}
		
		$this->load->view('comman/footer');
	}

	// place order for packer mover
	public function place_packer_mover_order(){
		
		$this->load->view('comman/header');
		$this->load->view('place_order_pack_move');
		$this->load->view('comman/footer');
	}

	// save contact
	public function save_contact(){
		$st_url = site_url('/gmt');
		// echo $st_url;
		if($st_url == 'http://127.0.0.1/getmytruckweb/gmt' || $st_url == 'http://localhost/getmytruck/gmt'){
			$st_url = 'http://127.0.0.1/gmt';
		}else{
			$st_url = $st_url;
		}
		// echo $st_url;
		$logged_in_user = $this->session->userdata('logged_in_user');			
		$arrayParameter = array('user_id'=>$logged_in_user['user_id']);
		$objData = $this->getData($st_url,'Save_contact','view_contact',$arrayParameter);

		$this->load->view('comman/header');
		$this->load->view('save-contact',array('orderObj'=>$objData));
		$this->load->view('comman/footer');
	}

	// Add contact
	public function add_contact(){
		$this->load->view('comman/header');
		$this->load->view('add_contact');
		$this->load->view('comman/footer');
	}

	// Add contact
	public function add_contact_group(){
		$st_url = site_url('/gmt');
		// echo $st_url;
		if($st_url == 'http://127.0.0.1/getmytruckweb/gmt' || $st_url == 'http://localhost/getmytruck/gmt'){
			$st_url = 'http://127.0.0.1/gmt';
		}else{
			$st_url = $st_url;
		}
		// echo $st_url;
		$logged_in_user = $this->session->userdata('logged_in_user');			
		$arrayParameter = array('user_id'=>$logged_in_user['user_id']);
		$objData = $this->getData($st_url,'Save_contact','listGroup',$arrayParameter);
		
		$this->load->view('comman/header');
		$this->load->view('add_contact_group',array('orderObj'=>$objData));
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
		$st_url = site_url('/gmt');
		// echo $st_url;
		if($st_url == 'http://127.0.0.1/getmytruckweb/gmt' || $st_url == 'http://localhost/getmytruck/gmt'){
			$st_url = 'http://127.0.0.1/gmt';
		}else{
			$st_url = $st_url;
		}
		// echo $st_url;
		$logged_in_user = $this->session->userdata('logged_in_user');			
		$arrayParameter = array('user_id'=>$logged_in_user['user_id'], 'user_type_parent_id'=>$logged_in_user['user_type_parent_id'], 'user_type'=>$logged_in_user['user_type']);
		$objData = $this->getData($st_url,'book_history','book_history',$arrayParameter);

		/*echo '<pre>';
		print_r($objData->data);
		exit;*/
	
		$this->load->view('comman/header');
		$this->load->view('order_detls',array('orderObj'=>$objData));
		$this->load->view('comman/footer');
	}
	
	//Add by Bhavesh
	public function rated_orders(){
		$st_url = site_url('/gmt');
		// echo $st_url;
		if($st_url == 'http://127.0.0.1/getmytruckweb/gmt' || $st_url == 'http://localhost/getmytruck/gmt'){
			$st_url = 'http://127.0.0.1/gmt';
		}else{
			$st_url = $st_url;
		}
		// echo $st_url;
		$logged_in_user = $this->session->userdata('logged_in_user');			
		$arrayParameter = array('user_id'=>$logged_in_user['user_id'], 'user_type_parent_id'=>$logged_in_user['user_type_parent_id'], 'user_type'=>$logged_in_user['user_type']);
		$objData = $this->getData($st_url,'book_history','rated_orders',$arrayParameter);

		/*echo '<pre>';
		print_r($objData->data);
		exit;*/
	
		$this->load->view('comman/header');
		$this->load->view('rated_orders',array('orderObj'=>$objData));
		$this->load->view('comman/footer');
	}
	//End by Bhavesh
	
	//Add by Shri
	public function confirm_orders(){
		$st_url = site_url('/gmt');
		// echo $st_url;
		if($st_url == 'http://127.0.0.1/getmytruckweb/gmt' || $st_url == 'http://localhost/getmytruck/gmt'){
			$st_url = 'http://127.0.0.1/gmt';
		}else{
			$st_url = $st_url;
		}
		// echo $st_url;
		$logged_in_user = $this->session->userdata('logged_in_user');			
		$arrayParameter = array('user_id'=>$logged_in_user['user_id'], 'user_type_parent_id'=>$logged_in_user['user_type_parent_id'], 'user_type'=>$logged_in_user['user_type']);
		$objData = $this->getData($st_url,'book_history','confirm_orders',$arrayParameter);

		/*echo '<pre>';
		print_r($objData->data);
		exit;*/
	
		$this->load->view('comman/header');
		$this->load->view('confirm_orders',array('orderObj'=>$objData));
		$this->load->view('comman/footer');
	}
	
	// Save transporter work station
	public function save_working_station(){
		$st_url = site_url('/gmt');
		// echo $st_url;
		if($st_url == 'http://127.0.0.1/getmytruckweb/gmt' || $st_url == 'http://localhost/getmytruck/gmt'){
			$st_url = 'http://127.0.0.1/gmt';
		}else{
			$st_url = $st_url;
		}
		// echo $st_url;
		$logged_in_user = $this->session->userdata('logged_in_user');
		$arrayParameter = array('user_id'=>$logged_in_user['user_id'], 'user_type_parent_id'=>$logged_in_user['user_type_parent_id'], 'user_type'=>$logged_in_user['user_type']);
		$objData = $this->getData($st_url,'view_station','view_station',$arrayParameter);
		
		/*
		echo '<pre>';
		print_r($objData);
		exit;
		*/
		
		$this->load->view('comman/header');
		$this->load->view('selectStation',array('ObjStation'=>$objData));
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

    // this is one for all above search order function
	public function view_search_result(){
		$st_url = site_url('/gmt');
		// echo $st_url;
		if($st_url == 'http://127.0.0.1/getmytruckweb/gmt' || $st_url == 'http://localhost/getmytruck/gmt'){
			$st_url = 'http://127.0.0.1/gmt';
		}else{
			$st_url = $st_url;
		}
		// echo $st_url;
		$logged_in_user = $this->session->userdata('logged_in_user');			
		$arrayParameter = array('user_id'=>$logged_in_user['user_id'], 'user_type_parent_id'=>$logged_in_user['user_type_parent_id'], 'user_type'=>$logged_in_user['user_type']);

		$arrayParameter = array_merge($_POST,$arrayParameter);
		// print_r($arrayParameter);exit();
		$objData = $this->getData($st_url,'search_order','search_order',$arrayParameter);

		$this->load->view('comman/header');
		$this->load->view('order_detls',array('orderObj'=>$objData));
		$this->load->view('comman/footer');
	}
	
	public function getData($wurl, $class,$method,$arrayField){	
		$ch = curl_init();
		// curl_setopt($ch,CURLOPT_URL, 'http://getmytruck.tk/gmt/'.$class.'/'.$method);
		curl_setopt($ch,CURLOPT_URL, $wurl.'/'.$class.'/'.$method);
		curl_setopt($ch,CURLOPT_POST, count($arrayField));
		curl_setopt($ch,CURLOPT_POSTFIELDS, $arrayField);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$result = curl_exec($ch);
		$obj = json_decode($result);		
		curl_close($ch);
		return $obj;
	}
}