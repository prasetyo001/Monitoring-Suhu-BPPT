<?php 

	require(APPPATH.'libraries/REST_Controller.php');

	/**
	* 
	*/
	class Restapi extends REST_Controller
	{
		
		function suhuRoomA_get()
    	{
    		$this->load->model('suhu_model');
    		$this->load->database();
    		$id = $this->get('id');
    		$data = $this->suhu_model->rest_latestSuhu($id);
        	$result = array($data);
        	$this->response($data);
    	}
     
	}
 ?>