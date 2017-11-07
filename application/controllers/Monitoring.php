<?php
class Monitoring extends CI_Controller
{

    public function __construct()
    {
      parent::__construct();

      $this->load->library('template');
      $this->template->title('tampilan');

      $this->template->set_partial('footer', '/partials/footer');
      $this->template->set_layout('tampilan')->build('/partials/suhu');
    }
    public function index()
  {
    $this->load->model('view_suhu');

    $data['1']=$this->view_suhu->suhu('1');
    $data['2']=$this->view_suhu->suhu('2');
    $data['3']=$this->view_suhu->suhu('3');
    $data['4']=$this->view_suhu->suhu('4');
    $data['5']=$this->view_suhu->suhu('5');

    $this->template->set_layout('tampilan')->build('/partials/suhu',array('suhu' =>  $data));
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
    $config['full_tag_open'] = '<p>';
    $config['full_tag_close'] = '</p>';

    $from = $this->uri->segment(3);
    $this->pagination->initialize($config);
    $data = $this->data_suhu->data($config['per_page'],$from);

    $this->template->title('print');
    $this->template->set_layout('tampilan')->build('/partials/print',array('suhu' =>  $data));

  }
   function get_suhu1(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $data['1']=$this->suhu_model->get_suhu_room('1');

    $this->template->set_layout('tampilan')->build('/partials/suhu_room1',array('get_suhu_room' =>  $data));
  }
    function get_suhu2(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $data['2']=$this->suhu_model->get_suhu_room('2');

    $this->template->set_layout('tampilan')->build('/partials/room2',array('get_suhu_room' =>  $data));
  }

  function get_suhu3(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $data['3']=$this->suhu_model->get_suhu_room('3');

    $this->template->set_layout('tampilan')->build('/partials/room3',array('get_suhu_room' =>  $data));
  }

  function get_suhu4(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $data['4']=$this->suhu_model->get_suhu_room('4');

    $this->template->set_layout('tampilan')->build('/partials/room4',array('get_suhu_room' =>  $data));
  }

  function get_suhu5(){
    $this->load->helper(array('url'));
    $this->load->model('suhu_model');
    $this->load->database();

    $data['5']=$this->suhu_model->get_suhu_room('5');

    $this->template->set_layout('tampilan')->build('/partials/room5',array('get_suhu_room' =>  $data));
  }
  function updatedata(){
    $this->load->model('data_suhu');

     $kd_room = $this->input->post('kd_room');
 		$suhu = $this->input->post('suhu');
 		$kelembapan = $this->input->post('kelembapan');

 		$data = array(

 			'kd_room' => $kd_room,
 			'suhu' => $suhu,
 			'kelembapan' => $kelembapan

 			);
 		$this->data_suhu->input_data($data,'room1');
     redirect('monitoring/index');

   }

}
?>
