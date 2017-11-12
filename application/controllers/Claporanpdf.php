<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Claporanpdf extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('mlaporan');
        $this->load->library('dompdf_gen');
    }

    public function index()
    {
        $data['title'] = 'Laporan History Monitoring Suhu dan Kelembapan Server'; //judul title
        $data['rsuhu'] = $this->mlaporan->getAllItem(); //query model semua barang
        $this->load->view('print',$data);
    }

    // fungsi cetak pdf
    public function cetakpdf(){
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getAllItem(); //query model semua barang

        $this->load->view('partials/vcetaklaporan', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'landscape'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }

    public function room1(){
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom1(); //query model semua barang

        $this->load->view('partials/cetakroom1', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }

    public function room2(){
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom2(); //query model semua barang

        $this->load->view('partials/cetakroom2', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }

    public function room3(){
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom3(); //query model semua barang

        $this->load->view('partials/cetakroom3', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }

    public function room4(){
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom4(); //query model semua barang

        $this->load->view('partials/cetakroom4', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }

    public function room5(){
        $data['title'] = 'Cetak History'; //judul title
        $data['rsuhu'] = $this->mlaporan->getRoom5(); //query model semua barang

        $this->load->view('partials/cetakroom5', $data);

        $paper_size  = 'A4'; //paper size
        $orientation = 'potrait'; //tipe format kertas
        $html = $this->output->get_output();

        $this->dompdf->set_paper($paper_size, $orientation);
        //Convert to PDF
        $this->dompdf->load_html($html);
        $this->dompdf->render();
        $this->dompdf->stream("laporan.pdf", array('Attachment'=>0));
    }
}
