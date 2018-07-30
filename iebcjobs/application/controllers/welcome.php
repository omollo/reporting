<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('Users');
		$this->load->library('session');
		$this->load->library('calendar');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('javascript');
	}
        
        // this is to make it come in the making
	public function index()
	{
//$la = $this->get_langauge();        
       $postjob = array(
                'clicked_jobid'  => $this->input->post('jid'),
		'vac_no'  => $this->input->post('vac_no'),
                'j_title'  => $this->input->post('j_title'),
                 );
            
$this->session->set_userdata($postjob);
$data['jid']=$this->session->userdata('clicked_jobid');
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
$data['lerror']=$this->session->flashdata('log_error');

$this->load->helper('url');

$this->load->view('header', $data);	

//$data['vacancy']=$this->Users->get_vacs();
     /// or if you want html back//
      $this->load->view('first_view', $data);//ajax.php on your view
 	$this->load->view('footer');
	}
        
        
        public function vinternal()
	{
//$la = $this->get_langauge();
$postjob = array(
                  'clicked_jobid'  => $this->input->post('jid'),
		  'vac_no'  => $this->input->post('vac_no'),
		 'j_title'  => $this->input->post('j_title'),
                 );
$this->session->set_userdata($postjob);
$data['jid']=$this->session->userdata('clicked_jobid');
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);

$data['lerror']=$this->session->flashdata('log_error');
$this->load->helper('url');
$this->load->view('header');
//$data['vacancy']=$this->Users->get_vacs();
     /// or if you want html back//
      $this->load->view('first_viewinternal', $data);//ajax.php on your view
 	$this->load->view('footer');
	}

public function about()
{
$lang= $this->session->userdata('site_lang');
//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
$this->load->library('javascript');
//$this->load->library('jquery');
//$this->lang->load('main', 'english');	
		
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');

$data['hide']=$this->lang->line('hide');
$data['close']=$this->lang->line('close');
$data['blog']=$this->lang->line('blog');
$data['clients']=$this->lang->line('clients');
$data['choose']=$this->lang->line('choose');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['desktop']=$this->lang->line('desktop');

				$this->load->view('header',$data);
				
     /// or if you want html back//
      $data['page_title'] = 'About Me';
      $this->load->view('about_view', $data);//ajax.php on your view

 	$this->load->view('footer');


}

public function contacts()
{
//$this->load->library('javascript');
       //$this->load->library('jquery');
$this->lang->load('main', 'english');	
$data['close']=$this->lang->line('close');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['blog']=$this->lang->line('blog');
$data['choose']=$this->lang->line('choose');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['desktop']=$this->lang->line('desktop');

				$this->load->view('header',$data);
     /// or if you want html back//
      $data['page_title'] = 'About Me';
      $this->load->view('contact_view', $data);//ajax.php on your view

 	$this->load->view('footer');


}
public function clients()
{
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
		$this->lang->load('main', $lang);
//$this->load->library('javascript');
       //$this->load->library('jquery');

	//$this->lang->load('main', 'english');	
		$data['close']=$this->lang->line('close');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['blog']=$this->lang->line('blog');
$data['clients']=$this->lang->line('clients');
$data['choose']=$this->lang->line('choose');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['desktop']=$this->lang->line('desktop');

				$this->load->view('header',$data);

     /// or if you want html back//
      $data['page_title'] = 'My clients';
      $this->load->view('clients_view', $data);//ajax.php on your view

 	$this->load->view('footer');


}

public function mydb()
{
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
		$this->lang->load('main', $lang);
//$this->load->library('javascript');
       //$this->load->library('jquery');

	//$this->lang->load('main', 'english');	
		$data['close']=$this->lang->line('close');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['blog']=$this->lang->line('blog');
$data['choose']=$this->lang->line('choose');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['desktop']=$this->lang->line('desktop');

				$this->load->view('header',$data);

     /// or if you want html back//
      $data['page_title'] = 'My Databases, proficiency';
      $this->load->view('database_view', $data);//ajax.php on your view

 	$this->load->view('footer');


}

public function mobile()
{
//$this->load->library('javascript');
       //$this->load->library('jquery');

	//$this->lang->load('main', 'english');	
$lang= $this->session->userdata('site_lang');
//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);	
$data['close']=$this->lang->line('close');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['blog']=$this->lang->line('blog');
$data['choose']=$this->lang->line('choose');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['desktop']=$this->lang->line('desktop');
$this->load->view('header',$data);

     /// or if you want html back//
$data['page_title'] = 'My Mobile proficiency';
$this->load->view('mobile_view', $data);//ajax.php on your view

 	$this->load->view('footer');


}
public function sms()
{
//$this->load->library('javascript');
       //$this->load->library('jquery');

$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
$data['close']=$this->lang->line('close');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['blog']=$this->lang->line('blog');
$data['clients']=$this->lang->line('clients');
$data['choose']=$this->lang->line('choose');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['desktop']=$this->lang->line('desktop');
$this->load->view('header',$data);

     /// or if you want html back//
      $data['page_title'] = 'SMS profeciency';
      $this->load->view('sms_view', $data);//ajax.php on your view

 	$this->load->view('footer');


}
public function web()
{
//$this->load->library('javascript');
       //$this->load->library('jquery');

	//$this->lang->load('main', 'english');	
	$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
		$this->lang->load('main', $lang);	
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');

$data['close']=$this->lang->line('close');

$data['blog']=$this->lang->line('blog');
$data['choose']=$this->lang->line('choose');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['desktop']=$this->lang->line('desktop');

				$this->load->view('header',$data);

     /// or if you want html back//
      $data['page_title'] = 'My Web, Proficiency';
      $this->load->view('web_view', $data);//ajax.php on your view

 	$this->load->view('footer');


}

