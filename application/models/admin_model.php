<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Admin_model extends CI_Model
  {
    public function do_log($username,$password){
        $result = $this->db->get_where('t_admin',array('adminname'=>$username,
          'password'=>$password
          ))->row();
        if($result){
          $this->session->set_userdata("login_admin",$result);
          return "ture";
        }else{
          return "false";
        }
    }
    public function get_house(){
        return $this->db->get('t_house')->result();
    }
    public function do_del($house_id){
        $this->db->where("house_id",$house_id);
        return $this->db->delete("t_house");
    }
    public function do_add($arr){
      return $this->db->insert('t_house',$arr);
    }
  }