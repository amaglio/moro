<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Historia extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
	}

	public function index()
	{	
 		$this->load->view('estructura/head.php' );
		$this->load->view('historia.php');
		$this->load->view('estructura/footer.php' );
	}
 
}