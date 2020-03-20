<?php
require APPPATH.'libraries/REST_Controller.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class Pendaftaran extends REST_Controller {

	public function __construct()
	{
		parent::__construct();
        $this->load->database();
		$this->load->model('api_model');
		$this->load->library('form_validation');
	}

	 public function index_get()
    {
        $this->load->view('v_Pendaftaran');

    }

	public function insert()
	{
		
	}
	
	public function fetch_single()
	{
		
	}

	public function update()
	{
		
	}

	// public function delete()
	// {
		
	// }

}


?>