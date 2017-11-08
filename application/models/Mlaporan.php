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

}
?>
