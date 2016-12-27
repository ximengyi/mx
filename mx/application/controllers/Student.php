<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	
	public function index()
	{ 
		$this->load->view('header.html');
		$this->load->view('index.html');
		$this->load->view('footer.html');
	}
	public function insertStu()
	{
		$this->load->view('header.html');
		$this->load->view('insertStu.html');
		$this->load->view('footer.html');

		
	}
	public function findStu()
	{
		$this->load->view('header.html');
		$this->load->view('findStu.html');
		$this->load->view('footer.html');
	}
	public function newCourse()
	{
		$this->load->view('header.html');
		$this->load->view('newCourse.html');
		$this->load->view('footer.html');
		
	}
	public function stuAddCourse()
	{
		$this->load->view('header.html');
		$this->load->view('stuAddCourse.html');
		$this->load->view('footer.html');
		
	}

	public function baseMessage(){
	    $this->load->view('header.html');
		$this->load->view('catstu.html');
		$this->load->view('footer.html');
	}

	public function addCourse(){
		$this->load->view('header.html');
		$this->load->view('addCourse.html');
		$this->load->view('footer.html');

	}
	
}
