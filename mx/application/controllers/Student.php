<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

	   public function __construct(){
			 parent::__construct();
			 $this->load->library('pagination');
    	 $this->load->model('Stu_model');
			 $this->load->helper('form');
			 $this->load->library('form_validation');
		 }


	public function index()
	{
		$this->load->view('header.html');
		$this->load->view('index.html');
		$this->load->view('footer.html');
	}




	public function insertStu()
	{


		$this->form_validation->set_rules('stuname', '姓名', 'required');
		$this->form_validation->set_rules('sex', '性别', 'required');
		$this->form_validation->set_rules('birthday', '出生年月', 'required');
		$this->form_validation->set_rules('parentname', '家长姓名', 'required');
		$this->form_validation->set_rules('phone', '联系电话', 'required');
		$this->form_validation->set_rules('addreess', '家庭住址', 'required');
		$this->form_validation->set_rules('rtext', '备注信息', 'required');
		$status = $this->form_validation->run();

		$this->load->view('header.html');  //载入视图
		$this->load->view('insertStu.html');
		$this->load->view('footer.html');

		$stuname = $this->input->post('stuname');//获取表单数据
		$sex =$this->input->post('sex');
		$birthday = $this->input->post('birthday');
		$parentname = $this->input->post('parentname');
		$phone = $this->input->post('phone');
		$addreess = $this->input->post('addreess');
		$rtext =$this->input->post('rtext');


       $studata = array(
      'name' =>$stuname ,
			'sex' =>$sex ,
			'birthday' =>$birthday ,
			'parentname' =>$parentname ,
			'phone' =>$phone ,
			'adreess' =>$addreess ,
			'remarks' =>$rtext
	);

				if ($status)
				{
          $this->Stu_model->ins_stu($studata);
           success('Student/baseMessage','添加成功');
				}


	}

	// public function doinsertstu(){
	// 	$this->load->helper('form');
	// 	$this->load->library('form_validation');
	//
	// 	$this->form_validation->set_rules('stuname', '姓名', 'required');
	// 	// $this->form_validation->set_rules('sex', '性别', 'required');
	// 	// $this->form_validation->set_rules('birthday', '出生年月', 'required');
	// 	// $this->form_validation->set_rules('parentname', '家长姓名', 'required');
	// 	// $this->form_validation->set_rules('phone', '联系电话', 'required');
	// 	// $this->form_validation->set_rules('addreess', '家庭住址', 'required');
	// 	// $this->form_validation->set_rules('rtext', '备注信息', 'required');
	// 	$status = $this->form_validation->run();
  //   echo $status;
	//
	// 	if ($status) {
	//    echo "123";
	//  }else{
	// 	 echo"456";
	//  }
	//
	//
	// }

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
		$this->form_validation->set_rules('phonenum', '姓名', 'required');
		$this->form_validation->set_rules('course', '性别', 'required');
		$this->form_validation->set_rules('birthday', '出生年月', 'required');
		$this->form_validation->set_rules('parentname', '家长姓名', 'required');
		$this->form_validation->set_rules('phone', '联系电话', 'required');
		$this->form_validation->set_rules('addreess', '家庭住址', 'required');
		$this->form_validation->set_rules('rtext', '备注信息', 'required');
		$status = $this->form_validation->run();



		$this->load->view('header.html');
		$this->load->view('stuAddCourse.html');
		$this->load->view('footer.html');



		$stuname = $this->input->post('stuname');//获取表单数据
		$sex =$this->input->post('sex');
		$birthday = $this->input->post('birthday');
		$parentname = $this->input->post('parentname');
		$phone = $this->input->post('phone');
		$addreess = $this->input->post('addreess');
		$rtext =$this->input->post('rtext');



		$studata = array(
	 'name' =>$stuname ,
	 'sex' =>$sex ,
	 'birthday' =>$birthday ,
	 'parentname' =>$parentname ,
	 'phone' =>$phone ,
	 'adreess' =>$addreess ,
	 'remarks' =>$rtext
);

if ($status)
{
	$this->Stu_model->ins_stu($studata);
	 success('Student/baseMessage','添加成功');
}





	}

	public function baseMessage(){
		    //   $data = $this->Stu_model->sturecord();
				// 	echo "<pre>";
				// var_dump($data);
				//   echo "</pre>";
				$this->load->library('pagination');
		    $perPage =8;
	    	$config['base_url'] = site_url('Student/baseMessage');
	      $config['total_rows']= $this->db->count_all_results('student');
	      $config['per_page'] = $perPage;
				$config['uri_segment'] = 3;
	      $config['first_link'] = '第一页';
	      $config['prev_link'] = '上一页';
	      $config['next_link'] = '下一页';
	      $config['last_link'] = '最后一页';
				$this->pagination->initialize($config);
				$data['links'] = $this->pagination->create_links();
				$offset = $this->uri->segment(3);
				$this->db->limit($perPage,$offset);

				$data['stuMessage'] = $this->Stu_model->sturecord();

				$this->load->view('header.html');
				$this->load->view('catstu.html',$data);
				$this->load->view('footer.html');
	}

	public function addCourse(){
		$this->load->view('header.html');
		$this->load->view('addCourse.html');
		$this->load->view('footer.html');

	}

}
