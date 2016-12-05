<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	
	public function index()
	{
		$this->load->view('index.html');
			
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
