<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Website extends CI_Controller {

    function __construct(){
		parent::__construct();
		if(empty($this->session->userdata('admin')))
		{
			redirect(base_url('admin/login'));
		}
        $this->load->model('UserModel');
	}

    public function index()
	{
        $data['result'] = $this->UserModel->getTable('website');
		$data['child'] = 'admin/website';
		$this->load->view('admin/layout/index',$data);
	}

    public function add()
	{
		$data['child'] = 'admin/add_website';
		$this->load->view('admin/layout/index',$data);
	}

    public function view($id)
	{
        $data['website']=$this->UserModel->getID($id,'website');
        if($data['website'])
        {
            $data['child'] = 'admin/edit_website';
            $this->load->view('admin/layout/index',$data);
        }else
        {
            redirect(base_url('admin/login'));
        }
	}

    public function save()
	{
        if($this->UserModel->insert($_POST,'website'))
        {
            echo json_encode(
                array(
                    'status'=> 1,
                    'data'=> [],
                    'msg'=> 'Info added successfully.'
                    )
                );
        }else
        {
            echo json_encode(
			array(
				'status'=> 0,
				'data'=> [],
				'msg'=> 'Error while adding Info.!'
				)
			);
        }
	}

    public function update()
    {
        $id=$_POST['id'];
        unset($_POST['id']);
        if($this->UserModel->updateByID($_POST,$id,'website'))
        {
            echo json_encode(
                array(
                    'status'=> 1,
                    'data'=> [],
                    'msg'=> 'Info updated successfully.'
                    )
                );
        }else
        {
            echo json_encode(
                array(
                    'status'=> 0,
                    'data'=> [],
                    'msg'=> 'Error while saving Info.!'
                )
            );
        }
    }

}