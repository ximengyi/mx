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
		$this->load->helper('form');
		$this->load->library('form_validation');
		$this->load->view('header.html');
		$this->load->view('insertStu.html');
		$this->load->view('footer.html');


		$stuname = $this->input->post('stuname');
		$sex =$this->input->post('sex');
		$birthday = $this->input->post('birthday');
		$parentname = $this->input->post('parentname');
		$phone = $this->input->post('phone');
		$addreess = $this->input->post('addreess');
        $rtext =$this->input->post('rtext');
    
    //表单数据
         $studata = array(
         	'name' =>$stuname ,
			'sex' =>$sex ,
			'birthday' =>$birthday ,
			'parentname' =>$parentname ,
			'phone' =>$phone ,
			'addreess' =>$addreess ,
			'remarks' =>$rtext 
	);
       foreach ($studata as $key ) {
       	echo $key;
       }
    
        	//表单验证
  		$this->form_validation->set_rules('stuname', '姓名', 'required');
        $this->form_validation->set_rules('sex', '性别', 'required');
  		$this->form_validation->set_rules('birthday', '出生年月', 'required');
        $this->form_validation->set_rules('parentname', '家长姓名', 'required');
  		$this->form_validation->set_rules('phone', '联系电话', 'required');
        $this->form_validation->set_rules('addreess', '家庭住址', 'required');
  		$this->form_validation->set_rules('rtext', '备注信息', 'required');



		
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
