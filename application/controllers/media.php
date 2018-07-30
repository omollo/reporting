<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class media extends CI_Controller {

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
		$this->load->view('media_view.php',$output);	
		$this->load->view('ict_footer');
	}	

	
	function index()
	{
		$this->_example_output((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}	
	
	function media_incidents()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
		$crud->set_table('tbl_media_monitoring');
		$crud->set_subject('Media Incident');

		$crud->callback_before_insert(array($this,'encrypt_password_callback'));
 		$crud->set_relation('constituency','careers_constituency','constituency_name');
		$crud->set_relation('ward','careers_wards','ward_name');
				
		$crud->set_relation('county','careers_counties','county_name');	 

//$crud->callback_column('description', array($this, '_full_text'));

$crud->set_relation('priority','tbl_priority','priority_name');
$crud->set_relation('priority','tbl_priority','priority_name');
$crud->set_relation('channel','tbl_media_channel','media_name');
$crud->set_relation('issue_type','tbl_media_issue','issue_name');
		
		//$crud->set_relation('polling_station','pollingcent','pollingcentername');	
		//$crud->required_fields('username','email','password','fname','lname','level_id');
		//$crud->edit_fields('county','level_id'); 
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
	
function _full_text($value, $row)
{
    return $value = wordwrap($row->description, 10, "<br>", true);
}


}
