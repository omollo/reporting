<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Addcourse extends CI_Controller 
{
public function __construct()
{
parent::__construct();

$this->load->helper('url');
$this->load->library('uri');
$this->load->model('Users');
 // $this->load->library('session');
}

public function index()
{


}
public function addc()
{
//echo 'hey';
$id=$this->uri->segment(3);
$this->Users->gettings($id);
$data['jid']=$id;
$data['educations']= $this->Users->get_alleducation();
$this->load->view('header');
$this->load->view('addcourse_view',$data);
$this->load->view('footer');

}

public function cluster()
{

$this->Users->add_cluster();

}
public function search_vac()
{
$data['vac']=$this->session->userdata('vac_nos');
$this->load->view('header');
$this->load->view('searchvac_view', $data);
$this->load->view('footer');

}
public function getapplist()
{
$data['vac']=$this->session->userdata('vac_nos');
$data['applicants']= $this->Users->get_apps();
$this->load->view('header');
$this->load->view('searchvac_view',$data);
$this->load->view('footer');
}
public function generate()
{
$this->Users->generate_code();


}
public function shortlist_view()
{
$data['vac']=$this->session->userdata('vac_nos');
$this->load->view('header');
$this->load->view('shortlist_search', $data);
$this->load->view('footer');

}
public function shortlist()
{
$data['shortlists']=$this->Users->shortlist();
$this->load->view('header');
$this->load->view('shortlist_search',$data);
$this->load->view('footer');
}
public function emails_view()
{
$data['vac']=$this->session->userdata('vac_nos');
$this->load->view('header');
$this->load->view('email_view', $data);
$this->load->view('footer');

}
public function long_emails_view()
{
$data['vac']=$this->session->userdata('vac_nos');
$this->load->view('header');
$this->load->view('longlist_email_view', $data);
$this->load->view('footer');

}

public function sendemail()
{

$this->Users->shortlist_email();

}
public function longsendemail()
{

$this->Users->longlist_email();

}
public function longlist_view()
{
$data['vac']=$this->session->userdata('vac_nos');
$this->load->view('header');
$this->load->view('longlist_search', $data);
$this->load->view('footer');

}
public function longlist()
{
$data['longlists']=$this->Users->longlist();
$this->load->view('header');
$this->load->view('longlist_search',$data);
$this->load->view('footer');
}
public function lll()
{


$seconds_remaining = time() - strtotime('2013-09-18')  ;
$t=$seconds_remaining / (24 * 60 * 60);

$years_old= $t/365 ;

echo $years_old;
}

}
