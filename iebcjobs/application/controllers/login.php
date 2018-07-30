<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		
		$this->load->model('Users');
		//$this->load->model('user_model');
		$this->load->library('session');
		$this->load->library('calendar');
		$this->load->helper('url');
		$this->load->helper('form');

        }
        
		public function index()
                    {
		$this->load->helper('form');
		$this->load->library('session');
		/*$this->load->library('form_validation');
 		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|xss_clean');   
		if ($this->form_validation->run() == TRUE)
		{
		*/
		//echo "here";
			
		$username=$this->input->post('idno');
		$password=$this->input->post('password');
		
		$result=$this->Users->check($username, $password);
			$user =$this->session->userdata('username');
		//$phone =$this->session->userdata('phone');
		$email =$this->session->userdata('email');
		$logged_in =$this->session->userdata('logged_in');
		$priv_id=$this->session->userdata('level_id');
	
	if($result && $logged_in=true && $priv_id==1)
	{
           
            //  $user=$this->session->userdata('userid');
//$data['error'] = '<div id="Fmodal" class="modal"><div class="modal-body" style="background:#EE0000; color:#ffffff">Oops!'. $this->upload->display_errors().'<p>Click on Apply Job Menu, to Try Again.</p></div><div class="modal-footer"><a class="close" data-dismiss="modal">×</a>  <button class="btn" id="cbtn" data-dismiss="modal" aria-hidden="true">Close</button></div></div>';
 // '<div style="background:#EE0000; color:#ffffff" data-strict-close="true" class="alert alert-message modal perror">Oops! '. $this->upload->display_errors()."<p>Click on Apply Job Menu, to Try Again.<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button></p></div>";
 
 $lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
   $this->lang->load('main', $lang);
//echo $lang;
  //$site_lang=
        //$this->load->library('jquery');
$this->load->helper('url');
$data['hide']=$this->lang->line('hide');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');

$data['choose']=$this->lang->line('choose');
$data['web_desc']=$this->lang->line('web_desc');
$data['inno'] =$this->lang->line('inno');
$data['web_desc']=$this->lang->line('web_desc');

$data['close']=$this->lang->line('close');
$data['mydesc']=$this->lang->line('mydesc');
$data['odesc']=$this->lang->line('odesc');
$data['odesc']=$this->lang->line('odesc');
$data['ino_dev']=$this->lang->line('ino_dev');
$data['innov']=$this->lang->line('innov');
$data['smsdesc']=$this->lang->line('smsdesc');

// this is to controll the logging in and logout of the users in the move to h
$data['blog']=$this->lang->line('blog');
$data['fb']=$this->lang->line('fb');
$data['login']=$this->lang->line('login');
//$data['login']=$this->lang->line('login');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['user']=$this->session->userdata('userid');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['mobile']=$this->lang->line('mobile');
$data['desktop']=$this->lang->line('desktop');
$data['page_title'] = 'Welcome to Omollo Website';
$data['jobtitle']=$this->session->userdata('j_title');

$uid=$this->session->userdata('userid');
$data['my_account']=$this->Users->get_account($uid);
//$data['my_personal']=$this->Users->get_account($uid);
$data['my_proff']=$this->Users->get_proff($uid);
$data['vacancy']=$this->Users->get_vacs($uid);
$data['jid']=$this->session->userdata('clicked_jobid');;
$data['select_courses']=$this->Users->get_course_types();

$data['select_skills']=$this->Users->get_skills_types();
$data['select_exp']=$this->Users->get_experience();

$data['select_grades']=$this->Users->get_grades();
$data['select_others']=$this->Users->get_others();
$data['error']='';
$data['edu_data']=$this->session->flashdata('edu_success_update');
$data['app_jobs']=$this->Users->get_applied_jobs($uid); 
                    
                      
	//$this->load->view('header');
//$this->load->view('header_view');

$this->load->view('admin_header');

	$this->load->view('user_profile', $data);
			// this is for the movement so fthe sthe 
	$this->load->view('footer');
            }
else if($result && $logged_in=true && $priv_id==0)
	{
	//$this->show_admin();
	redirect('examples/vacancy_management');
	}
	else if($result && $logged_in=true && $priv_id==2)
	{
	//$this->show_admin();
	redirect('symadm/member_management');
	}
	else
	{
            $jt=$this->session->userdata('job_type');
            
            if($jt=='external')
            {
              
                  redirect('welcome');
            }
            else  if($jt=='internal')
            {
                
                redirect('welcome/vinternal');
                
                
            }
            else{
                 redirect('welcome');     
                
            }
                  
	}
//	}
}


