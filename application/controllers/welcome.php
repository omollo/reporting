<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->model('Users');
		$this->load->library('session');
		$this->load->library('calendar');
		$this->load->library("pagination");
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('javascript');

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
        // this is to make it come in the making
	public function index()
	{

$this->session->set_flashdata('update_token', time());
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
	
public function change_password()
{
$this->load->view('header');	

//$data['vacancy']=$this->Users->get_vacs();
     /// or if you want html back//
      $this->load->view('password_change');//ajax.php on your view
 	$this->load->view('footer');


}
	

public function home()
{

$this->load->view('header');
   $this->load->view('dashboard_view');//ajax.php on your view
 	$this->load->view('footer');


} 

public function upload_success()
{

	$this->load->view('admin_header');
   	$this->load->view('upload_success');//ajax.php on your view
 	$this->load->view('footer');


} 
public function distribution()
{
$data["county"]=$this->Users->get_county();
$this->load->view('user_header');
   $this->load->view('distribution_view',$data);//ajax.php on your view
 	$this->load->view('footer');


}

public function threat()
{
$data["county"]=$this->Users->get_county();
$data["incidents"]=$this->Users->get_incident_types();
$this->load->view('user_header');
$this->load->view('threat_view',$data);//ajax.php on your view
$this->load->view('footer');
}

public function incident()
{
$this->load->view('user_header');
$this->load->view('incident_internal_view');//ajax.php on your view
$this->load->view('footer');
}

public function ict()
{
$this->load->view('user_header');
$this->load->view('ict_view');//ajax.php on your view
$this->load->view('footer');
}

public function ballots()
{
$data["county"]=$this->Users->get_county();
$this->load->view('user_header');
$this->load->view('ballotpaper_view',$data);//ajax.php on your view
$this->load->view('footer');
}
public function changepwd()
{
$data['pp']=$this->session->userdata('email');
$this->load->view('nouser_header');
$this->load->view('changepass_view', $data);//ajax.php on your view
$this->load->view('footer');
}

public function graph()
{
$this->load->view('user_header');
$this->load->view('graph_view');//ajax.php on your view
$this->load->view('footer');
}


public function getcountybyid()
{

 $county = $this->input->post('county',TRUE);



 $res=$this->Users->get_countybyname($county);
 $output = null; 

       foreach ($res as $row)
        {
            $output .= "<option value='".$row['constituency_code']."'>".$row['constituency_name']."</option>";
//$output .=$row['constituency_code'];

         }


       //print_r($output);
echo $output;

}



public function getconstituencybyid()
{
 $constituency = $this->input->post('constituency',TRUE);
 $res=$this->Users->get_wardbyname($constituency);
 $output = null; 
       foreach ($res as $row)
        {
             $output .= "<option value='".$row['ward_code']."'>".$row['ward_name']."</option>";

         }


       echo  $output;

}

public function getissuecategory()
{
 $issue = $this->input->post('issue_type',TRUE);
 $res=$this->Users->get_issuetype($issue);
 $output = null; 
       foreach ($res as $row)
        {
             $output .= "<option value='".$row['id']."'>".$row['secondary_desc']."</option>";

         }
       echo  $output;
}


public function getpollingcenterbyid()
{
 $ward = $this->input->post('ward',TRUE);
 $res=$this->Users->get_pollingcenterbyname($ward);
 $output = null; 
       foreach ($res as $row)
        {
             $output .= "<option value='".$row['pollingcentercode']."'>".$row['pollingcentername']."</option>";

         }
       echo  $output;
}

public function distribution_submit()
{
$result=$this->Users->reg_electionpreparedness();

//echo "Hi, this is it";

}

public function distribution_submits()
{

$result=$this->Users->reg_electionpreparedness7th();
}

public function threat_submit()
{
$result=$this->Users->reg_threat();
}

public function preelection_submit()
{
$result=$this->Users->reg_preelection();
}

public function passwd_submit()
{
$result=$this->Users->reg_chapasswd();
}

public function intime_submits()
{
$result=$this->Users->reg_electionpreparedness8tht();
}

public function voter_turnout()
{
$result=$this->Users->reg_electionpreparedness8thturnout();
}

public function polling_arrive()
{
$result=$this->Users->reg_polling_arrive();
}

public function ict_submit()
{
$result=$this->Users->reg_ict();
}

public function incident_submit()
{
$result=$this->Users->reg_incident_internal();
}

public function ballots_submit()
{
$result=$this->Users->reg_ballots();
}

public function polling_arrive_personnel()
{
$result=$this->Users->reg_polling_arrive_personnel();
}


public function sendemail()
{
//$msg = "First line of text\nSecond line of text";
// use wordwrap() if lines are longer than 70 characters
// send email
// mail("omollo.ateng@gmail.com","My subject",$msg);  
$jtitle=$this->session->userdata('j_title');
$sname=$this->session->userdata('username');
$this->load->helper('string');
$verification_code=random_string('numeric', 16);
		//$verification_code="jack";
$link = '<p><h3>NECC  Portal</h3><hr></p><p>Dear <b>'.$sname.'</b>, </p> <p>You have been successfully created <b>'.$jtitle.
'</b></p> <p>Below are your credentials: </p><br><p><b>Best Regards. </b></p>';

$this->email->set_newline("\r\n");
$this->email->from('');
$this->email->to("omollo.ateng@gmail.com");
$this->email->subject('IEBC - iRecruitment  Portal - Thank you');
$this->email->message($link);

if($this->email->send())
{
echo "Email has been sent";
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

public function updatepass()
{
$this->Users->updt();
}

public function gtest()
{

$this->Users->get_const();

}

public function gtestnot()
{

$this->Users->get_constnot();

}

public function gettime()
{

$this->Users->get_per_time();

}
public function getturnout()
{

$this->Users->get_voterturnout();

}


 public function getdata(){
        $data  = $this->Users->getdata();
        print_r(json_encode($data, true));
    }

 public function getvoterturndata(){
        $data  = $this->Users->getvoterturndata();
        print_r(json_encode($data, true));
    }
 public function getvoterturndata1(){
        $data  = $this->Users->getvoterturndata1();
        print_r(json_encode($data, true));
    }
 public function getarrivaltime(){
        $data  = $this->Users->getarrivaltime();
        print_r(json_encode($data, true));
    }

public function fn()
{
$number = mt_rand(10000,9999999999999);

echo $number;

}

public function sendpwd()
{
$this->Users->sendemail();


}

public function fpass()
{
$data['h']="";
$this->load->view('nouser_header', $data);	
/// or if you want html back//
$this->load->view('view_forgotpwd', $data);//ajax.php on your view
$this->load->view('footer',$data);



}

}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
