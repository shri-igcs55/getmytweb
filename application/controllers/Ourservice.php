<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* All Contact us
*/
class Ourservice extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('comman/header');
		$this->load->view('our-services');
		$this->load->view('comman/footer');
	}
}
?>