<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Signup extends CI_Controller {
public function __construct()
	{
		parent::__construct();
		//$this->load->model('user_model');
		$this->load->library('session');
		$this->load->library('calendar');
		$this->load->helper('form');
$this->load->model('Registration');
$this->load->model('Users');
	}	

	public function index()
	{
	//echo "well don here men!";
    }
   public function sign_validate()
        {    
	$this->load->helper(array('form', 'url'));
	$this->load->library('form_validation');
    // $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
	//$this->form_validation->set_rules('password', 'Password', 'trim|required|matches[cpassword]|md5');
     $this->form_validation->set_rules('phone', 'Phone Number','trim|required|numeric|min_length[10]|max_length[15]|xss_clean');
	//$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'trim|required');
		//$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
    $this->form_validation->set_rules('idno', 'The Id Number / Passport', 'trim|required|numeric|min_length[4]|max_length[12]|xss_clean');
	$this->form_validation->set_rules('phone', 'Phone Number','trim|required|numeric|min_length[10]|max_length[15]|xss_clean');
$this->form_validation->set_rules('title', 'Title','trim|required|xss_clean');
$this->form_validation->set_rules('gender', 'Gender','trim|required|xss_clean');
$this->form_validation->set_rules('nationality', 'Nationality','trim|required|xss_clean');
$this->form_validation->set_rules('surname', 'Surname','trim|required|min_length[3]|alpa_numeric|max_length[10]|xss_clean');
$this->form_validation->set_rules('other_names', 'Other Names','trim|required|min_length[3]|alpa_numeric|max_length[50]|xss_clean');
$this->form_validation->set_rules('county', 'County','trim|required|xss_clean');

//$this->form_validation->set_rules('postalcode', 'Postal Code','trim|required|numeric|min_length[2]|max_length[15]|xss_clean');

//$this->form_validation->set_rules('citizenship', 'Nationality','trim|required|min_length[3]|alpa_numeric|max_length[10]|xss_clean');
$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');

$this->form_validation->set_rules('physical_location', 'Physical Location','trim|required|min_length[3]|alpa_numeric|max_length[50]|xss_clean');

//$this->form_validation->set_rules('phone2', 'Alternate Phone Number','trim|required|numeric|min_length[10]|max_length[15]|xss_clean');
//$this->form_validation->set_rules('kra_pin', 'KRA PIN','trim|required|alpa_numeric|xss_clean');
$this->form_validation->set_rules('marital_status', 'Marital Status','trim|required|alpa_numeric|xss_clean');
$this->form_validation->set_rules('ethnic_group', 'Ethnic Group','trim|required|alpa_numeric|xss_clean');
$this->form_validation->set_rules('max_education', 'Maximum Education','trim|required|alpa_numeric|xss_clean');
$this->form_validation->set_rules('highest_proff', 'Highest Proffessional Skill','trim|required|alpa_numeric|xss_clean');
$this->form_validation->set_rules('j_title', 'Job Title','trim|required|alpa_numeric|xss_clean');
//$this->form_validation->set_rules('current_employment', 'current employment','trim|required|alpa_numeric|xss_clean');

//$this->form_validation->set_rules('current_work_station', 'current work station','trim|required|alpa_numeric|xss_clean');
//$this->form_validation->set_rules('disability_type', 'disability type','trim|required|alpa_numeric|xss_clean');

	if ($this->form_validation->run() == TRUE)
		{	
		
		//echo "registered";
		$this->Registration->reg();
		}
		else
		{
 		
            $jt=$this->session->userdata('job_type');
           
           if($jt=='external')
           {
		$this->sexternal();
           } 
             
          else if($jt=='internal')

             {
             $this->sinternal();
             
             }	else{
             
             $this->sexternal();
             
             }
                
            }
            
	
		

	
        }
public function sexternal()
{
$data['de']=$this->session->flashdata('double_error');
$data["county"]=$this->Users->get_county();
$data["constituency"]=$this->Users->get_constituency();
$data["ward"]=$this->Users->get_wards();
$this->load->view('header');	
$this->load->view('sign_up', $data);//ajax.php on your view
$this->load->view('footer');

}
public function sinternal()
{
$data['de']=$this->session->flashdata('double_error');
$data["county"]=$this->Users->get_county();
$data["constituency"]=$this->Users->get_constituency();
$data["ward"]=$this->Users->get_wards();
$this->load->view('header');	
$this->load->view('signup_internal', $data);//ajax.php on your view
$this->load->view('footer');

}
        
        public function update_verification_status()
        {
$ver  = end($this->uri->segments); //$this->uri->segment(4);
//echo $this->input->get('key');
echo "Ur uri is ".$ver;
 //http://localhost/ateng/index.php/s3ignup/update_verification_status/qrHvbySdlNCE834M
	//http://localhost/ateng/signup/update_verification_status/?key=pDI0qJRsTFl1MqxJ
/*
foreach ($segs as $segment)
{    echo $segment;
    echo '<br />';
}
*/
// this is to make it on the move to handle the ongoing moves to remount
 }


}
