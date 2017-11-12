<?php
class Mlaporan extends CI_Model {

    var $tabel = 'room1';

    function __construct() {
        parent::__construct();
    }
    function getAllItem() {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->limit('10');
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom1() {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '1'));
        $this->db->limit('10');
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom2() {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '2'));
        $this->db->limit('10');
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom3() {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '3'));
        $this->db->limit('10');
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom4() {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '4'));
        $this->db->limit('10');
        $query = $this->db->get();
        return $query->result();
    }

    function getRoom5() {
        $this->db->from($this->tabel);
        $this->db->order_by('time','DESC');
        $this->db->where(array('kd_room' => '5'));
        $this->db->limit('10');
        $query = $this->db->get();
        return $query->result();
    }

}
?>
