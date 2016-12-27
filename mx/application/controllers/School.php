<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class School extends CI_Controller {

	
	public function catSchool()
	{
		$this->load->view('index.html');
			
	}
	public function addSchool()
	{
		$this->load->view('login.html');
		
	}
	public function findSchool()
	{
		$this->load->view('design.html');
		
	}
	public function system()
	{
		$this->load->view('system.html');
		
	}
}
