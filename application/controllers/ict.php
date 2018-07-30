<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ict extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->model('Users');
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->library('grocery_CRUD');
		$this->is_loggedIn();
	
	}
	
public function is_loggedIn()
    {
        $check_login = $this->session->userdata('logged_in');

        if($check_login === FALSE)
        {
            site_url('welcome');
        }
    }        
      
	function _example_output($output = null)
	{
		$this->load->view('user_header');
		$this->load->view('ictedit_view.php',$output);	
		$this->load->view('ict_footer');
	}	

	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function incident_management()
	{

		try{
$e=$this->session->userdata("email");
			$crud = new grocery_CRUD();
			//$crud->set_theme('datatables');

			$crud->set_table('tbl_ict');
 			$crud->where('logged_by',$e);
			$crud->set_subject('Incident');			
			$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('constituency_code','careers_constituency','constituency_name');
			$crud->set_relation('county','careers_counties','county_name');	
			$crud->edit_fields('issue_description','resolution','issue_status');
//mt_rand(10000,9999999999999);

//echo "hapa";
$crud->order_by('reported_date','desc');
 
//$crud->add_fields('issue_type','priority','issue_description','issue_status','serial_no','logged_by','constituency','county','reported_from'); 
   $crud->field_type('logged_by', 'readonly');
 //$crud->field_type('ticket_number', 'readonly');
/*
$crud->required_fields('priority','issue_type','issue_status','issue_description');



$crud->callback_before_insert(array($this,'update_callback'));

 		//$crud->set_relation('level_id','tbl_roles','role_name');		 
		//$crud->required_fields('username','email','phone','password','fname','lname','level_id');

			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			//$crud->unset_add();
*/
			$crud->unset_delete();		

$crud->unset_add();		

			$output = $crud->render();
			$crud->unset_delete();			
			$this->_example_output($output);

			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}
	
function all_incidents()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ict');

 			//$crud->where('issue_status','3');
$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('constituency_code','careers_constituency','constituency_name');
			$crud->set_relation('county','careers_counties','county_name');	
			$crud->order_by('reported_date','desc');

$crud->edit_fields('issue_description','resolution','issue_status'); 
			//$crud->set_subject('Issue');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			$crud->unset_add();		
			$crud->unset_delete();
			//$crud->unset_edit();
			$output = $crud->render();

			
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
	}

function knowledge()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_ict');

 			$crud->where('issue_status','3');
$crud->set_relation('priority','tbl_priority','priority_name');
			$crud->set_relation('issue_type','tbl_issue_type','issue_name');
$crud->set_relation('issue_type_description','tbl_issue_type_secondary','secondary_desc');
			$crud->set_relation('issue_status','tbl_issue_status','status_name');
			$crud->set_relation('constituency_code','careers_constituency','constituency_name');
			$crud->set_relation('county','careers_counties','county_name');	
			$crud->order_by('reported_date','desc');
			//$crud->set_subject('Issue');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
			//$crud->add_action('SMS', 'loan/approve', '','sfsd');	
			$crud->unset_add();		
			$crud->unset_delete();
			$crud->unset_edit();
			$output = $crud->render();

			
			
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

//$post_array['county'] = $countyr;
$post_array['logged_by'] = $ur;
$post_array['reported_date'] = $d;
//$post_array['password'] = $this->encrypt->encode($post_array['password'], $key); 

return $post_array;
} 
public function ict_report()
{
$data["county"]=$this->Users->get_county();
$data["issues"]=$this->Users->get_issue_types();
$data["statuses"]=$this->Users->get_statuses();
$data["priorities"]=$this->Users->get_priority_types();
$this->load->view('user_header');
$this->load->view('ict_view',$data);//ajax.php on your view
$this->load->view('footer');
}
public function em()

{
$e=$this->session->userdata('email');
echo "lskjdf".$e;

}
}
