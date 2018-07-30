<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermnt extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
$this->load->library('session');
		$this->load->helper('url');
		$this->load->library('grocery_CRUD');	
 $this->is_loggedin();
	}
	
public function is_loggedin()
{
 $check_login = $this->session->userdata('logged_in');
$jtype = $this->session->userdata('job_type');

 
if($check_login === FALSE)
{
//redirect ('welcome');


if($jtype = "internal")
{
redirect ("apply/internaljobs/");
}
else if ($jtype ="external")
{

redirect ("apply");
}

}

}
	
	function _example_output($output = null)
	{
	$this->load->view('admin_header');
		$this->load->view('courses.php',$output);	
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
	
	function education_management()
	{
$u=$this->session->userdata('userid');
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->where('uid',$u);
			$crud->set_table('careers_education');

$crud->callback_before_insert(array($this,'update_user_details'));
$crud->field_type('uid','invisible');
			
			$crud->set_subject('Education Background');
			//$crud->unset_add();

$this->db->select('qualification_code, qualification_name');       
			$querytcu = $this->db->get('careers_qualifications');
			$data_cust = array();			   
        if ($querytcu->num_rows() > 0)
        {
          
            foreach ($querytcu->result_array() as $row)
            {
               $data_cust[$row['qualification_code']] = $row['qualification_name']; 
            }
        }	

$crud->field_type('qualification','dropdown',$data_cust);	

  $title = array(
                'title'  => "Education Background",
                 );
            
$this->session->set_userdata($title);
		
 //$crud->set_relation('course','careers_course_codes','qualification_name');
 //$crud->set_relation('grade','careers_grade','grade');
 //$crud->change_field_type('uid', 'readonly');  
 //$crud->change_field_type('grade', 'readonly');  
// $crud->change_field_type('course', 'readonly');   

$crud->required_fields('nameofinstitute','periodfrom','periodto','course','grade');


$crud->columns('nameofinstitute','periodfrom','periodto','course','grade');

			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}


function update_user_details($post_array){

$post_array['uid'] =$this->session->userdata('userid');
return $post_array;

}

function proffessional_management()
	{
$u=$this->session->userdata('userid');
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->where('uid',$u);
			$crud->set_table('careers_proffession');			
			$crud->set_subject('Proffession Qualifications');
			//$crud->unset_add();
		$title = array(
                'title'  => "Proffessional Background",
                 );
            
$this->session->set_userdata($title);

$crud->callback_before_insert(array($this,'update_user_details'));
$crud->field_type('uid','invisible');

//$crud->set_relation('pcourses','careers_course_others','qualification_name');
// $crud->set_relation('grade','careers_grade','grade');

$crud->columns('nameofinstitute','periodfrom','periodto','pqualification','pcourses','course','grade');

$crud->required_fields('nameofinstitute','periodfrom','periodto','pqualification','pcourses','course','grade');


			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
function employer_management()
	{
$u=$this->session->userdata('userid'); 
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->where('uid',$u);
			$crud->set_table('careers_employer_history');			
			$crud->set_subject('Employment History');
			//$crud->unset_add();

$title = array(
                'title'  => "Employment History", 
                 );
            
$this->session->set_userdata($title);
		
$crud->callback_before_insert(array($this,'update_user_details'));
$crud->field_type('uid','invisible');

 		$crud->set_relation('experience_code','careers_exp','exp_desc');
// $crud->set_relation('grade','careers_grade','grade');
 //$crud->change_field_type('uid', 'readonly');  
 //$crud->change_field_type('experience_code', 'readonly');  
$crud->columns('employer_name','date_started','date_ended','industry','post_held','experience_code');

$crud->required_fields('employer_name','date_started','date_ended','industry','post_held','experience_code');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function membership_management()
	{
$u=$this->session->userdata('userid'); 
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->where('uid',$u);
			$crud->set_table('careers_membership');			
			$crud->set_subject('Membership');
			//$crud->unset_add();
		

$title = array(
                'title'  => "My Membership",
                 );
            
$this->session->set_userdata($title);

$crud->callback_before_insert(array($this,'update_user_details'));
$crud->field_type('uid','invisible');
 		//$crud->set_relation('experience_code','careers_exp','exp_desc');
// $crud->set_relation('grade','careers_grade','grade');
 //$crud->change_field_type('uid', 'readonly');  
 //$crud->change_field_type('experience_code', 'readonly'); 
//$crud->columns('employer_name','industry','post_held');

$crud->required_fields('institution_name','year_registered','valid_upto','registration_no');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
function referees_management()
	{
$u=$this->session->userdata('userid');
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->where('uid',$u);
			$crud->set_table('careers_referees');			
			$crud->set_subject('Referee');
			//$crud->unset_add();
		
$title = array(
                'title'  => "My Referee",
                 );
            
$this->session->set_userdata($title);


$crud->callback_before_insert(array($this,'update_user_details'));
$crud->field_type('uid','invisible');
$crud->set_rules('phone','Phone Number','numeric');

 		//$crud->set_relation('experience_code','careers_exp','exp_desc');
// $crud->set_relation('grade','careers_grade','grade');
 //$crud->change_field_type('uid', 'readonly');  
 //$crud->change_field_type('experience_code', 'readonly'); 
//$crud->columns('employer_name','industry','post_held');
$crud->columns('fullnames','address','phone','email','occupation','known_period');

$crud->required_fields('fullnames','address','phone','email','occupation','known_period');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}




function integrity_management()
	{
$u=$this->session->userdata('userid');
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->where('uid',$u);
			$crud->set_table('careers_integrity');			
			$crud->set_subject('Integrity Document');
			//$crud->unset_add();
		
$title = array(
                'title'  => "Integrity Documents",
                 );
            
$this->session->set_userdata($title);


$crud->callback_before_insert(array($this,'update_user_details'));
$crud->field_type('uid','invisible');


$crud->field_type('type','dropdown',
array('KRA' => 'KRA', 'EACC' => 'EACC','HELB' => 'HELB' , 'CID' => 'CID','CRB' => 'CRB','DPP' => 'DPP'));

 		//$crud->set_relation('experience_code','careers_exp','exp_desc');
// $crud->set_relation('grade','careers_grade','grade');
 //$crud->change_field_type('uid', 'readonly');  
 //$crud->change_field_type('experience_code', 'readonly'); 
//$crud->columns('employer_name','industry','post_held');
$crud->columns('type','date_issued','valid_upto');

$crud->required_fields('type','date_issued','valid_upto');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}


	catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}

	}



public function my_profile()
	{

//$this->output->enable_profiler(TRUE);
		$u=$this->session->userdata('userid');
		
				try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->where('userid',$u);
			$crud->set_table('careers_register');			
			$crud->set_subject('Profile');
			//$crud->unset_add();
			$crud->unset_add();
			$crud->unset_delete();


		
$title = array(
                'title'  => "My Profile",
                 );
            
$this->session->set_userdata($title);


//$crud->callback_before_insert(array($this,'update_user_details'));
$crud->field_type('userid','invisible');
//$crud->set_rules('Cellpersonal','Phone Number','numeric');

$title = array(
                'title'  => "My Profile",
                 );

$crud->edit_fields('title','sex','firstname','middlename','surname','addresspersonal','postalcode','city','email','cellpersonal','marital_status','kra_pin','county','constituency','ward','religion');

 $crud->columns('title','sex','firstname','middlename','surname','addresspersonal','postalcode','city','email','cellpersonal','marital_status','kra_pin','county','constituency','ward','religion');
	
$this->db->select('county_code, county_name');   
    
			$querytc = $this->db->get('careers_counties');
			$data_county = array();	
		  
        if ($querytc->num_rows() > 0)
        {
          
            foreach ($querytc->result_array() as $row)
            {
               $data_county[$row['county_code']] = $row['county_name']; 
            }
        }	error_reporting(E_ALL);

// this is the movement to handle the ongoing.... so called in the move.


$crud->field_type('county','dropdown',$data_county);


$this->db->select('constituency_code, constituency_name');       
			$querytcs = $this->db->get('careers_constituency');
			$data_const = array();			  
        if ($querytcs->num_rows() > 0)
        {
          
            foreach ($querytcs->result_array() as $row)
            {
               $data_const[$row['constituency_code']] = $row['constituency_name']; 
            }
        }	

$crud->field_type('constituency','dropdown',$data_const);





$this->db->select('ward_code, ward_name');       
			$querytcsw = $this->db->get('careers_wards');
			$data_constw = array();			  
        if ($querytcsw->num_rows() > 0)
        {
          
            foreach ($querytcsw->result_array() as $row)
            {
               $data_constw[$row['ward_code']] = $row['ward_name']; 
            }
        }	

$crud->field_type('ward','dropdown',$data_constw);

$gendert = array(
                'male'  => "Male",
		'female'  => "Female",
                 );
//error_reporting(E_ALL);


$crud->field_type('sex','dropdown',$gendert);



	//$crud->set_relation('experience_code','careers_exp','exp_desc');
// $crud->set_relation('grade','careers_grade','grade');
 //$crud->change_field_type('uid', 'readonly');  
 //$crud->change_field_type('experience_code', 'readonly'); 
//$crud->columns('employer_name','industry','post_held');
//$crud->columns('fullnames','address','phone','email','occupation','known_period');

//$crud->required_fields('fullnames','address','phone','email','occupation','known_period');
			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
		
		
		
}


}
