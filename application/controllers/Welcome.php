<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
* All Home related things
*/
class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$this->load->view('comman/header');
		$this->load->view('index');
		$this->load->view('comman/footer');
	}
}
