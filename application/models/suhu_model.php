<?php

class Suhu_model extends CI_Model{

	function get_suhu_room($kd){

		$this->db->order_by('time','DESC');
    $this->db->where(array('kd_room' => $kd));
		return $this->db->get('room1','10')->result();

	}

	function data($number ,$offset){
      return $query = $this->db->order_by('time', 'DESC')->get('room1',$number,$offset)->result();
  }
}
