<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Data_post extends CI_Model {

  public function __construct()
  {
    parent::__construct();
    $this->load->library('databade');
  }

}
/* End of file ${TM_FILENAME:${1/(.+)/l.php/}} */
/* Location: ./${TM_FILEPATH/.+((?:application).+)//:application/models/${1/(.+)/l.php/}} */
