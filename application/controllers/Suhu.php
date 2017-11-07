<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Suhu extends CI_Controller {

  function get_suhu1($kd){

    $data['data'] = $this->suhu_model->get_suhu_room1($kd);
    
    $this->load->library('template');
    $this->template->title('tampilan');

    $this->template->set_partial('footer', '/partials/footer');
    $this->template->set_layout('tampilan')->build('/partials/suhu_room1');

  }
}
