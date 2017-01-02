<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stu_model extends CI_Model{

	public function __construct()
    {
        parent::__construct();
    }

    public function ins_stu($data){


     	$this->db->insert('student',$data);

     }    

    }


}