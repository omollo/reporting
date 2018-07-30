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
	
	function user_management()
	{
		try{
			$crud = new grocery_CRUD();

			//$crud->set_theme('datatables');
			$crud->set_table('tbl_login');
			$crud->set_subject('Users');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
		//$crud->add_action('SMS', 'loan/approve', '','sfsd');			

			$output = $crud->render();
$crud->unset_delete();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
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

			$output = $crud->render();
$crud->unset_delete();
			
			$crud->unset_add();
			$crud->unset_edit();
			
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
			$crud->set_table('tbl_threat');
			$crud->set_subject('Threat Matrix');
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
		//$crud->add_action('SMS', 'loan/approve', '','sfsd');			

			$output = $crud->render();
$crud->unset_delete();
			
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
				//$crud->required_fields('date_of_registration');
			//$crud->columns('first_name','last_name','date_of_birth');
			
		//$crud->add_action('SMS', 'loan/approve', '','sfsd');			

			$output = $crud->render();
			
			$this->_example_output($output);
			
		}catch(Exception $e){
			show_error($e->getMessage().' --- '.$e->getTraceAsString());
		}
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
	

}
