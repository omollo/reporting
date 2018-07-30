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
	$this->load->view('header');	
		$this->load->view('example.php',$output);	
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

			$crud->set_theme('datatables');
			$crud->set_table('careers_register');
			$crud->set_subject('Users');
			$crud->required_fields('firstname');
			$crud->required_fields('lastname');
			$crud->required_fields('level_id');
			//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			$crud->add_action('SEND SMS', '', 'loans/sms_member','sfsd');
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

			$crud->set_theme('datatables');
			$crud->set_table('careers_final');
			//$crud->set_relation('officeCode','offices','city');
			//$crud->display_as('officeCode','Office City');
			$crud->set_subject('Applications');
			
			$crud->unset_delete();
			
			$crud->unset_add();
			
			$crud->columns('vacancy_no','job_id','uid',
			'fname','mname','lname','email','mobile',
			'qualification_code','skills_code','cv','experience_code', 'application_type');

			$output = $crud->render();

			$this->_example_output($output);
	}
	
	
	
	
	function vacancy_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_table('careers_jobs');
			//$crud->columns('customerName','contactLastName','phone','city','country','salesRepEmployeeNumber','creditLimit');
			//$crud->display_as('salesRepEmployeeNumber','from Employeer') ->display_as('customerName','Name')				 ->display_as('contactLastName','Last Name');
			$crud->set_subject('Vacancies');
			//$crud->set_relation('salesRepEmployeeNumber','employees','lastName');
			//$crud->add_action('More', 'dfg', '','sfsd');
			
			$crud->columns('vacancy_no','job_id','j_title','j_group','j_description',
			'j_qualification','j_status','j_created','j_expiry');
		
				//$crud->unset_add();
			$crud->unset_delete();
			$crud->display_as('vacancy_no','Vacancy Number')
             ->display_as('job_id','Job Id')
			  ->display_as('j_title','Job Titile')
             ->display_as('j_group','Job Group')
			  ->display_as('j_description','Job Description')
			   ->display_as('j_qualification','Job Qualification')
			    ->display_as('j_status','Job Status')
             ->display_as('j_created','Posted')
			   ->display_as('j_expiry','Deadline');
			
			$output = $crud->render();
			$this->_example_output($output);
	}	
	
	function loans_management()
	{
			$crud = new grocery_CRUD();
			//$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			//$crud->display_as('customerNumber','Customer');
			$crud->set_table('tbl_loan_applied');
			$crud->set_subject('Loans');
			$crud->unset_add();
			$crud->unset_delete();
	  	$crud->add_action('Approve','', 'Users/approve');
		//$crud->add_action('Deny', '','loans/deny');
		$crud->add_action('Approve', 'http://localhost/bmsacco/images/success.png', 'loans/approve','demo/action_smiley');
		$crud->add_action('Deny', 'http://localhost/bmsacco/images/deny.png', 'loans/deny','demo/action_smiley');		
 		//$crud->add_action('Photos', '',array($this,'just_a_test'));
		$output = $crud->render();
		$this->_example_output($output);
	}
	function just_a_test($primary_key , $row)
	{
    return site_url('').'?loan_id='.$row->loans_id;
	}
	function guarantors_management()
	{
			$crud = new grocery_CRUD();
			//$crud->set_relation('customerNumber','customers','{contactLastName} {contactFirstName}');
			//$crud->display_as('customerNumber','Customer');
			$crud->set_table('tbl_guarantors');
			$crud->set_subject('Guarantors');
			$crud->unset_add();
			$crud->unset_delete();
			$output = $crud->render();
			$this->_example_output($output);
	}	
function loantypes_management()
	{
			$crud = new grocery_CRUD();
			$crud->set_table('tbl_loan');
			$crud->set_subject('Loan');
			//$crud->unset_columns('productDescription');
			//$crud->callback_column('buyPrice',array($this,'valueToEuro'));
			$output = $crud->render();
			$this->_example_output($output);
	}	
	
	function valueToEuro($value, $row)
	{
		return $value.' &euro;';
	}
	
	function film_management()
	{
		$crud = new grocery_CRUD();
		$crud->set_table('film');
		$crud->set_relation_n_n('actors', 'film_actor', 'actor', 'film_id', 'actor_id', 'fullname','priority');
		$crud->set_relation_n_n('category', 'film_category', 'category', 'film_id', 'category_id', 'name');
		$crud->unset_columns('special_features','description','actors');
		$crud->fields('title', 'description', 'actors' ,  'category' ,'release_year', 'rental_duration', 'rental_rate', 'length', 'replacement_cost', 'rating', 'special_features');
		$output = $crud->render();
		$this->_example_output($output);			
	}
	
	function joining_tbls()
	{
	$crud = new grocery_CRUD();
	$crud->set_theme('datatables');
	$crud->set_table('careers_jobs_applications');	
	
	/*$crud->display_as('1id','Second Code')
             ->display_as('chars','First Characters')
			 ->display_as('codes','First Code Ex.')
			 ->display_as('codess','Second code Ex.');
		*/
		
	$crud->set_relation('id','careers_jobs','{j_title} {vacancy_no}{j_group}');
	
	//$crud->set_relation('job_id','careers_proffession','pcourses');
	//'{postalCode} and {scountry}'
	//$crud->set_relation('1id','tbl2','{codess}');
		//$crud->set_relation('codess','tbl2','{charx}');
    // $crud->set_relation('1id','tbl2','{charx}');
	$crud->columns('id','job_id','vacancy_no','u_id','j_title');
	
	$output = $crud->render();
	$this->_example_output($output);
	}
	
}
