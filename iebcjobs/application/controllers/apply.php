<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Apply extends CI_Controller 
{
public function __construct()
{
parent::__construct();
$this->load->helper('url');
$this->load->library('uri');
$this->load->model('Users');
//$this->load->model('user_model');
//$this->load->library('session'a);
$this->load->library('calendar');
$lang= $this->session->userdata('site_lang'); //print_r($this->input->post('dep_selected'), true);
$this->lang->load('main', $lang);
	//$this->load->model('Users');
$this->load->helper('form');
}

public function index()
{
//$uid=$this->session->userdata('userid');
    
    $data['jerror']=$this->session->flashdata('double_error');
$data['vacancy']=$this->Users->get_vacs();
//$data['appjob']=$this->Users->get_job();
$this->load->view('header', $data);	
/// or if you want html back//
$this->load->view('view_jobs', $data);//ajax.php on your view
$this->load->view('footer',$data);
}

public function internaljobs()
{
//$uid=$this->session->userdata('userid');
$data['vacancy']=$this->Users->get_internalvacs();
//$data['appjob']=$this->Users->get_job();
$this->load->view('header', $data);	
/// or if you want html back//
$this->load->view('view_internaljobs', $data);//ajax.php on your view
$this->load->view('footer',$data);
}
public function apply_job($id)
{
// this is to ensure that registration is done on time...
//echo $id;
    $tjobe = array(
                  'job_type'  => 'external',
                 );
$this->session->set_userdata($tjobe);
$data['appjob']=$this->Users->get_job($id);
$this->load->view('header', $data);	
/// or if you want html back//
$this->load->view('view_appjob', $data);//ajax.php on your view
$this->load->view('footer',$data);
//echo "how are you:  ".$id;
//echo $this->input->post('vac_no');
}

public function apply_internaljob($id)
{
// this is to ensure that registration is done on time...
//echo $id;    
    $tjobi = array(
                  'job_type'  => 'internal',
                 );
$this->session->set_userdata($tjobi);
$data['appjob']=$this->Users->get_job($id);
$this->load->view('header', $data);	
/// or if you want html back//
$this->load->view('view_appjobinternal', $data);//ajax.php on your view
$this->load->view('footer',$data);
//echo "how are you:  ".$id;
//echo $this->input->post('vac_no');
}
public function thisjob_apply()
{
$job = $this->input->post('jobid');
$this->Users->apply_job($job);
// this for the movement
}
public function educational()
{
$this->Users->reg_education();
/*
echo $this->session->userdata('userid');
if(!$this->input->post('study1')=="")
{
echo "<br> ";
echo $this->input->post('study1');
echo "<br> ";
echo $this->input->post('study1periodfrom');
echo "<br> ";
echo $this->input->post('study1periodto');
echo "<br> ";
echo $this->input->post('course_type1');
echo " <br>";
echo $this->input->post('grades1');
echo " <br>";
}
else if(!$this->input->post('study2')=="")
{
echo $this->input->post('study2');
}
else if(!$this->input->post('study3')=="")
{
echo $this->input->post('study3');
}
else if(!$this->input->post('study4')=="")
{
echo $this->input->post('study4');
}
*/
}
public function proffesional()
{
$this->Users->proff_registration();
//this is for the movements in the move;
}
public function skills()
{
$this->Users->reg_skills();
}
public function employers()
{
$this->Users->reg_employers();
}
public function referees()
{
$this->Users->reg_referees();
//echo "This is it...";
}
public function final_apply()
{
$this->Users->apply_job();
}
public function emailt()
{
$email="omollo.ateng@gmail.com";
$this->Users->sendemail($email);
////this should be for the email sending in the move to handle the message passing to ensure it is moving correclty.
}
public function getit($t)
{
 //$action = $_REQUEST["action"];
echo "This is it".$action;
  switch($action){
      case "1":
          getContent();
        break;                     
      default:
        break;
  }

 function getContent(){
   //sleep(1); 
   $step_number = $_REQUEST["step_number"]; 
   $html = '<h2 class="StepTitle">Step '.$step_number.' Content</h2>';
   if($step_number == 1){
      $html .='<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>';
   }elseif($step_number == 2){
      $html .='<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>';
   }elseif($step_number == 3){
      $html .='<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>';
   }else{
      $html .='<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, 
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, 
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. 
            Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>';
   }
   echo $html;
 }



}


public function job_application()
{
//$this->do_upload();

$this->Users->jobapplication();

}


public function do_upload()
	{
		$config['upload_path'] = './uploads/';
		$config['allowed_types'] = '*';
		$config['max_size']	= '*';
		$config['max_width']  = '*';
		$config['max_height']  = '*';
		
	//	$config['file_name'] = $_FILES['userfile']['name'];
		$this->load->library('upload', $config);

	
		if (!$this->upload->do_upload())
		{	
                  //  $user=$this->session->userdata('userid');
 $this->session->set_flashdata('error','<div id="perror" class="modal"><div class="modal-body" style="background:#EE0000; color:#ffffff">Oops!'. $this->upload->display_errors().'<p>Click on Apply Job Menu, to Try Again.</p></div><div class="modal-footer"><a class="close" data-dismiss="modal">×</a>  </div></div>');
 // '<div style="background:#EE0000; color:#ffffff" data-strict-close="true" class="alert alert-message modal perror">Oops! '. $this->upload->display_errors()."<p>Click on Apply Job Menu, to Try Again.<button class='btn' data-dismiss='modal' aria-hidden='true'>Close</button></p></div>";
      

                      
		redirect('welcome/show_job');
			// this is for the movement so fthe sthe 
		}
		else
		{
			$data = array('upload_data' => $this->upload->data());
			//$this->load->view('header');
			$upload_data = $this->upload->data(); 			
			$file_name = $upload_data['file_name'];
			$user = $this->session->userdata('userid');
			rename('uploads/'. $data['upload_data']['file_name'], 'uploads/'.$user.'-'.$data['upload_data']['file_name']); 		
			$cv=$user.'-'.$data['upload_data']['file_name'];			
			$this->Users->jobapplication($cv);
		}
	}
        
        
        public function etry()
        {
            $e ='omolloJO@postbank.co.ke';
            $this->Users->sendemail($e);       
        }
        
        public  function add_education()
        {
         $this->Users->add_meducation();
             //echo $this->input->post('study1');
         }
        
         public  function add_proffesion()
        {
            
            $this->Users->add_mproffesion();
            
            //echo $this->input->post('study1');
        }
        
      public  function add_employment()
        {           
            $this->Users->add_memployment();
            //echo $this->input->post('study1');
         }
           public  function add_membership()
        {           
            $this->Users->add_membership();
            //echo $this->input->post('study1');
         }


        public function uview()   
        {
           // $this->load->view('header');
            $this->load->view('new_uview.php');
            $this->load->view('footer');
        }
        
        public function emailtrial(){
		
		$this->load->helper('string');
		$verification_code=random_string('numeric', 16);
		//$verification_code="jack";
		
		$link = 'Thank you for applying the job';

                //load email library
		$this->load->library('email');
		$this->email->set_newline("\r\n");
		//set email information and content
		$this->email->from('msoftsnet@gmail.com', 'PostBank iRecruitment Portal ');
		$this->email->to('omollo.ateng@gmail.com');
		
		$this->email->subject('Thank you ');
		$this->email->message($link);
		
		if($this->email->send())
		{
                    
                    echo 'Sent successfully';
			//redirect('welcome/');
		}
		
		else
		{
			show_error($this->email->print_debugger());
		}
	}
        
        
        
        
}
