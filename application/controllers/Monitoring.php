<?php

/**
 *
 */
class Monitoring extends CI_Controller
{


    public function __construct()
    {
      parent::__construct();
      $this->load->library('template');
      $this->template->title('tampilan');

      // $this->template->set_partial('suhu', '/partials/suhu');
      $this->template->set_partial('footer', '/partials/footer');

      $this->template->set_layout('tampilan')->build('/partials/suhu');
    }
  public function index()
  {


  }
  function cetak()
  {

    $this->template->title('print');

    $this->template->set_layout('tampilan')->build('/partials/print');
  }
  function post_data()
  {
    
  }

}










 ?>
