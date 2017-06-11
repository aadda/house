<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function reg()
	{
		$this->load->view('regist');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function regist(){	

		$username = $this->input->get('username');
		$password = $this->input->get('password');
		$name = $this->input->get('name');
		$arr = array(
				'username'=>$username,
				'password'=>$password,
				'name'=>$name
			);
		$row=$this->user_model->do_reg($arr);
		if($row){
			echo "注册成功";
		}else{
			echo "失败";
		};
	}
	public function chack(){
		$username = $this->input->get('username');
		$row=$this->user_model->do_chack($username);
		if($row == "ture"){
			echo "have";
		}else{
			echo "no";
		};
	}
	public function do_login(){
		$username = $this->input->get('username');
		$password = $this->input->get('password');
		$row = $this->user_model->do_log($username,$password);
		if($row == "ture"){
			echo "have";
		}else{
			echo "no";
		};
	}
	public function out(){
		$this->session->unset_userdata("login_user");
		redirect('user');
	}
}
