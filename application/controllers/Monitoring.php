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

  function cetak($page = null)
  {

      $this->load->helper(array('url'));
      $this->load->model('data_suhu');
      $this->load->database();

    $jumlah_data = $this->data_suhu->jumlah_data();
    $this->load->library('pagination');
    $config['base_url'] = base_url().'index.php/monitoring/cetak';
    $config['total_rows'] = $jumlah_data;
    $config['per_page'] = 10;
    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    $data = $this->data_suhu->data($config['per_page'],$from);

    $this->template->title('print');

    $this->template->set_layout('tampilan')->build('/partials/print',array('suhu' =>  $data));

  }


}



 ?>