public function logout()
{
$this->load->library('session');

$this->session->unset_userdata('uid');
$this->session->unset_userdata('email');
$this->session->unset_userdata('phone');
$this->session->unset_userdata('level_id');
$this->session->unset_userdata('logged_in');
$this->session->unset_userdata('userid');
$this->session->unset_userdata('clicked_jobid');
$this->session->unset_userdata('j_title');
$this->session->unset_userdata('vac_no');


$this->session->unset_userdata('clicked_jobid');
			$this->session->unset_userdata('firstname');
			$this->session->unset_userdata('middlename');
			$this->session->unset_userdata('surname');
			$this->session->unset_userdata('email');
			$this->session->unset_userdata('cellpersonal');

$this->session->unset_userdata('id');
   
           		
              //  $this->session->sess_destroy();
                
            $jt=$this->session->userdata('job_type');
            
            if($jt=='external')
            {
              redirect('apply');
                  //redirect('welcome');
            }
            else  if($jt=='internal')
            {
                redirect('apply/internaljobs');
               // redirect('welcome/vinternal');
                
                
            }else{
              		 redirect('apply');
		
         }

}
public function thanks()
{
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['reg_details']=$this->lang->line('reg_details');
$data['register']=$this->lang->line('register');
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
$data['home']=$this->lang->line('home');
$data['username']=$this->lang->line('username');
$data['email']=$this->lang->line('email');
$data['password']=$this->lang->line('password');
$data['passconf']=$this->lang->line('passconf');
$data['phone']=$this->lang->line('phone');
$data['submit']=$this->lang->line('submit');
$data['title'] = 'Validation error ';
$data['heading'] = 'Validate';
$this->load->view('header', $data);
//$data['main_content'] = 'pages/sign_up';
$this->load->view('thanks_view', $data);
//$this->load->view('pages/sign_up');
$this->load->view('footer');	
}
public function update_log()
{
//$username=$this->input->post('uname');
//$password=$this->input->post('pwd');
$tellerid=$this->input->post('tellerid');
$cardno=$this->input->post('cardno');
$data['urecords']=$this->Users->check_update($tellerid, $cardno);
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
//echo $lang;
//$site_lang=
//$this->load->library('jquery');
$this->load->helper('url');
$data['hide']=$this->lang->line('hide');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['choose']=$this->lang->line('choose');
$data['web_desc']=$this->lang->line('web_desc');
$data['inno'] =$this->lang->line('inno');
$data['web_desc']=$this->lang->line('web_desc');
$data['close']=$this->lang->line('close');

$data['mydesc']=$this->lang->line('mydesc');
$data['odesc']=$this->lang->line('odesc');
$data['odesc']=$this->lang->line('odesc');

$data['ino_dev']=$this->lang->line('ino_dev');
$data['innov']=$this->lang->line('innov');
$data['smsdesc']=$this->lang->line('smsdesc');

$data['blog']=$this->lang->line('blog');
$data['fb']=$this->lang->line('fb');
$data['login']=$this->lang->line('login');
//$data['login']=$this->lang->line('login');
$data['clients']=$this->lang->line('clients');

$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');

$data['open']=$this->lang->line('open');
$data['mobile']=$this->lang->line('mobile');
$data['desktop']=$this->lang->line('desktop');

$data['cardno']= $this->session->userdata('card_no');
$data['tellerid']= $this->session->userdata('tellerid');
$data['status']= $this->session->userdata('status');



$this->load->view('header', $data);	
 /// or if you want html back//
$this->load->view('view_status', $data);//ajax.php on your view
$this->load->view('footer');
}
public function reg()
{
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
//echo $lang;
//$site_lang=
//$this->load->library('jquery');


$this->load->helper('url');
$data['hide']=$this->lang->line('hide');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['choose']=$this->lang->line('choose');
$data['web_desc']=$this->lang->line('web_desc');
$data['inno'] =$this->lang->line('inno');
$data['web_desc']=$this->lang->line('web_desc');
$data['close']=$this->lang->line('close');

$data['mydesc']=$this->lang->line('mydesc');
$data['odesc']=$this->lang->line('odesc');
$data['odesc']=$this->lang->line('odesc');
$data['ino_dev']=$this->lang->line('ino_dev');
$data['innov']=$this->lang->line('innov');
$data['smsdesc']=$this->lang->line('smsdesc');

$data['blog']=$this->lang->line('blog');
$data['fb']=$this->lang->line('fb');
$data['login']=$this->lang->line('login');

//$data['login']=$this->lang->line('login');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['mobile']=$this->lang->line('mobile');
$data['desktop']=$this->lang->line('desktop');
$data['page_title'] = 'Welcome to Omollo Website';

$data["county"]=$this->Users->get_county();

$data["constituency"]=$this->Users->get_constituency();

$data["ward"]=$this->Users->get_wards();

$this->load->view('header', $data);	
/// or if you want html back//
$this->load->view('sign_up', $data);//ajax.php on your view
$this->load->view('footer');
}


