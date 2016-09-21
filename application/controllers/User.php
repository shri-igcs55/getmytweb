<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* All user related things
*/
class User extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
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

	// User sign up customer
	public function customer()
	{
		if(empty($_POST)){
           $captcha_data = $this->captcha_setting();
        }
        else{
            // Case comparing values.
            if (strcasecmp($_SESSION['captchaWord'], $_POST['captcha']) == 0) {
                echo "<script type='text/javascript'> alert('Your form successfully submitted'); </script>";
                    $captcha_data =  $this->captcha_setting();
                 } else {
               echo "<script type='text/javascript'> alert('Try Again'); </script>";
                    $captcha_data =  $this->captcha_setting();
            }
        }
		$this->load->view('comman/header');
		$this->load->view('customer-reg', $captcha_data);
		$this->load->view('comman/footer');
	}

	// User sign up Transporter & Logistics
	public function transporter_logistic()
	{
		$this->load->view('comman/header');
		$this->load->view('transporter-reg');
		$this->load->view('comman/footer');
	}

	// User sign up Packers & Movers
	public function packer_mover()
	{
		$this->load->view('comman/header');
		$this->load->view('picker-reg');
		$this->load->view('comman/footer');
	}

	// User sign up Crane Providers
	public function crane_provider()
	{
		$this->load->view('comman/header');
		$this->load->view('crane-provdr_reg');
		$this->load->view('comman/footer');
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
        $_SESSION['captchaWord'] = $data['word'];
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
	    // var_dump($data);exit();
	    $_SESSION['captchaWord'] = $data['word'];
	   	echo $data['image'];
	   	// return $data;
        
    }

}