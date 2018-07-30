<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Symadm extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
	$this->load->view('header');
		$this->load->view('superadmin.php',$output);	
		$this->load->view('footer');
	}	
	function offices()
	{
		$output = $this->grocery_crud->render();
		$this->_example_output($output);
	}
	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function member_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('careers_register');
			$crud->set_subject('Users');
			$crud->required_fields('firstname');
			$crud->required_fields('lastname');
			$crud->required_fields('level_id');
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			//$crud->add_action('SEND SMS', '', 'loans/sms_member','sfsd');
		//$crud->add_action('SMS', 'loan/approve', '','sfsd');			

			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	function application_management()
	{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('careers_final');
			//$crud->set_relation('officeCode','offices','city');
			//$crud->display_as('officeCode','Office City');
			$crud->set_subject('Applications');
			
			$crud->unset_delete();
			
			$crud->unset_add();
			$crud->unset_edit();
			
			$crud->columns('vacancy_no','job_id','uid',
			'fname','mname','lname','email','mobile',
			'qualification_code','skills_code','experience_code', 'application_type','cv','applied_date');

			$output = $crud->render();

			$this->_example_output($output);
	}
        
        
       
	function experience_management()
	{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('careers_exp');
			//$crud->set_relation('officeCode','offices','city');
			//$crud->display_as('officeCode','Office City');
			$crud->set_subject('Experience');
			
			//$crud->unset_delete();
			
			//$crud->unset_add();
			
			//$crud->columns('vacancy_no','job_id','uid',
			//'fname','mname','lname','email','mobile',
			//'qualification_code','skills_code','experience_code', 'application_type','cv');

			$output = $crud->render();

			$this->_example_output($output);
	}
        
        
        
	function course_management()
	{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
//$crud->add_action('RESPOND(SMS)', '', 'report/sms_response','sfsd');
			$crud->set_table('careers_course_others');
			//$crud->set_relation('officeCode','offices','city');
			//$crud->display_as('officeCode','Office City');
			$crud->set_subject('Courses');
			//$crud->unset_delete();
			
			//$crud->unset_add();
			
			//$crud->columns('vacancy_no','job_id','uid',
			//'fname','mname','lname','email','mobile',
			//'qualification_code','skills_code','experience_code', 'application_type','cv');

			$output = $crud->render();

			$this->_example_output($output);
	}
        
         
	function cluster_management()
	{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
//$crud->add_action('RESPOND(SMS)', '', 'report/sms_response','sfsd');
			$crud->set_table('careers_cluster');
 $crud->set_relation('edu_code','careers_course_codes','qualification_name');
  
			//$crud->set_relation('officeCode','offices','city');
			$crud->display_as('edu_code','Qualification Name');
			$crud->display_as('jtitle','Job Title');
			
			//$crud->set_subject('Courses');
			$crud->unset_delete();
			
			$crud->unset_add();
			
			$crud->columns('vacancy_no','jtitle','edu_code','weight');

			$output = $crud->render();

			$this->_example_output($output);
	}
        
        
         
	
	
	
	
	function vacancy_management()
	{
		$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
$crud->add_action('Add Courses for Cluster Weight', '', 'addcourse/addc','sfsd');
//$crud->add_action('Give Cluster Weight', '', 'addcourse/weight','sfsd');
			$crud->set_table('careers_jobs');
			//$crud->set_relation('officeCode','offices','city');
			//$crud->display_as('officeCode','Office City');
			$crud->set_subject('Vacancy');
			//$crud->unset_delete();
			
			//$crud->unset_add();
			
			//$crud->columns('vacancy_no','job_id','uid',
			//'fname','mname','lname','email','mobile',
			//'qualification_code','skills_code','experience_code', 'application_type','cv');

			$output = $crud->render();

			$this->_example_output($output);
	}	
	
	
	
	
	
	
}
