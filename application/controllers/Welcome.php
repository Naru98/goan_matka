<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('UserModel');
	}

	public function index()
	{
		$data['website'] = $this->UserModel->getTable('website');
		$data['result'] = $this->UserModel->getData();
		$this->load->view('main', $data);
	}
}
