<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index()
	{ 
		$this->load->view('header.html');
		$this->load->view('footer.html');
			
	}
	public function insert()
	{
		$this->load->view('insert.html');
		
	}
	public function login()
	{
		$this->load->view('login.html');
		
	}
	public function design()
	{
		$this->load->view('design.html');
		
	}
	public function system()
	{
		$this->load->view('system.html');
		
	}
}
