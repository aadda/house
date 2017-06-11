<?php
defined('BASEPATH') OR exit('No direct script access allowed');

  class Houses_model extends CI_Model
  {
  	public function get_house(){
        return $this->db->get('t_house')->result();
    }
    public function get1_house($house_id){
    	$row = $this->db->get_where('t_house',array('house_id' => $house_id))->row();
    	return $row;
    }
  }