public function reg_internal()
{
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
//echo $lang;
//$site_lang=
//$this->load->library('jquery');
$this->load->helper('url');
$data['hide']=$this->lang->line('hide');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['choose']=$this->lang->line('choose');
$data['web_desc']=$this->lang->line('web_desc');
$data['inno'] =$this->lang->line('inno');
$data['web_desc']=$this->lang->line('web_desc');
$data['close']=$this->lang->line('close');

$data['mydesc']=$this->lang->line('mydesc');
$data['odesc']=$this->lang->line('odesc');
$data['odesc']=$this->lang->line('odesc');
$data['ino_dev']=$this->lang->line('ino_dev');
$data['innov']=$this->lang->line('innov');
$data['smsdesc']=$this->lang->line('smsdesc');

$data['blog']=$this->lang->line('blog');
$data['fb']=$this->lang->line('fb');
$data['login']=$this->lang->line('login');

//$data['login']=$this->lang->line('login');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['mobile']=$this->lang->line('mobile');
$data['desktop']=$this->lang->line('desktop');
$data['page_title'] = 'Welcome to Omollo Website';
$this->load->view('header', $data);

$data["county"]=$this->Users->get_county();

$data["constituency"]=$this->Users->get_constituency();	

$data["ward"]=$this->Users->get_wards();
/// or if you want html back//
$this->load->view('signup_internal', $data);//ajax.php on your view
$this->load->view('footer');
}


