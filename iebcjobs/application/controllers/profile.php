<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Profile extends CI_Controller 
{
public function __construct()
{
parent::__construct();
$this->load->helper('url');
$this->load->library('uri');
$this->load->model('Users');
//$this->load->model('user_model');
//$this->load->library('session'a);
$this->load->library('calendar');
$lang= $this->session->userdata('site_lang'); //print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
$this->load->model('Users');
$this->load->helper('form');
}
public function index()
{
    

}

public function user_account()
{
    
   $this->Users->UpdateUserAccount();
    
}






}