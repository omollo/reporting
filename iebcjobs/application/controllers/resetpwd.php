<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Resetpwd extends CI_Controller {

public function __construct()
{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Users');
		//sfsdfsd $this->load->model('user_model');
		$this->load->library('session');
		$this->load->library('calendar');
		$this->load->helper('form');
                
                
                // this is to improve on it, to make it completely new in the system
}

public function index()
{

}

public function pwdreset()
{
$data['reset_msg']=$this->session->flashdata('reset_msg');
//$data['email']=$this->session->flashdata('email');
$this->load->view('header',$data);
$this->load->view('view_resetpwd',$data);
$this->load->view('footer',$data);
}

public function resetingpwd()
{
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
    $this->form_validation->set_rules('oldpwd', 'Old Password', 'trim|required|min_length[5]|max_length[10]|xss_clean');
	$this->form_validation->set_rules('newpwd', 'New Password', 'trim|required|matches[cnewpwd]|md5');
    // $this->form_validation->set_rules('phone', 'Phone Number','trim|required|numeric|min_length[10]|max_length[15]|xss_clean');
	$this->form_validation->set_rules('cnewpwd', ' Confirmation New Password ', 'trim|required');
	//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    // $this->form_validation->set_rules('idno', 'ID Number', 'trim|required|min_length[5]|max_length[12]|xss_clean');
	//$this->form_validation->set_rules('phone', 'Phone Number','trim|required|numeric|min_length[10]|max_length[15]|xss_clean');
	//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == TRUE)
		{	
		//$this->load->model('Registration');
		//echo "registered";
		$this->Users->pwdreseting();
		}
		else 
		{
		// this in the making to begin...
		// this is in the move to handle the same as in the office
		$this->pwdreset();	
		}
}
}