<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* All user related things
*/
class User extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$logged_in_user = $this->session->userdata('logged_in_user');
		$this->notification = $this->getData('quotation','notification',array('user_id'=>$logged_in_user['user_id']));
		$this->load->helper('captcha');
	}

	// User sign in
	public function signin()
	{
		$this->load->view('comman/header');
		$this->load->view('sign-in');
		$this->load->view('comman/footer');
	}

	// User sign up
	public function signup()
	{
		$this->load->view('comman/header');
		$this->load->view('sign-up');
		$this->load->view('comman/footer');
	}

	public function edit()
	{
		if(isset($this->session->userdata['logged_in_user'])){

			$logged_in_user = $this->session->userdata('logged_in_user');
			
			$this->load->view('comman/header');
			// || $logged_in_user['user_type'] == 2
			// print_r($logged_in_user);
			if($logged_in_user['user_type'] == 3){
				$this->load->view('update_profle');	// for indiviual customer
			}else if($logged_in_user['user_type'] == 4){
				$this->load->view('cust_comp_update_profile');	// for company customer
			}else if($logged_in_user['user_type'] == 5 || $logged_in_user['user_type'] == 6
				  || $logged_in_user['user_type'] == 8 || $logged_in_user['user_type'] == 9
				  || $logged_in_user['user_type'] == 10 || $logged_in_user['user_type'] == 11
				  || $logged_in_user['user_type'] == 12){
				$this->load->view('transporter_update_profile');
			}/*else if($logged_in_user['user_type'] == 5){
				$this->load->view('');
			}else if($logged_in_user['user_type'] == 8){
				$this->load->view('');
			}else if($logged_in_user['user_type'] == 9){
				$this->load->view('');
			}else if($logged_in_user['user_type'] == 10){
				$this->load->view('');
			}*/

			$this->load->view('comman/footer');

       	}else{
       		redirect(site_url('user/signin'));
       	}
	}


	public function edit_doc()
	{
		if(isset($this->session->userdata['logged_in_user'])){
			$this->load->view('comman/header');
			$this->load->view('update_cust_doc');
			$this->load->view('comman/footer');
       	}else{
       		redirect(site_url('user/signin'));
       	}
	}

	// User sign up customer
	public function customer()
	{
		$captcha_data =  $this->captcha_setting();

       	$this->load->view('comman/header');
		$this->load->view('customer-reg', $captcha_data);
		$this->load->view('comman/footer');
	}

	// User sign up Transporter & Logistics
	public function transporter_logistic()
	{
		$captcha_data =  $this->captcha_setting();
       	
		$this->load->view('comman/header');
		$this->load->view('transporter-reg', $captcha_data);
		$this->load->view('comman/footer');
	}

	// User sign up Packers & Movers
	public function packer_mover()
	{
		$captcha_data =  $this->captcha_setting();
       	
		$this->load->view('comman/header');
		$this->load->view('picker-reg', $captcha_data);
		$this->load->view('comman/footer');
	}

	// User sign up Crane Providers
	public function crane_provider()
	{
		$captcha_data =  $this->captcha_setting();
       	
		$this->load->view('comman/header');
		$this->load->view('crane-provdr_reg', $captcha_data);
		$this->load->view('comman/footer');
	}


	// after login Chanee password
	public function changePassword(){

		if (isset($this->session->userdata['logged_in_user'])) {

       		$this->load->view('comman/header');
			$this->load->view('change_password');
			$this->load->view('comman/footer');

       	}else{
       		redirect(site_url('user/signin'));
       	}
	}

	// after login dashboard
	public function signout(){
		$this->session->unset_userdata('logged_in_user');
		redirect(site_url('/'));
	}

















	// This function genrate CAPTCHA image and store in "image folder".
    public function captcha_setting()
    {
        $values = array(
	    	'word' => '',
	        'word_length' => 4,
	        'img_path' => './assets/images/captcha/',
	        'img_url' =>  base_url() .'assets/images/captcha',
	        'font_path'  => base_url() . 'system/fonts/texb.ttf',
	        'img_width' => '150',
	        'img_height' => '44',
	        'expiration' => 3600
	    );
    	$data = create_captcha($values);
        $data['word'];
        return $data;  
        // image will store in "$data['image']" index and its send on view page 
    	// $this->load->view('customer-reg', $data);
    }    
    
    // For new image on click refresh button.
    public function captcha_refresh(){
        $values = array(
        	'word' => '',
        	'word_length' => 4,
        	'img_path' => './assets/images/captcha/',
	        'img_url' =>  base_url() .'assets/images/captcha/',
	        'font_path'  => base_url() . 'system/fonts/texb.ttf',
	        'img_width' => '150',
	        'img_height' => '44',
	        'expiration' => 3600
        );
	    $data = create_captcha($values);
	    
	   	echo json_encode($data);
        exit;
    }
	
	
	public function getData($class,$method,$arrayField){	
		$ch = curl_init();		
		$wurl = $st_url = site_url('/gmt');		
		if($st_url == 'http://127.0.0.1/getmytruckweb/gmt' || $st_url == 'http://127.0.0.1/getmytruck/gmt'){
			$wurl = $st_url = 'http://127.0.0.1/gmt';
		}
		
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