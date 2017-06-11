<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class User_model extends CI_Model
  {
  	public function do_reg($arr){
    		return $this->db->insert('t_user',$arr);
  	}
    public function do_chack($username){
        $result = $this->db->get_where('t_user',array('username'=>$username))->row();
        if($result){
          return "ture";
        }else{
          return "false";
        }
    }
    public function do_log($username,$password){
        $result = $this->db->get_where('t_user',array('username'=>$username,
          'password'=>$password
          ))->row();
        if($result){
          $this->session->set_userdata("login_user",$result);
          return "ture";
        }else{
          return "false";
        }
    }
  }