public function show_status()
{
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
//echo $lang;
//$site_lang=
//$this->load->library('jquery');
$this->load->helper('url');
$data['hide']=$this->lang->line('hide');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['choose']=$this->lang->line('choose');
$data['web_desc']=$this->lang->line('web_desc');
$data['inno'] =$this->lang->line('inno');
$data['web_desc']=$this->lang->line('web_desc');
$data['close']=$this->lang->line('close');

$data['mydesc']=$this->lang->line('mydesc');
$data['odesc']=$this->lang->line('odesc');
$data['odesc']=$this->lang->line('odesc');

$data['ino_dev']=$this->lang->line('ino_dev');
$data['innov']=$this->lang->line('innov');
$data['smsdesc']=$this->lang->line('smsdesc');
$data['blog']=$this->lang->line('blog');
$data['fb']=$this->lang->line('fb');
$data['login']=$this->lang->line('login');
//$data['login']=$this->lang->line('login');



$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['mobile']=$this->lang->line('mobile');
$data['desktop']=$this->lang->line('desktop');



$data['cardno']= $this->session->userdata('card_no');
$data['tellerid']= $this->session->userdata('tellerid');
$data['status']= $this->session->userdata('status');
$data['term_logoff_error']= $this->session->flashdata('term_logoff_error');
 //$data['page_title'] = 'Welcome to Omollo Website';
$this->load->view('header', $data);	 /// or if you want html back//
$this->load->view('view_status', $data);//ajax.php on your view
$this->load->view('footer');
}
public function terminal_off()
{
$tid=$this->input->post('tid');
$cno=$this->input->post('cardno');
//echo $tid;
$this->Users->logoff_terminal($tid, $cno);
}
public function show_profile()
{
 
		//echo "Hey, you are logged in, Welcome".$user;
		//$data['phone']=$phone;
		$data['email']=$this->session->userdata('email');
		$data['user']=$this->session->userdata('user');
		$data['title'] = 'Soma - Profile ';
		$data['heading'] = 'Profile';
		//$data['main_content'] = 'user_profile';
   $lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
   $this->lang->load('main', $lang);
//echo $lang;
  //$site_lang=
        //$this->load->library('jquery');
$this->load->helper('url');
$data['edu_data']="";
$data['hide']=$this->lang->line('hide');

$data['jt']=$this->session->userdata('job_type');

$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');

$data['choose']=$this->lang->line('choose');
$data['web_desc']=$this->lang->line('web_desc');
$data['inno'] =$this->lang->line('inno');
$data['web_desc']=$this->lang->line('web_desc');

$data['close']=$this->lang->line('close');
$data['mydesc']=$this->lang->line('mydesc');
$data['odesc']=$this->lang->line('odesc');
$data['odesc']=$this->lang->line('odesc');
$data['ino_dev']=$this->lang->line('ino_dev');
$data['innov']=$this->lang->line('innov');
$data['smsdesc']=$this->lang->line('smsdesc');

// this is to controll the logging in and logout of the users in the move to h
$data['blog']=$this->lang->line('blog');
$data['fb']=$this->lang->line('fb');
$data['login']=$this->lang->line('login');
//$data['login']=$this->lang->line('login');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['user']=$this->session->userdata('userid');

$data['jobtitle']=$this->session->userdata('j_title');


$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['mobile']=$this->lang->line('mobile');
$data['desktop']=$this->lang->line('desktop');
$data['page_title'] = 'Welcome to Omollo Website';


// this is to get user detials
$uid=$this->session->userdata('userid');
$data['my_account']=$this->Users->get_account($uid);
$data['educ_back']=$this->Users->get_education($uid);
$data['proff_de']=$this->Users->get_proffd($uid);
$data['employment_e']=$this->Users->get_employmente($uid);

//$data['my_personal']=$this->Users->get_account($uid);
$data['my_proff']=$this->Users->get_proff($uid);
$data['vacancy']=$this->Users->get_vacs($uid);

$data['app_jobs']=$this->Users->get_applied_jobs($uid);


$data['jid']=$this->session->userdata('clicked_jobid');

$data['select_courses']=$this->Users->get_course_types();

$data['select_skills']=$this->Users->get_skills_types();
$data['select_exp']=$this->Users->get_experience();

$data['select_grades']=$this->Users->get_grades();
$data['select_others']=$this->Users->get_others();
$data['error']='';

$data['error']=$this->session->flashdata('edu_success_update');

$this->load->view('header');	

$this->load->view('user_profile', $data);//ajax.php on your view
$this->load->view('footer');
}

