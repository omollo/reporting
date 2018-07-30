<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Incident extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');	
	}
	
	function _example_output($output = null)
	{
		$this->load->view('user_header');
		$this->load->view('ro_view.php',$output);	
		$this->load->view('ict_footer');
	}	

	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function incident_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ict');
			$crud->set_subject('ICT Issues');
			
			$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('county','careers_counties','county_name');
			$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->edit_fields('issue_description','issue_status'); 
			$crud->add_fields('issue_type','priority','issue_description','issue_status','old_serial_no','new_serial_no', 'county','reported_by'); 

$crud->required_fields('priority','issue_type','issue_status','issue_description');



$crud->callback_before_insert(array($this,'update_callback'));

 		//$crud->set_relation('level_id','tbl_roles','role_name');		 
		//$crud->required_fields('username','email','phone','password','fname','lname','level_id');
$crud->order_by('reported_date','desc');
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			$crud->unset_add();
			$crud->unset_edit();
			$crud->unset_delete();		

			$output = $crud->render();
			$crud->unset_delete();			
			$this->_example_output($output);

			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function kiems()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ict');
			$crud->set_subject('KIEMS');

			$crud->or_where('issue_type','1');
			$crud->or_where('issue_type','2');
			$crud->or_where('issue_type','12');
			$crud->or_where('issue_type','13');

			$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('county','careers_counties','county_name');
			
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->edit_fields('issue_description','resolution','issue_status'); 
			$crud->add_fields('issue_type','priority','issue_description','issue_status', 'county','reported_by'); 

$crud->required_fields('priority','issue_type','issue_status','issue_description');



$crud->callback_before_insert(array($this,'update_callback'));

 		//$crud->set_relation('level_id','tbl_roles','role_name');		 
		//$crud->required_fields('username','email','phone','password','fname','lname','level_id');
$crud->order_by('reported_date','desc');
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			$crud->unset_add();
			//$crud->unset_edit();
			$crud->unset_delete();		

			$output = $crud->render();
			$crud->unset_delete();			
			$this->_example_output($output);

			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function safaricom()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ict');
			$crud->set_subject('Safaricom');

			$crud->or_where('issue_type','10');
			$crud->or_where('issue_type','5');
			$crud->or_where('issue_type','7');
			//$crud->or_where('issue_type','2');
			

			$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('county','careers_counties','county_name');
			
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->edit_fields('issue_description','resolution','issue_status'); 
			$crud->add_fields('issue_type','priority','issue_description','issue_status', 'county','reported_by'); 

$crud->required_fields('priority','issue_type','issue_status','issue_description');



$crud->callback_before_insert(array($this,'update_callback'));

 		//$crud->set_relation('level_id','tbl_roles','role_name');		 
		//$crud->required_fields('username','email','phone','password','fname','lname','level_id');
$crud->order_by('reported_date','desc');
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			$crud->unset_add();
			//$crud->unset_edit();
			$crud->unset_delete();		

			$output = $crud->render();
			$crud->unset_delete();			
			$this->_example_output($output);

			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function airtel()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ict');
			$crud->set_subject('Airtel');

			$crud->or_where('issue_type','6');
			$crud->or_where('issue_type','5');
			$crud->or_where('issue_type','7');
			//$crud->or_where('issue_type','2');
			

			$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('county','careers_counties','county_name');
			
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->edit_fields('issue_description','resolution','issue_status'); 
			$crud->add_fields('issue_type','priority','issue_description','issue_status', 'county','reported_by'); 

$crud->required_fields('priority','issue_type','issue_status','issue_description');



$crud->callback_before_insert(array($this,'update_callback'));

 		//$crud->set_relation('level_id','tbl_roles','role_name');		 
		//$crud->required_fields('username','email','phone','password','fname','lname','level_id');
$crud->order_by('reported_date','desc');
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			$crud->unset_add();
			//$crud->unset_edit();
			$crud->unset_delete();		

			$output = $crud->render();
			$crud->unset_delete();			
			$this->_example_output($output);

			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function telkom()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ict');
			$crud->set_subject('Telkom Kenya');

			$crud->or_where('issue_type','11');
			$crud->or_where('issue_type','5');
			$crud->or_where('issue_type','7');
			//$crud->or_where('issue_type','2');
			

			$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('county','careers_counties','county_name');
			
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->edit_fields('issue_description','resolution','issue_status'); 
			$crud->add_fields('issue_type','priority','issue_description','issue_status', 'county','reported_by'); 

$crud->required_fields('priority','issue_type','issue_status','issue_description');



$crud->callback_before_insert(array($this,'update_callback'));

 		//$crud->set_relation('level_id','tbl_roles','role_name');		 
		//$crud->required_fields('username','email','phone','password','fname','lname','level_id');
$crud->order_by('reported_date','desc');
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			$crud->unset_add();
			//$crud->unset_edit();
			$crud->unset_delete();		

			$output = $crud->render();
			$crud->unset_delete();			
			$this->_example_output($output);

			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function thuraya()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ict');
			$crud->set_subject('THURAYA');

			$crud->where('issue_type','16');
			//$crud->or_where('issue_type','2');
			

			$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('county','careers_counties','county_name');
			
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->edit_fields('issue_description','resolution','issue_status'); 
			$crud->add_fields('issue_type','priority','issue_description','issue_status', 'county','reported_by'); 

$crud->required_fields('priority','issue_type','issue_status','issue_description');



$crud->callback_before_insert(array($this,'update_callback'));

 		//$crud->set_relation('level_id','tbl_roles','role_name');		 
		//$crud->required_fields('username','email','phone','password','fname','lname','level_id');
$crud->order_by('reported_date','desc');
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			$crud->unset_add();
			//$crud->unset_edit();
			$crud->unset_delete();		

			$output = $crud->render();
			$crud->unset_delete();			
			$this->_example_output($output);

			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}



function getuser()
{
$t=$this->session->userdata('email');

return $t;

}


function update_callback($post_array) 
{
//$CI->load->library('session');


$countyr= $this->session->userdata('county');
$ur=$this->session->userdata('email');

$d=date('Y-d-m');

$post_array['county'] = $countyr;
$post_array['reported_by'] = $ur;
$post_array['reported_date'] = $d;
//$post_array['password'] = $this->encrypt->encode($post_array['password'], $key); 

return $post_array;
} 
}
