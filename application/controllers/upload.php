<?php

class Upload extends CI_Controller 
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library('session');
		$this->load->helper('inflector');
		$this->load->model('Users');
	}

	function index()
	{
	$this->load->view('header');
	$this->load->view('upload_form', array('error' => ' ' ));
	$this->load->view('footer');
	}

	function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = 'doc|pdf|docx';
		$config['max_size']	= '300';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
		//$config['file_name'] = 'myfile';
		
		$config['file_name'] = $_FILES['userfile']['name'];
		//$file_name = 'sdfsd';//underscore($_FILES['file_var_name']['name']);

		//$newFileName = $_FILES['name'];
		//$fileExt = array_pop(explode(".", $newFileName));
		//$filename = md5(time()).".".$fileExt;

//set filename in config for upload
	//	$config['file_name'] = $filename;
	
		$this->load->library('upload', $config);

	// this is for the Uploads
		if (!$this->upload->do_upload())
		{		
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('header');
			$this->load->view('upload_form', $error);
			// this is for the movement so fthe sthe 
			$this->load->view('footer');
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//$this->load->view('header');
			$upload_data = $this->upload->data(); 
			
			$file_name = $upload_data['file_name'];
			$user = $this->session->userdata('userid');
			rename('uploads/'. $data['upload_data']['file_name'], 'uploads/'.$user.'-'.$data['upload_data']['file_name']); 		
			$cv=$user.'-'.$data['upload_data']['file_name'];
			$this->Users->apply_job($cv);
			
			/*
			$data['filename']=$upload_data['file_name'];
			$data['jtitle']=$this->session->userdata('j_title');
			$data['fname']= $this->session->userdata('userid').$file_name;
			$data['jobid']=$this->session->userdata('clicked_jobid');
			$this->load->view('upload_success', $data);
			$this->load->view('footer');
		  //$this->load->view('');
			*/
		}
	}
	public function reg_users()
	{
	// this is headed
	}
}
?>