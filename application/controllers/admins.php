<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admins extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('admin_model');
	}
	public function index()
	{
		$this->load->view('admin');
	}
	public function logs()
	{
		$result = $this->admin_model->get_house();
		$this->load->view('admin_h',array(
			'houses' => $result));
	}
	public function do_login(){
		$username = $this->input->get('username');
		$password = $this->input->get('password');
		$row = $this->admin_model->do_log($username,$password);
		if($row == "ture"){
			echo "have";
		}else{
			echo "no";
		};
	}
	public function out(){
		$this->session->unset_userdata("login_admin");
		redirect('admins');
	}
	public function del()
	{
		$house_id = $this->input->post('house_id');
		$result = $this->admin_model->do_del($house_id);
		if($result){
			redirect('admins/logs');
		}
	}
	public function add(){
		$location = $this->input->get('location');
		$user = $this->input->get('user');
		$area = $this->input->get('area');
		$price = $this->input->get('price');
		$img1 = $this->input->get('img1');
		$img2 = $this->input->get('img2');
		$img3 = $this->input->get('img3');
		$year = $this->input->get('year');
		$floor = $this->input->get('floor');
		$serve = $this->input->get('serve');
		$arr = array(
			'location'=>$location,
			'user_id'=>$user,
			'area'=>$area,
			'price'=>$price,
			'img1'=>$img1,
			'img2'=>$img2,
			'img3'=>$img3,
			'floor'=>$floor,
			'year'=>$year,
			'serve_id'=>$serve
		);
		$row=$this->admin_model->do_add($arr);
		if($row){
			echo "成功";
		}else{
			echo "失败";
		};
	}
}
