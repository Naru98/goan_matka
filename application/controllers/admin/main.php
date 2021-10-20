<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct(){
		parent::__construct();
		if(empty($this->session->userdata('admin')))
		{
			redirect(base_url('admin/login'));
		}
	}

    public function index()
	{
		$data['nav']=1;
		$data['child'] = 'admin/main';
		$this->load->view('admin/layout/index',$data);
	}

}