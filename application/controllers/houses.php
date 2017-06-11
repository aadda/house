<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Houses extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('houses_model');
	}
	public function house()
	{
		$result=$this->houses_model->get_house();
		$this->load->view('house',array(
			'houses' => $result));
	}
	public function sell()
	{
		$this->load->view('sell');
	}
	// public function get(){
	// 	$result=$this->houses_model->get_house();
	// 	echo json_encode($house = array('house' => $result));
	// }
	public function index_house(){
		$house_id = $this->input->get("house_id");
		$row = $this->houses_model->get1_house($house_id);
		$this->load->view('ggg',array('houses' => $row));
	}
}