public function get_language()
{
//$lang = $this->input->post('name');
$lang = print_r($this->input->post('dep_selected'), true);
// $la;

$lang =print_r();

//echo $la;
}


function switchLanguage($language="")
{
    $language=($language!="") ? $language:"english"; 
    $this->session->set_userdata('site_lang',$language);
    redirect('welcome/');
}

public function contact()
{
$result=$this->Users->contact_reg();
if($result)
{
$data['title'] = 'Thank you ';
$data['heading'] = 'Thanks';
$this->load->view('thanks_view', $data);
}

}

public function show_status()
{
echo $this->session->userdata('userid');

echo $this->input->post('fname');
echo "<br>";

echo $this->input->post('userid');


}
public function show_education()
{
$uid=$this->session->userdata('userid');
$data['my_account']=$this->Users->get_account($uid);
$data['educ_back']=$this->Users->get_education($uid);
//$data['proff_de']=$this->Users->get_proffd($uid);
//$data['employment_e']=$this->Users->get_employmente($uid);

//$data['my_personal']=$this->Users->get_account($uid);
//$data['my_proff']=$this->Users->get_proff($uid);
//$data['vacancy']=$this->Users->get_vacs($uid);

//$data['app_jobs']=$this->Users->get_applied_jobs($uid);
//$this->load->view('header_view');

$this->load->view('admin_header');
$this->load->view('education_view', $data);
$this->load->view('footer');


}
public function add_educa()
{

$data['select_courses']=$this->Users->get_course_types();

//$data['select_skills']=$this->Users->get_skills_types();
//$data['select_exp']=$this->Users->get_experience();

$data['select_grades']=$this->Users->get_grades();
//$data['select_others']=$this->Users->get_others();
$this->load->view('header_view');
$this->load->view('add_education', $data);
$this->load->view('footer');


}
public function show_proffessional()
{
$uid=$this->session->userdata('userid');
//$data['my_account']=$this->Users->get_account($uid);
//$data['educ_back']=$this->Users->get_education($uid);
$data['proff_de']=$this->Users->get_proffd($uid);
//$data['employment_e']=$this->Users->get_employmente($uid);

//$data['my_personal']=$this->Users->get_account($uid);
//$data['my_proff']=$this->Users->get_proff($uid);
//$data['vacancy']=$this->Users->get_vacs($uid);

//$data['app_jobs']=$this->Users->get_applied_jobs($uid);

$this->load->view('header_view');
$this->load->view('proffessional_view', $data);
$this->load->view('footer');


}
public function show_employment()
{
$uid=$this->session->userdata('userid');
$data['employ_de']=$this->Users->get_employmente($uid);
$this->load->view('header_view');
$this->load->view('employment_view', $data);
$this->load->view('footer');

}

public function show_membership()
{
$uid=$this->session->userdata('userid');
$data['member']=$this->Users->get_membership($uid);
$this->load->view('header_view');
$this->load->view('membership_view', $data);
$this->load->view('footer');

}

public function add_proffesss()
{

$data['select_others']=$this->Users->get_others();
$this->load->view('header_view');
$this->load->view('add_proffessional', $data);
$this->load->view('footer');

}
public function show_job()
{
$data['title']='apply job';

$uid=$this->session->userdata('userid');

$data['account']=$this->Users->get_account($uid);
$data['proffession']=$this->Users->get_proffd($uid);
$data['education']=$this->Users->get_education($uid);
$data['employment']=$this->Users->get_employmente($uid);
 

//$this->load->view('header_view');
$this->load->view('admin_header');
$this->load->view('apply_job_view', $data);
$this->load->view('footer');


}
public function add_employment()
{

$data['select_exp']=$this->Users->get_experience();
$this->load->view('header_view');
$this->load->view('add_employment', $data);
$this->load->view('footer');

}
public function add_membership()
{

$data['dfd']='';//$this->Users->get_experience();
$this->load->view('header_view');
$this->load->view('add_membership', $data);
$this->load->view('footer');

}

public function getcountybyid()
{

 $HTML="<option value='Hello'>helloe</option>";

//$result=$this->Users->get_countybyname();

 /*if($result->num_rows() > 0){
     foreach($result->result() as $list)
{
       $HTML.="<option value='".$list->constituency_name."'>".$list->constituency_name."</option>";
     }
   }
*/
   echo $HTML;


}
public function testings()
{
echo "hello";

}

public function et()
{
$email="dibbstar@gmail.com";
$r=$this->Users->sendemail($email);
if($r)
{

echo "sent";
}
else
{
echo "error";

}

}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
