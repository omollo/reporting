<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library('email');
     
        $this->email->set_mailtype("html");
		$this->load->helper('date');
    }
	
	public function reg()
	{
	//$s=md5('POST');
	//$this->db->set('timestamp_demo', 'DATE_ADD(NOW(), INTERVAL 1 MINUTE)', FALSE);
	
$idno=$this->input->post('idno');
$email= $this->input->post('email');

$this->db->select('*');
$this->db->from('careers_register');
$this->db->where('email', $email);
$this->db->where('userid', $idno);
  
   $query_regdouble=$this->db->get();
   
   if($query_regdouble->num_rows() >= 1)
	{
$this->session->set_flashdata('double_error','<h3><p style="background:#EE0000; color:#ffffff;"id="doubleerrs"class="alert alert-message modal"> You have already already Registered with us, Login or if you forgot your password, Click on Forgot password link</p></h3>');
       
$jt=$this->session->userdata('job_type');


      if($jt=='external')
           		 {
             
               redirect('login/reg');
		
           		 }
           		 else  if($jt=='internal')
           		 {
                
                
              		 redirect('login/reg_internal');
		
            }
          }else {

	$this->db->set('register_date', 'NOW()', FALSE);
	$data =array(
			'userid'=>$this->input->post('idno'),
			'password'=>$this->input->post('password'),
			'title' => $this->input->post('title'),
			'sex' => $this->input->post('sex'),
			'surname' => $this->input->post('surname'),
			'firstname' => $this->input->post('firstname'),
			'middlename' => $this->input->post('middlename'),
			'addresspersonal' => $this->input->post('addresspersonal'),
			'postalcode' => $this->input->post('postalcode'),
			'city' => $this->input->post('city'),
			'email' => $this->input->post('email'),
			'citizenship' => $this->input->post('citizenship'),
			'physical_location' => $this->input->post('physical_location'),
			'cellpersonal' => $this->input->post('phone'),
'alternate_cellpersonal' => $this->input->post('phone2'),
'marital_status' => $this->input->post('marital_status'),
'county' => $this->input->post('county'),
'kra_pin' => $this->input->post('kra_pin'),
'constituency' => $this->input->post('constituency'),
'ward' => $this->input->post('ward'),
'ethnic_group' => $this->input->post('ethnic_group'),
'religion' => $this->input->post('religion'),
'current_terms_of_service' => $this->input->post('current_terms_of_service'),
'current_position' => $this->input->post('current_position'),
'current_employment' => $this->input->post('current_employment'),
'current_workstation' => $this->input->post('current_work_station'),

'disability' => $this->input->post('disability'),
'disability_type' => $this->input->post('disability_type'),
'current_workstation' => $this->input->post('current_work_station'),
			//'dob' => $this->input->post('dob'),

			'level_id' => '1',			
	);
	$result=$this->db->insert('careers_register',$data);	
if($result)
	{

$data['title']='postbank';
			$this->load->view('header', $data);
	//$data['main_content'] = 'pages/sign_up';
	               $this->load->view('thanks_view', $data);
			//$this->load->view('pages/sign_up');
 		       $this->load->view('footer');
		//$this->sendsms($this->input->post('phone'),$this->input->post('username') );
		//$this->sendemail($this->input->post('email'));
		

	}
}
	

	}
	public function sendsms($phone, $user)
	{
		$in_phoneNumber = $phone;
		$in_msg="Soma Services -".$user ." Thank you for registering with us!";
			$url = 'cgi-bin/sendsms?username=omollo&password=jack'. '&charset=UCS-2&coding=2'
			. "&to={$in_phoneNumber}"
			. '&text=' . urlencode(iconv('utf-8', 'ucs-2', $in_msg));
		
			$han=fopen("http://localhost:13031/$url","r");
			fclose($han);
		
	}
	public function sendemail($email)
	{
		
		$this->load->helper('string');
		$verification_code=random_string('numeric', 16);
		//$verification_code="jack";		
		$link = '<body bgcolor="#F1F1F1"><p>Thank you for registering with us! </p><body>';
		//load email library
		//$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		//set email information and content
		$this->email->from('jobs@iebc.or.ke', 'IEBC - Registration ');
		$this->email->to($email);		
		$this->email->subject('IEBC - iRecruitment Registration ');
		$this->email->message($link);
		
		if($this->email->send())
		{
		$data['title']='postbank';
			$this->load->view('header', $data);
	//$data['main_content'] = 'pages/sign_up';
	               $this->load->view('thanks_view', $data);
			//$this->load->view('pages/sign_up');
 		       $this->load->view('footer');
		}		
		else
		{
			show_error($this->email->print_debugger());
		}
	}
	

}


?>
