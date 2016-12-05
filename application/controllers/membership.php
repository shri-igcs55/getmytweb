<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* All Contact us
*/
class membership extends CI_Controller {

	public function membership()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('comman/header');
		$this->load->view('membership');
		$this->load->view('comman/footer');
	}
}
?>