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

	public function chart($name)
	{
		$game= strtoupper(str_replace("_"," ",$name));
		$data['matka'] = $this->UserModel->getByField('name',$game,'games');
		if($data['matka'])
		{
			$data['data'] = $this->UserModel->getMatka($data['matka'][0]['id']);
			$this->load->view('chart', $data);
		}else
		{
			redirect(base_url('/'));
		}
	}
}
