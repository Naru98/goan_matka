<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

    function __construct(){
		parent::__construct();
		if(empty($this->session->userdata('admin')))
		{
			redirect(base_url('admin/login'));
		}
		$this->load->model('UserModel');
		$this->load->model('DataModel');
	}

    public function index()
	{
		$data['nav']=1;
		$data['child'] = 'admin/main';
		$this->load->view('admin/layout/index',$data);
	}

	public function data()
	{
		$data = $row = array();
        $matka=['none','KALYAN MORNING','TIME BAZAR','MILAN DAY','MAIN BAZAR DAY','KALYAN','RAJDHANI DAY','RAJDHANI NIGHT'
        ,'MAIN BAZAR','KALYAN NIGHT','GOA DAY','GOA NIGHT','JACKPOT DAY','JACKPOT NIGHT'];
        // Fetch member's records
        $mdata = $this->DataModel->getData($_POST);
        $i = $_POST['start'];
        foreach($mdata as $m){
            $i++;
            $data[] = array(
                $i,
                date('d-M-Y',strtotime($m->date)),
                $matka[$m->type].'( '.$m->type.' )',
				$m->open_patti,
				$m->open_ank,
				$m->close_ank,
				$m->close_patti,
                '<div class="dropdown">
                    <a class="btn btn-sm btn-icon-only text-light" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-ellipsis-v"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                    <a class="dropdown-item" href="'.base_url("admin/matka/edit/".$m->id).'">View</a>
                    <a class="dropdown-item" onclick="deleteModal(\'data\','.$m->id.')">Delete</a>
                    </div>
                </div>'
            );
        }
        
        $output = array(
            "draw" => $_POST['draw'],
            "recordsTotal" => $this->DataModel->countAll(),
            "recordsFiltered" => $this->DataModel->countFiltered($_POST),
            "data" => $data,
        );
        
        // Output to JSON format
        echo json_encode($output);
	}

	public function add()
	{
		$data['games'] = $this->UserModel->getTable('games');
		$data['child'] = 'admin/add_data';
		$this->load->view('admin/layout/index',$data);
	}

	public function view($id)
	{
        $data['matka']=$this->UserModel->getID($id,'data');
        if($data['matka'])
        {
			$data['games'] = $this->UserModel->getTable('games');
            $data['child'] = 'admin/edit_data';
            $this->load->view('admin/layout/index',$data);
        }else
        {
            redirect(base_url('admin/login'));
        }
	}

	public function save()
	{
		if(!empty($_POST['holiday']) && $_POST['holiday'])
		{
			$_POST['open_patti']= NULL;
			$_POST['open_ank']= NULL;
			$_POST['close_patti']= NULL;
			$_POST['close_ank']= NULL;
		}
        if($this->UserModel->insert($_POST,'data'))
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
		if(!empty($_POST['holiday']) && $_POST['holiday'])
		{
			$_POST['open_patti']= NULL;
			$_POST['open_ank']= NULL;
			$_POST['close_patti']= NULL;
			$_POST['close_ank']= NULL;
		}else
		{
			$_POST['holiday'] = 0;
		}
        if($this->UserModel->updateByID($_POST,$id,'data'))
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

	public function delete()
    {
        if(!empty($this->input->post('id')) && !empty($this->input->post('table')))
        {
            if($this->UserModel->delete($this->input->post('id'),$this->input->post('table')))
            {
                $this->session->set_userdata('success', 'Deleted successfully.');
				echo json_encode(
					array(
						'status'=> 1,
						'data'=> [],
						'msg'=> 'Deleted successfully.'
					)
				);
            }else{
                $this->session->set_userdata('error', 'Error occurred please try again later!');
				echo json_encode(
					array(
						'status'=> 0,
						'data'=> [],
						'msg'=> 'Error occurred please try again later!'
					)
                );
            }
        }else{
            $this->session->set_userdata('error', 'Error occurred please try again later!');
			echo json_encode(
                array(
                    'status'=> 0,
                    'data'=> [],
                    'msg'=> 'Fields are missing!'
                )
            );
        }    
    }

}