// this function is to logg off users who have logged in and want to brich the contract according to ieef
public function logged_off()
{
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
//echo $lang;
//$site_lang=
//$this->load->library('jquery');
$this->load->helper('url');
$data['hide']=$this->lang->line('hide');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['choose']=$this->lang->line('choose');
$data['web_desc']=$this->lang->line('web_desc');
$data['inno'] =$this->lang->line('inno');
$data['web_desc']=$this->lang->line('web_desc');
$data['close']=$this->lang->line('close');
$data['mydesc']=$this->lang->line('mydesc');
$data['odesc']=$this->lang->line('odesc');
$data['odesc']=$this->lang->line('odesc');
$data['ino_dev']=$this->lang->line('ino_dev');
$data['innov']=$this->lang->line('innov');
$data['smsdesc']=$this->lang->line('smsdesc');
$data['blog']=$this->lang->line('blog');
$data['fb']=$this->lang->line('fb');
$data['login']=$this->lang->line('login');
//$data['login']=$this->lang->line('login');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['mobile']=$this->lang->line('mobile');
$data['desktop']=$this->lang->line('desktop');
$data['cardno']= $this->session->userdata('card_no');
$data['tellerid']= $this->session->userdata('tellerid');
$data['status']= $this->session->userdata('status');
$data['term_logoff_error']= $this->session->flashdata('term_logoff_error');
 //$data['page_title'] = 'Welcome to Omollo Website';

$this->load->view('header', $data);	
     /// or if you want html back//
$this->load->view('not_logged', $data);//ajax.php on your view
$this->load->view('footer');
}
public function show_error()
{
$lang= $this->session->userdata('site_lang');//print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
//echo $lang;
//$site_lang=
//$this->load->library('jquery');
$this->load->helper('url');
$data['hide']=$this->lang->line('hide');
$data['home']=$this->lang->line('home');
$data['about']=$this->lang->line('about');
$data['choose']=$this->lang->line('choose');
$data['web_desc']=$this->lang->line('web_desc');
$data['inno'] =$this->lang->line('inno');
$data['web_desc']=$this->lang->line('web_desc');
$data['close']=$this->lang->line('close');
$data['mydesc']=$this->lang->line('mydesc');
$data['odesc']=$this->lang->line('odesc');
$data['odesc']=$this->lang->line('odesc');

$data['ino_dev']=$this->lang->line('ino_dev');
$data['innov']=$this->lang->line('innov');
$data['smsdesc']=$this->lang->line('smsdesc');
// sfsd 
$data['blog']=$this->lang->line('blog');
$data['fb']=$this->lang->line('fb');
$data['login']=$this->lang->line('login');
//$data['login']=$this->lang->line('login');
$data['clients']=$this->lang->line('clients');
$data['personal']=$this->lang->line('personal');
$data['contacts']=$this->lang->line('contacts');
$data['sms']=$this->lang->line('sms');
$data['ussd']=$this->lang->line('ussd');
$data['open']=$this->lang->line('open');
$data['mobile']=$this->lang->line('mobile');
$data['desktop']=$this->lang->line('desktop');
$data['cardno']= $this->session->userdata('card_no');
$data['tellerid']= $this->session->userdata('tellerid');
$data['status']= $this->session->userdata('status');
$data['term_logoff_error']= $this->session->flashdata('term_logoff_error');
 //$data['page_title'] = 'Welcome to Omollo Website';
$this->load->view('header', $data);	
/// or if you want html back//
$this->load->view('log_error', $data);//ajax.php on your view
$this->load->view('footer');
//0716 372 339
}
public function show_admin()
{
$this->load->view('admin_view');

}
public function staff()
{
$data['lerror']=$this->session->flashdata('log_error');
    
$this->load->view('header');
$this->load->view('staff_login', $data);
$this->load->view('footer', $data);
}

public function vforgot()
{
// this is to show the view of Forgotten Passwords in the making
$data['errorem']=$this->session->flashdata('reset_msg');
$this->load->view('header'); // this is for the heders
$this->load->view('view_forgotpwd', $data);
$this->load->view('footer');
}

public function checkemail()
{
$this->Users->checkemail();
//echo $this->input->post('email');
}
// this is it for movements in the making to enhance the incompleteness...
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

$this->load->view('user_header');
$this->load->view('education_view', $data);
$this->load->view('footer');


}
}
?>
