<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Examples extends CI_Controller {

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
		$this->load->view('symadm_header');
		$this->load->view('superadmin.php',$output);	
		//$this->load->view('footer');
	}	

	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function user_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_login');
			$crud->set_subject('Users');

		$crud->callback_before_insert(array($this,'encrypt_password_callback'));




 		$crud->set_relation('level_id','tbl_roles','role_name');	
		$crud->set_relation('county','careers_counties','county_name');	 
		$crud->set_relation('constituency','careers_constituency','constituency_name');	 
		$crud->required_fields('username','email','password','fname','lname','level_id','password_status');
		$crud->edit_fields('county','level_id'); 
		$crud->field_type('password', 'password');

 $crud->field_type('password_status','dropdown', array('0' => '0'));
 //$crud->field_type('gender','dropdown', array('Male' => 'Male', 'Female' => 'Female'));
  
 //$crud->callback_after_insert(array($this,'sendemail_after_insert'));

			//$crud->required_fields('password');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');
			
			//$crud->unset_delete();	
			$output = $crud->render();
					
			$this->_example_output($output);

			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	

function encrypt_password_callback($post_array) 
{
$this->load->library('encrypt');
$key = 'jack';
$post_array['password'] = md5($post_array['password']);

//$post_array['password'] = $this->encrypt->encode($post_array['password'], $key); 
return $post_array;

}  
      
 	function distribution_management()
	{
		try{
			$crud = new grocery_CRUD();
			//$crud->set_theme('datatables');

			$crud->set_table('staff_deployment');
			$crud->set_subject('Distribution');
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			

			
			$crud->unset_delete();
			
			$crud->unset_add();
			$crud->unset_edit();
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	

	function threat_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_incident_reporting');
			$crud->set_subject('Incident Reporting');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			$crud->set_relation('county','careers_counties','county_name');	 
$crud->set_relation('constituency','careers_constituency','constituency_name');
$crud->set_relation('ward','careers_wards','ward_name');
$crud->set_relation('polling_station','pollingcent','pollingcentername');
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			

			$output = $crud->render();
			$crud->unset_add();

			$crud->unset_add();
			$crud->unset_edit();
			
			
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
	function preelection_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_preelection');
			$crud->set_subject('Pre-Election Report');
$crud->unset_add();
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
		//$crud->add_action('SMS', 'loan/approve', '','sfsd');			

			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	

function roles_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_roles');
			$crud->set_subject('Roles');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			
$crud->unset_delete();
			$output = $crud->render();

			
			//$crud->unset_edit();
			
			
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
function issuetype_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_issue_type');
			$crud->set_subject('Issue');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			
$crud->unset_delete();
			$output = $crud->render();

			
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function issuetype_secondary_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_issue_type_secondary');
			$crud->set_relation('issue_id','tbl_issue_type','issue_name');
			$crud->set_subject('Secondary Issue Type');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			
			$crud->unset_delete();
			$output = $crud->render();

			
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function priority_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_priority');
			$crud->set_subject('Priority');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			
$crud->unset_delete();
			$output = $crud->render();

			
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function status_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_issue_status');
			$crud->set_subject('Status');
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			
$crud->unset_delete();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function incident_types()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_incident_types');
			$crud->set_subject('Incident Type');
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			
$crud->unset_delete();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function media_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_media_channel');
			$crud->set_subject('Media Channel');

			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		

			$crud->unset_delete();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function media_issue_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_media_issue');
			$crud->set_subject('Media Issue');
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		
			$crud->unset_delete();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}




function ict_management()
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

$crud->set_primary_key('issue_id','tbl_issue_type_secondary');
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');


		$crud->order_by('reported_date','desc');
			$crud->unset_add();
			//$crud->unset_edit();
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');			

			$output = $crud->render();	
			
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function show_graph_view()
{
$this->load->view('symadm_header');
$this->load->view('graph_view');//ajax.php on your view
$this->load->view('footer');

}
function show_graph_voter_view()
{
$this->load->view('symadm_header');
$this->load->view('graph_voter_turnout');//ajax.php on your view
$this->load->view('footer');

}

function show_graph_personel_view()
{
$this->load->view('symadm_header');
$this->load->view('graph_personel_view');//ajax.php on your view
$this->load->view('footer');

}

function opening_time_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('opening_time');
			$crud->set_subject('Opening Time Report');
$crud->set_relation('county','careers_counties','county_name');
$crud->set_relation('constituency','careers_constituency','constituency_name');
	
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function arrival_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('arrival_time');
			$crud->set_subject('Arrival Report');
$crud->set_relation('county','careers_counties','county_name');
$crud->set_relation('constituency','careers_constituency','constituency_name');
	
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function voterturnout_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('voter_turnout');
			$crud->set_subject('Voter Turnout');
			$crud->set_relation('county','careers_counties','county_name');
			$crud->set_relation('constituency','careers_constituency','constituency_name');
	
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function preparedness_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('election_preparedness_5th');
			$crud->set_subject('Preparedness');
			$crud->set_relation('county','careers_counties','county_name');
			$crud->set_relation('constituency','careers_constituency','constituency_name');
	
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function preparedness7th_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('election_preparedness_7th');
			$crud->set_subject('5th Preparedness');
			$crud->set_relation('county','careers_counties','county_name');
			$crud->set_relation('constituency','careers_constituency','constituency_name');
	
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			$output = $crud->render();			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function personell_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_personell_arrival');
			$crud->set_subject('Personell Arrival');
			$crud->set_relation('county','careers_counties','county_name');
			$crud->set_relation('constituency','careers_constituency','constituency_name');
	
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
function mediamoni_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_media_monitoring');
			$crud->set_subject('Media Monitoring');
			$crud->set_relation('county','careers_counties','county_name');
			$crud->set_relation('constituency','careers_constituency','constituency_name');
	
			
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
		
			$crud->unset_delete();
			$crud->unset_add();
			$crud->unset_edit();
			$output = $crud->render();

			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function sendemail_after_insert($post_array,$primary_key)
{
//$msg = "First line of text\nSecond line of text";
// use wordwrap() if lines are longer than 70 characters
// send email
// mail("omollo.ateng@gmail.com","My subject",$msg);  
$jtitle=$this->session->userdata('j_title');
$e=$this->session->userdata('email');
$sname=$this->session->userdata('username');
$this->load->helper('string');
$verification_code=random_string('numeric', 16);
		//$verification_code="jack";
$link = '<p><h3>NECC  Portal</h3><hr></p><p>Dear <b>'.$e.'</b>, </p> <p>You have been successfully created <b>'.$jtitle.
'</b></p> <p>Below are your credentials: </p><br>Email: '. $e.'<p><br><p>Password:  '.$post_array['password'].'</p><b>Best Regards. </b></p>';

$this->email->set_newline("\r\n");
$this->email->from('');
$this->email->to($e);
$this->email->subject('NECC TRACKING, ANALYSIS AND REPORTING SYSTEM');
$this->email->message($link);

if($this->email->send())
{
return true;

//echo "Email has been sent";
  	/*$data['jtitle']=$jtitle;
             
        $this->load->view('admin_header');
	$this->load->view('job_sucess',$data);
	$this->load->view('footer');
*/
}
else
{
    
       echo "Email not sent";
    
show_error($this->email->print_debugger());
}
}

}
