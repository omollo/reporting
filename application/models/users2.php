<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model {

    function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('email');
		$this->email->set_mailtype("html");
	 
   		$this->load->helper('date');
		
    }
public function check($username, $password)
	{
   $this->db->select('no,userid,surname,email,surname,cellpersonal,cellpersonal,firstname,middlename,level_id');
   $this->db->from('careers_register');
   $this->db->where('userid', $username);
   $this->db->where('password',md5($password));
   $this->db->limit(1);
   $query=$this->db->get();
 if($query->num_rows()> 0)
   {   	
   	foreach($query->result() as $rows)
   	{
	//add all data to session
   		$newdata = array(
   				'userid' => $rows->userid,
				'username' => $rows->surname,
				'email' => $rows->email,
				'firstname' => $rows->firstname,
				'middlename' => $rows->middlename,
				'cellpersonal' => $rows->cellpersonal,
				//'dob' =>$rows->dob,				
   				//'password' 	=> $rows->password,
   				//'email'    => $rows->email,
   				//'phone'=> $rows->phone,
   				'level_id'=>$rows->level_id,
   				'logged_in'=> TRUE,
				);

   	}
   	$this->session->set_userdata($newdata);
	//echo "Logged in";
     return true;
//$query->result();
   }
   else
   {
      // $this->session->set_flashdata();
   
    $this->session->set_flashdata('log_error', '<p id="lerr"  style="background:#EE0000; color:#ffffff;"class="alert alert-message modal">Oops!  Incorrect Username or Password, Please try again</p>');
	//echo "Not Logged in!";
    return false;
    
   }

 }
public function contact_reg()
{
$data =array(
			
			'name'=>$this->input->post('name'),
			'email'=>$this->input->post('email'),
			'message' => $this->input->post('msg'),
			);
	$res= $this->db->insert('tbl_contacts',$data);

if($res)
{
 redirect('welcome');
}
}
public function check_update($tellerid, $cardno)
{
$sql0="select * from eftc_teller where current_terminal_id='$tellerid'";
$sq1="SELECT * FROM eftc_teller where current_terminal_id='$tellerid' ";
$sq2="SELECT * FROM eftc_teller where current_terminal_id='$tellerid'";
 //$this->db->select('tellerid,card_no,status');
   //$this->db->from('eftc_teller');
  // $this->db->where('tellerid', $tellerid);
  // $this->db->where('status', "");
 //  $this->db->limit(1);
  // $query=$this->db->get();
 $q1=$this->db->query($sq1);
 $q2=$this->db->query($sq2);
if($q1->num_rows() > 0)
   {
   //echo "exists";
    return $q1;
  
	//echo "Logged off";
     redirect('login/show_status');
     //this is 
    
    }
else if($q2->num_rows() > 0)
{

 if($q2->num_rows()> 0)
   {
   //echo "exists";
  return $q2;
   redirect('login/logged_off');
//return false;
}
}
}


public function get_account($uid)
{
$this->load->library('session');
$this->load->library('uri');
//$phone=$this->session->userdata('employee_no');

    

$this->db->select('*');
  $this->db->from('careers_register');
  $this->db->where('userid', $uid);

/* foreach ($queryu->result() as $row) {
        $account[] = array(
                        'title' => $row->title,
			'sex' => $row->sex,
                        'surname' => $row->surname,
                        'email' => $row->email,
                        'userid' => $row->userid,
			'firstname' => $row->firstname,
			'middlename' => $row->middlename,
			'citizenship' => $row->citizenship,
                       'addresspersonal' => $row->addresspersonal,
			'city' => $row->city,
			'postalcode' => $row->postalcode,
                        'cellpersonal'=>$row->cellpersonal,
			'physical_location'=>$row->physical_location,
			'dob'=>$row->dob,
            );
    }
*/

$query22 = $this->db->get();
     
 return $query22->result_array();

    // return $account;
}



public function get_vacs()
{
 
 $sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
 $this->db->select('*');
  $this->db->from('careers_jobs');
  $this->db->where('j_status', 'active');
  $this->db->where('j_type', 'EX');
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();
     
 return $query22->result_array();
   
   
}

public function get_county()
{
 
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
 $this->db->select('*');
  $this->db->from('careers_counties');
  
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();
     
 return $query22->result_array();
   
   
}


public function get_constituency()
{
 
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
 $this->db->select('*');
  $this->db->from('careers_constituency');
  
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();
     
 return $query22->result_array();
   
   
}


public function get_wards()
{
 
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";

$this->db->distinct();
 $this->db->select('ward_code, ward_name');
  $this->db->from('careers_wards');
  
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();
     
 return $query22->result_array();
   
   
}


public function get_internalvacs()
{
 
  
// $sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
 $this->db->select('*');
  $this->db->from('careers_jobs');
  $this->db->where('j_status', 'active');
  $this->db->where('j_type', 'IN');
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacsin= array();
 
 $query22in = $this->db->get();
     
 return $query22in->result_array();
   
   
}

public function get_proff($uid)
{
$this->load->library('session');
$this->load->library('uri');
//$phone=$this->session->userdata('employee_no');
$sqlp="select * from  careers_profile  where userid='$uid'";
$queryp = $this->db->query($sqlp);
$proff= array();
 
foreach ($queryp->result() as $row) 
	 {
        $proff[] = array(
            'study1' => $row->study1,
			'study1periodfrom' => $row->study1periodfrom,
            'study1periodto' => $row->study1periodto,
            'qualification1' => $row->qualification1,
			'grade1' => $row->grade1,
			'course1' => $row->course1,
			  );
    }
     return $proff;
}


public function get_job($id)
{
$this->load->library('session');
$this->load->library('uri');
//$phone=$this->session->userdata('employee_no');
$sqld="select * from  careers_jobs where vacancy_no='$id'";
$queryd = $this->db->query($sqld);
 $this->db->limit(1);
$jobs= array();
 
foreach ($queryd->result() as $row) 
	 {
        $jobs[] = array(
            'vacancy_no' => $row->vacancy_no,
			'j_title' => $row->j_title,
            'j_description' => $row->j_description,
            'j_qualification' => $row->j_qualification,
			'j_status' => $row->j_status,
			'j_expiry' => $row->j_expiry,
			'j_created' => $row->j_created,
			'job_id' => $row->job_id,
			 );
    }
     return $jobs;
}




public function logoff_terminal($tid, $cno)
{
// $this->db->where('tellerid', $tid);
//$upres=$this->db->query($squp); 
//$this->db->update('eftc_teller', $sdata);
 $this->db->select('id,teller_card,active, current_terminal_id');
 $this->db->from('eftc_teller');
   $this->db->where('current_terminal_id', $tid);
	  // $this->db->where('', 'NULL');
   $this->db->limit(1);
   $query=$this->db->get();
 if($query->num_rows()<=0)
 {
echo "<br><br><br><br><center><h2><font color='red'>That terminal id is logged off</font> Kindly ";
echo anchor('login/show_profile',' Go Back');
echo "</h2><center>";
 //$this->session->set_flashdata('term_logoff_error', "<font color='green'><b> Terminal Id is Logged Off!</b></font>");
 //echo "The terminal id is logged off already";
//redirect('/login/');
 }
 else
 { 
 //$this->db->select('tellerid,card_no,status');
// this is to incorporate the errors when trying to update the sql server
  $sfqup="UPDATE eftc_teller SET current_terminal_id=NULL where teller_card='$cno'";
  $resf=$this->db->query($sfqup);
  if($resf)
  {
  echo "<center>";
  echo "<br><br><br><br><center><h2><font color='green'>Successfully Updated</font> Kindly ";
  echo anchor('login/show_profile','Go Back');
  echo "</center>";
  }else
  {
  echo "Not";
 } 
 //echo "Not updated";
 //$this->session->set_flashdata('term_logoff_error', "<font color='red'><b> Error Occured while Logging Off!</b></font>");
  //echo "not logged off";
 // redirect('/login/show_status');
 }
}
public function username_exists($cardno)
{
$this->db->select('*');
$this->db->from('eftc_teller');
$this->db->where('status',$cardno );
 //$this->db->limit(1);
   $query_user=$this->db->get();
	if($query_user->num_rows() > 0 && $this->db->last_query())
	{   	
	return true;
	}
	else
	{
		return false;
	}
}
public function get_member_name($mid) 
	{
	
	
	
	// this is for 
       $this->db->select('cardno, tellerid,status'); 
       $this->db->from('eftc_teller');
       $this->db->where('card_no',$mid);
       $query = $this->db->get();
       foreach($query->result_array() as $row)
	    {
           $data[$row['cardno']]=$row['tellerid'] . " ".$row['status'];
        }
        return $data;
	}
	// this is 
	
	public function apply_job($cv)
	{
	
	
	// this is for the application of this job on the next or last step
	$vac_no=$this->session->userdata('vac_no');
	$j_id=$this->session->userdata('clicked_jobid');
	$uids=$this->session->userdata('userid');
	$email=$this->session->userdata('email');
		
   
   $this->db->select('id,vacancy_no,job_id,u_id,j_date');
   $this->db->from('careers_jobs_applications');
   $this->db->where('job_id', $j_id);
   $this->db->where('u_id', $uids);
   $this->db->where('vacancy_no', $vac_no);
   //$this->db->limit(1);
   $queryui=$this->db->get();
   
   if($queryui->num_rows() >1)
	{  
    //echo "<font color='red'>You have already applied for this position</font>";
	
	$this->load->view('header');
	$this->load->view('job_failure');
	$this->load->view('footer');
    }
	
	else
	{	
	$datajob =array(
			
			'u_id'=>$uids,
			'inquire'=>$this->input->post('emp'),
			'law' => $this->input->post('law'),
			'impairment'=>$this->input->post('impair'),
			'comptency'=>$this->input->post('comptency'),
			'achievement'=>$this->input->post('achievement'),
			'salary'=>$this->input->post('salary'),
			'benefits'=>$this->input->post('benefits'),
			'expected_salary'=>$this->input->post('expected_salary'),
			'cv'=>$cv,
			);
	$resultjobs=$this->db->insert('careers_user_details',$datajob);
	
	if($resultjobs)
		{	
		$this->db->set('j_date', 'NOW()', FALSE);
		$datau =array(
			'id'=>'',
			'vacancy_no'=>$this->session->userdata('vac_no'),
			'job_id'=>$this->session->userdata('clicked_jobid'),
			'u_id' => $this->session->userdata('userid'),
			);
		$resultu=$this->db->insert('careers_jobs_applications',$datau);
	
	}	
	}	
	}
	
        
public function sendemail($email)
{
//$msg = "First line of text\nSecond line of text";

// use wordwrap() if lines are longer than 70 characters


// send email
//mail("omollo.ateng@gmail.com","My subject",$msg);
  
$jtitle=$this->session->userdata('j_title');
$sname=$this->session->userdata('username');
$this->load->helper('string');
$verification_code=random_string('numeric', 16);
		//$verification_code="jack";
$link = '<p><h3>IEBC iRecruitment Portal</h3><hr></p><p>Dear <b>'.$sname.'</b>, </p> <p>You have successfully Applied for the position <b>'.$jtitle.'</b> at Independent Electoral and Boundaries Commission (IEBC),</p> <p>Thank you, we wish you well.</p><p><b>Best Regards. </b></p>';

$this->email->set_newline("\r\n");
$this->email->from('jobs@iebc.or.ke');
$this->email->to($email);
$this->email->subject('IEBC - iRecruitment  Portal - Thank you');
$this->email->message($link);

if($this->email->send())
{
  $data['jtitle']=$jtitle;
             
        $this->load->view('admin_header');
	$this->load->view('job_sucess',$data);
	$this->load->view('footer');
}
else
{
    
     $this->load->view('admin_header');
	$this->load->view('mail_failure');
	$this->load->view('footer');
    
show_error($this->email->print_debugger());
}


}

	
public function get_course_types() 
	{
 
    $this->db->select('id,qualification_code, qualification_name'); 
    $this->db->from('careers_course_codes');
    $query = $this->db->get();        
        foreach($query->result_array() as $row)
	{
          $data[$row['qualification_code']]=$row['qualification_name'];
        }
        return $data;
	}
        
      
        
        
	
public function get_grades() 
	{
        $this->db->select('g_id,grade, q_id'); 
        $this->db->from('careers_grade');
        $query = $this->db->get();
        
   foreach($query->result_array() as $row)
	{
           $data[$row['g_id']]=$row['grade'];
        }
        return $data;
	}
		
	public function get_skills_types() 
	{
        $this->db->select('id,skill_code,skill_desc'); 
        $this->db->from('careers_skills');
        $query = $this->db->get();
        foreach($query->result_array() as $row)
		{
           $data[$row['skill_code']]=$row['skill_desc'];
        }
        return $data;
	}
	
	public function get_experience() 
	{
        $this->db->select('*'); 
        $this->db->from('careers_exp');
        $query = $this->db->get();
        foreach($query->result_array() as $row)
		{
           $data[$row['exp_code']]=$row['exp_desc'];
        }
        return $data;
	}

	public function get_others() 
	{
        $this->db->select('id,qualification_code,qualification_name'); 
        $this->db->from('careers_course_others');
        $query = $this->db->get();
        foreach($query->result_array() as $row)
		{
			$data[$row['qualification_code']]=$row['qualification_name'];
        }
        return $data;
	}
	
	public function reg_education()
	{
	
	if(!$this->input->post('study1')=="")
	{
	$data_edu =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('study1'),//$this->input->post('fname'),
			'periodfrom' => $this->input->post('study1periodfrom'),
			'periodto' => $this->input->post('study1periodto'),
			'course' => $this->input->post('course_type1'),
			'grade' => $this->input->post('grades1'),
			);
			
	$resulte=$this->db->insert('careers_education',$data_edu);
	
	
	if($resulte)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Educational Qualifications Successfully registered</b></font>');

	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Educational Qualifications</b></font>');
	}
	}
	
	 if(!$this->input->post('study2')=="")
	{
	$data_edu2 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('study2'),//$this->input->post('fname'),
			'periodfrom' => $this->input->post('study2periodfrom'),
			'periodto' => $this->input->post('study2periodto'),
			'course' => $this->input->post('course_type2'),
			'grade' => $this->input->post('grades2'),
			);
			
	$resulte2=$this->db->insert('careers_education',$data_edu2);
	
	
	if($resulte2)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green class="alert alert-success modal" ><b>Educational Qualifications Successfully registered</b></font>');

        }else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red class="alert alert-message modal"><b>Error updating the Educational Qualifications</b></font>');
	}
	
	}
	
	 if(!$this->input->post('study3')=="")
	{
	$data_edu3 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('study3'),//$this->input->post('fname'),
			'periodfrom' => $this->input->post('study3periodfrom'),
			'periodto' => $this->input->post('study3periodto'),
			'course' => $this->input->post('course_type3'),
			'grade' => $this->input->post('grades3'),
			);
			
	$resulte3=$this->db->insert('careers_education',$data_edu3);
	
	
	if($resulte3)
	{
	$this->session->set_flashdata('edu_success_update','<font color="green" class="alert alert-success modal"><b>Educational Qualifications Successfully registered</b></font>');
	
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color="red"><b>Error updating the Educational Qualifications</b></font>');
	}
	
	}

	 if(!$this->input->post('study4')=="")
	{
	$data_edu4 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('study4'),//$this->input->post('fname'),
			'periodfrom' => $this->input->post('study4periodfrom'),
			'periodto' => $this->input->post('study4periodto'),
			'course' => $this->input->post('course_type4'),
			'grade' => $this->input->post('grades4'),
			);
			
	$resulte4=$this->db->insert('careers_education',$data_edu4);
	
	if($resulte4)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Educational Qualifications Successfully registered</b></font>');

	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Educational Qualifications</b></font>');
	}
	
	}
	
	
	
	 if(!$this->input->post('study5')=="")
	{
	$data_edu5 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('study5'),//$this->input->post('fname'),
			'periodfrom' => $this->input->post('study5periodfrom'),
			'periodto' => $this->input->post('study5periodto'),
			'course' => $this->input->post('course_type5'),
			'grade' => $this->input->post('grades5'),
			);
			
	$resulte5=$this->db->insert('careers_education',$data_edu5);
	
	
	if($resulte5)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Educational Qualifications Successfully registered</b></font>');

	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Educational Qualifications</b></font>');
	}
	
	}

	
	 if(!$this->input->post('study6')=="")
	{
	$data_edu6 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('study6'),//$this->input->post('fname'),
			'periodfrom' => $this->input->post('study6periodfrom'),
			'periodto' => $this->input->post('study6periodto'),
			'course' => $this->input->post('course_type6'),
			'grade' => $this->input->post('grades6'),
			);
			
	$resulte6=$this->db->insert('careers_education',$data_edu6);
	
	
	if($resulte6)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Educational Qualifications Successfully registered</b></font>');

	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Educational Qualifications</b></font>');
	}
	
	
	}
		redirect('login/show_profile');
	}
	
	// method for Proffessional Qualifications
	public function proff_registration()
	{	
	
	if(!$this->input->post('pstudy1')=="")
	{
	$data_proff =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('pstudy1'),//$this->input->post('fname'),
			'pqualification' => $this->input->post('proffe1'),
			'pcourses' => $this->input->post('course1'),
			);	
	
	$resultp=$this->db->insert('careers_proffession',$data_proff);
	
	if($resultp)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Proffessional Qualifications Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Proffesional Qualifications</b></font>');
	}
	}
	
	
	
	if(!$this->input->post('pstudy2')=="")
	{
	$data_proff2 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('pstudy2'),//$this->input->post('fname'),
			'pqualification' => $this->input->post('proffe2'),
			'pcourses' => $this->input->post('course2'),
			);	
	
	$resultp2=$this->db->insert('careers_proffession',$data_proff2);
	
	if($resultp2)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Proffessional Qualifications Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Proffesional Qualifications</b></font>');
	}
	}
	
	
	
	
	if(!$this->input->post('pstudy3')=="")
	{
	$data_proff3 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('pstudy3'),//$this->input->post('fname'),
			'pqualification' => $this->input->post('proffe3'),
			'pcourses' => $this->input->post('course3'),
			);	
	
	$resultp3=$this->db->insert('careers_proffession',$data_proff3);

	if($resultp3)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Proffessional Qualifications Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Proffesional Qualifications</b></font>');
	}
	}
	
	if(!$this->input->post('pstudy4')=="")
	{
	$data_proff4 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('pstudy4'),//$this->input->post('fname'),
			'pqualification' => $this->input->post('proffe4'),
			'pcourses' => $this->input->post('course4'),
			);	
	
	$resultp4=$this->db->insert('careers_proffession',$data_proff4);

	if($resultp4)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Proffessional Qualifications Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Proffesional Qualifications</b></font>');
	}
	}
	
	
	
	if(!$this->input->post('pstudy5')=="")
	{
	$data_proff5 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('pstudy5'),//$this->input->post('fname'),
			'pqualification' => $this->input->post('proffe5'),
			'pcourses' => $this->input->post('course5'),
			);	
	
	$resultp5=$this->db->insert('careers_proffession',$data_proff5);

	if($resultp5)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Proffessional Qualifications Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Proffesional Qualifications</b></font>');
	}
	}
	
	
	if(!$this->input->post('pstudy6')=="")
	{
	$data_proff6 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('pstudy6'),//$this->input->post('fname'),
			'pqualification' => $this->input->post('proffe6'),
			'pcourses' => $this->input->post('course6'),
			);	
	$resultp6=$this->db->insert('careers_proffession',$data_proff6);
	if($resultp6)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Proffessional Qualifications Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Proffesional Qualifications</b></font>');
	}
	}
	
	if(!$this->input->post('pstudy7')=="")
	{
	$data_proff7 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute' => $this->input->post('pstudy7'),//$this->input->post('fname'),
			'pqualification' => $this->input->post('proffe7'),
			'pcourses' => $this->input->post('course7'),
			);	
	
	$resultp7=$this->db->insert('careers_proffession',$data_proff7);

	if($resultp7)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Proffessional Qualifications Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Proffesional Qualifications</b></font>');
	}
	}
	
	redirect('login/show_profile');
	}
	
	// this is for Skills Qualifications
	public function reg_skills()
	{
	if(!$this->input->post('skill1')=="")
	{
	$data_skill =array(
			
			'uid'=>$this->session->userdata('userid'),
			'skill_code' => $this->input->post('skill1'),
			);	
	
	$resultsk=$this->db->insert('careers_reg_skills',$data_skill);

	if($resultsk)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Skills Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Skills</b></font>');
	}
	}
	
	if(!$this->input->post('skill2')=="")
	{
	$data_skill2 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'skill_code' => $this->input->post('skill2'),
			);	
	
	$resultsk2=$this->db->insert('careers_reg_skills',$data_skill2);

	if($resultsk2)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Skills Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Skills</b></font>');
	}
	}
	
	if(!$this->input->post('skill3')=="")
	{
	$data_skill3 =array(
			
			'uid'=>$this->session->userdata('userid'),
			'skill_code' => $this->input->post('skill3'),
			);	
	
	$resultsk3=$this->db->insert('careers_reg_skills',$data_skill3);

	if($resultsk3)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Skills Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating the Skills</b></font>');
	}
	}
	
	
	
		redirect('login/show_profile');
	}
	public function reg_employers()
	{
	if(!$this->input->post("nemployer1")=="")
	{
	$data_employer=array(
			
			'uid'=>$this->session->userdata('userid'),
			'employer_name'=>$this->input->post('nemployer1'),
			'industry' => $this->input->post('industry1'),
			'post_held' => $this->input->post('post1'),
			'experience_code' => $this->input->post('exp1'),
			);	
	$resultemp=$this->db->insert('careers_employer_history',$data_employer);
	
	if($resultemp)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Employment History Details Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating Employment History Details</b></font>');
	}
	
	}
	
	if(!$this->input->post("nemployer2")=="")
	{
	$data_employer2=array(
		
			'uid'=>$this->session->userdata('userid'),
			'employer_name'=>$this->input->post('nemployer2'),
			'industry' => $this->input->post('industry2'),
			'post_held' => $this->input->post('post2'),
			'experience_code' => $this->input->post('exp2'),
			);	
	$resultem2=$this->db->insert('careers_employer_history',$data_employer2);
	
	if($resultem2)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Employment History Details Successfully registered</b></font>');
	}else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating Employment History Details</b></font>');
	}
	}
	
	if(!$this->input->post("nemployer3")=="")
	{
	$data_employer3=array(
			
			'uid'=>$this->session->userdata('userid'),
			'employer_name'=>$this->input->post('nemployer3'),
			'industry' => $this->input->post('industry3'),
			'post_held' => $this->input->post('post3'),
			'experience_code' => $this->input->post('exp3'),
			);	
	$resultem3=$this->db->insert('careers_employer_history',$data_employer3);
	if($resultem3)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Employment History Details Successfully registered</b></font>');
	}
	else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating Employment History Details</b></font>');
	}
	}	
	redirect('login/show_profile');
	}
	
	
public function reg_referees()
	{
	if(!$this->input->post('rfname1')=="")
	{	
	$data_referee1=array(
		
			'uid'=>$this->session->userdata('userid'),
			'fullnames'=>$this->input->post('rfname1'),
			'tel' => $this->input->post('rtel1'),
			'address' => $this->input->post('raddress1'),
			'postalcode' => $this->input->post('rpostal1'),
			'city' => $this->input->post('rcity1'),
			'occupation' => $this->input->post('roccup1'),
			);
		$resultref1=$this->db->insert('careers_referees',$data_referee1);
 
	if($resultref1)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Referees Details Successfully registered</b></font>');
	}
	else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating Referees Details</b></font>');
	}
	}
	
	if(!$this->input->post('rfname2')=="")
	{
	$data_referee2=array(
			
			'uid'=>$this->session->userdata('userid'),
			'fullnames'=>$this->input->post('rfname2'),
			'tel' => $this->input->post('rtel2'),
			'address' => $this->input->post('raddress2'),
			'postalcode' => $this->input->post('rpostal2'),
			'city' => $this->input->post('rcity2'),
			'occupation' => $this->input->post('roccup2'),
			);
	
	$resultref2=$this->db->insert('careers_referees',$data_referee2);
		
	if($resultref2)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Referees Details Successfully registered</b></font>');
	}
	else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error updating Referees Details</b></font>');
	}
	}

	if(!$this->input->post('rfname3')=="")
	{
	$data_referee3=array(
			
			'uid'=>$this->session->userdata('userid'),
			'fullnames'=>$this->input->post('rfname3'),
			'tel' => $this->input->post('rtel3'),
			'address' => $this->input->post('raddress3'),
			'postalcode' => $this->input->post('rpostal3'),
			'city' => $this->input->post('rcity3'),
			'occupation' => $this->input->post('roccup3'),
			);
	
	$resultref3=$this->db->insert('careers_referees',$data_referee3);
		
	if($resultref3)
	{
	$this->session->set_flashdata('edu_success_update','<font color=green><b>Referees Details Successfully registered</b></font>');
	}
	else
	{
	$this->session->set_flashdata('edu_success_update','<font color=red><b>Error Updating Referees Details</b></font>');
	}
	}


	redirect('login/show_profile');
	}
	public function final_jobapplication()
	{
	
	$this->db->set('j_date', 'NOW()', FALSE);
	$data_jobapp=array(
			
			'vacancy_no'=>$this->session->userdata('vac_no'),
			'job_id'=>$this->session->userdata('clicked_jobid'),
			'u_id' => $this->session->userdata('userid'),
			//'j_date' => //$this->input->post('raddress3'),
			);
	
	$resultjoba=$this->db->insert('careers_jobs_applications',$data_jobapp);
	
	if($resultjoba)
			{
			$e= $this->session->userdata('email');
			echo "<center><font color='green'>Successfully Applied for this job</font><center>";
			//$this->sendemail($e);
			}
			
			else{
			
			echo "<center><font color='red'>Not able to apply for this Job</font></center>";
			
			}
	
	}
	
	
	
 
public function jobapplication()
	{
    
$uids=$this->session->userdata('userid');
$vac_no= $this->session->userdata('vac_no');
$j_id =$this->session->userdata('clicked_jobid');

  $this->db->select('*');
   $this->db->from('careers_final');
   $this->db->where('job_id', $j_id);
   $this->db->where('uid', $uids);
   $this->db->where('vacancy_no', $vac_no);
   //$this->db->limit(1);
   $queryudoublej=$this->db->get();
   
   if($queryudoublej->num_rows() >=1)
	{
       $this->session->set_flashdata('error','<h3><p class="alert alert-danger" id="doubleerr"> You have already applied for this position, Please apply for another position.</p></h3>');
       
       redirect('welcome/show_job');
          }
else {
// start inserting the job application details;
	
	$educourses=0;
	$pcourses=0;

 $this->db->select('*');
   $this->db->from('careers_education');
     $this->db->where('uid', $uids);
$querytt=$this->db->get();

if($querytt->num_rows() > 0)
{


 $this->db->select('*');
   $this->db->from('careers_proffession');
     $this->db->where('uid', $uids);
$queryttp=$this->db->get();

if($queryttp->num_rows() > 0)
{

	

	$app_type=$this->session->userdata('job_type');
        
  

        
$this->db->set('applied_date', 'NOW()', FALSE);
$data_jfinal=array(
			
			'vacancy_no'=>$this->session->userdata('vac_no'),
			'job_id'=>$this->session->userdata('clicked_jobid'),
			'j_title'=>$this->session->userdata('j_title'),
				'uid' => $uids,
                        'application_type' => $app_type,
			
    );
	
$resultjobfinal=$this->db->insert('careers_final',$data_jfinal);


if($resultjobfinal)
	{	
	//echo "You have successfully, Applied for the position of:<b>".$this->session->userdata('j_title')."</b>";
     // $this->sendemail($this->session->userdata('email'));
 $data['jtitle']="";
             
        $this->load->view('header');
	$this->load->view('job_sucess',$data);
	$this->load->view('footer');

//jobapplication
	}
	else
	{	
	echo "Not Successfull";
	}
}else{
$this->session->set_flashdata('error','<h3><p style="background:#EE0000; color:#ffffff;"id="doubleerr"class="alert alert-message"> You have no Proffessional Qualifications yet, please click on My Proffessional Qualification and fill, then you try again</p></h3>');
       
       redirect('welcome/show_job');


}

}else{


  $this->session->set_flashdata('error','<h3><p style="background:#EE0000; color:#ffffff;"id="doubleerr"class="alert alert-message"> You have no Educational Qualifications yet, please click on My Education Qualification and fill, then you try again</p></h3>');
       
       redirect('welcome/show_job');



}






	// START REGISTERING USER DETAILS...
	
    




          }


// to make the move in the going//

}


public function get_applied_jobs($uid)
{
    
$this->load->library('session');
$this->load->library('uri');
//$phone=$this->session->userdata('employee_no');
$uid=$this->session->userdata('userid');

$sqljobsa="select * from  careers_final, careers_jobs  where careers_final.job_id=careers_jobs.job_id AND careers_final.uid='$uid'";
 $queryjobsa = $this->db->query($sqljobsa);
   $jobs_applied= array();
   
     foreach ($queryjobsa->result() as $row) {
    
         $jobs_applied[] = array(  
             'j_title' => $row->j_title,
             'j_status' => $row->j_status,
             'j_created' => $row->j_created,
             'j_expiry' => $row->j_expiry,
             'applied_date'=>$row->applied_date,
             'job_id' => $row->job_id,
	     'vacancy_no' => $row->vacancy_no,           
            );
         
    }
    
     return $jobs_applied;
     //get_education
}



public function get_education($uid)
{    
$this->load->library('session');
$this->load->library('uri');
//$phone=$this->session->userdata('employee_no');
$uid=$this->session->userdata('userid');
$edus="select * from careers_education where uid=".$uid;

$queryedd = $this->db->query($edus);
  
  
    if ($queryedd->num_rows() > 0) 
    {
        
        return $queryedd->result_array(); 
    }
  
    return array();

    
    
}

public function get_alleducation()
{    

$this->db->select('*');
  $this->db->from('careers_course_codes');
  
  $queryedd = $this->db->get();
  
  
    if ($queryedd->num_rows() > 0) 
    {
        
        return $queryedd->result_array(); 
    }
  
    return array();

    
    
}

public function gettings($id)
{

 $this->db->select('*');
   $this->db->from('careers_jobs');
   $this->db->where('id', $id);  
  $this->db->limit(1);
   $querys=$this->db->get();
 if($querys->num_rows()> 0)
   {   	
   	foreach($querys->result() as $rows)
   	{
	//add all data to session
   		$newdatavacss = array(
   				'vacancy_no' => $rows->vacancy_no,
				'job_id' => $rows->job_id,
				'j_title' => $rows->j_title							
				);

   	}
   	$this->session->set_userdata($newdatavacss);

}

}




public function get_proffd($uid)
{
    
$this->load->library('session');
$this->load->library('uri');
//$phone=$this->session->userdata('employee_no');
$uid=$this->session->userdata('userid');
$sqlpp="select * from careers_proffession where uid=".$uid;

//$this->db->select('*');
  //$this->db->from('careers_proffession');
  //$this->db->where('uid', $uid);
  $queryeproffd = $this->db->query($sqlpp);
  
  
    if ($queryeproffd->num_rows() > 0) 
    {
        
        return $queryeproffd->result_array(); 
    }
  
    return array();
    // get_employmente
 
}

public function get_employmente($uid)
{    
$this->load->library('session');
$this->load->library('uri');
//$phone=$this->session->userdata('employee_no');
$uid=$this->session->userdata('userid');
$emps="select * from careers_employer_history where uid=".$uid;

//$this->db->select('*');
 // $this->db->from('careers_employer_history');
  //$this->db->where('uid', $uid);
  $queryempd = $this->db->query($emps);
  
  if ($queryempd->num_rows() > 0) 
    {        
        return $queryempd->result_array(); 
    }
        
  
    return array();
    // get_employmente
 }


public function get_membership($uid)
{    
$this->load->library('session');
$this->load->library('uri');
//$phone=$this->session->userdata('employee_no');
$uid=$this->session->userdata('userid');
$emps="select * from careers_membership where uid=".$uid;

//$this->db->select('*');
 // $this->db->from('careers_employer_history');
  //$this->db->where('uid', $uid);
  $queryempd = $this->db->query($emps);
  
  if ($queryempd->num_rows() > 0) 
    {        
        return $queryempd->result_array(); 
    }
        
  
    return array();
    // get_employmente
 }




public function UpdateUserAccount()
{
    $fn=$this->input->post('efnames');
    $en= $this->input->post('emname');
    $em= $this->input->post('eemail');
    $el=$this->input->post('elname');
    $ep =$this->input->post('ephone');
    $eadd= $this->input->post('eaddressp');
    $ep = $this->input->post('epcode');
      $us=$this->session->userdata('userid');
    
    $sqlu_update="UPDATE careers_register SET firstname='$fn', middlename='$en',
    email='$em', surname='$el', cellpersonal='$ep', addresspersonal='$eadd', postalcode='$ep' where userid='$us'";
    
  
$stru = $this->db->query($sqlu_update);
    
if($stru)
{
    
    $this->session->set_flashdata('edu_success_update','<font color=white><p class="alert alert-success"><b>Your Profile successfully Updated...</b></p></font>');

    redirect('login/show_profile');
    
}

else
{
   $this->session->set_flashdata('edu_success_update','<font color=errer><p class="alert"><b>Your Profile successfully Updated...</b></p></font>');
    redirect('login/show_profile');

}

    
}
public function add_meducation()
{
    $dataaddedu =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute'=>$this->input->post('study1'),
			'periodfrom' => $this->input->post('from'),
                        'periodto' => $this->input->post('to'),
                        'course' => $this->input->post('course_type1'),
                        'grade' => $this->input->post('grades1'),
                    );
    
	$reseudd= $this->db->insert('careers_education',$dataaddedu);
        
        if($reseudd)
        { 

    $this->session->set_flashdata('successd',"<center><p   style='background:green; color:#ffffff;'class='alert alert-success'> <b>You have  Successfully Added Educational Background...</b></p></center>");
    redirect('welcome/add_educa');
         }
        else
        {
            echo "You did not add the details...";
        }
    
}

public function add_mproffesion()
{

$dataaddproff =array(
			
			'uid'=>$this->session->userdata('userid'),
			'nameofinstitute'=>$this->input->post('pstudy1'),
			'pqualification' => $this->input->post('pequal'),
                        'pcourses' => $this->input->post('courses'),
                       
                    );

        $reseuddproff= $this->db->insert('careers_proffession',$dataaddproff);

      if($reseuddproff)
        {            
     
  
  $this->session->set_flashdata('successd',"<center><p   style='background:green; color:#ffffff;'class='alert alert-success'> <b>You have  Successfully Added Proffessional Background...</b></p></center>");
  
      redirect('welcome/add_proffesss');
        
      }
        
        else
        {
            
            echo "You did not add the details...";
        }
    
    
}
public function add_memployment()
{    
    
    //this is to improve the 
$dataaddemp =array(
			'uid'=>$this->session->userdata('userid'),
			'employer_name'=>$this->input->post('employer_name'),
			'industry' => $this->input->post('industry'),
                        'post_held' => $this->input->post('post'),
                        'experience_code' => $this->input->post('experience_code'),
                       
                    );

        $reseuddemp= $this->db->insert('careers_employer_history',$dataaddemp);

      if($reseuddemp)
        { 
          
     $this->session->set_flashdata('successd',"<center><p   style='background:green; color:#ffffff;'class='alert alert-success'> <b>You have  Successfully Added Employment History...</b></p></center>");
     redirect('welcome/add_employment');
      
        }
        
        else{
            
           echo "You did not Add the details...";
            
             }
      } 
      
//add_membership 

public function add_membership()
{    
    
    //this is to improve the 
$dataaddemp =array(
			'uid'=>$this->session->userdata('userid'),
			'institution_name'=>$this->input->post('institution_name'),
			'year_registered' => $this->input->post('year_registered'),
                        'valid_upto' => $this->input->post('valid'),
                        'registration_no' => $this->input->post('registration_no'),
                       
                    );

        $reseuddemp= $this->db->insert('careers_membership',$dataaddemp);

      if($reseuddemp)
        { 
          
     $this->session->set_flashdata('successd',"<center><p   style='background:green; color:#ffffff;'class='alert alert-success'> <b>You have  Successfully Membership History...</b></p></center>");
     redirect('welcome/add_employment');
      
        }
        
        else{
            
           echo "You did not Add the details...";
            
             }
      } 
 public function checkemail()
	{	
  $e=$this->input->post('email');
  $this->db->select('*');
   $this->db->from('careers_register');
   $this->db->where('email', $e);
  
  // $this->db->limit(1);
   $query=$this->db->get();
   
if($query->num_rows()> 0)
    {   
    $newdataemail = array(
   			'email' => $e,
                           );
   	$this->session->set_userdata($newdataemail);
        //echo "We are going to reset your password";  
	$this->load->helper('string');
	$verification_code=random_string('alnum', 10);
	//echo '<br>';
	//echo $verification_code;
	$sqlres="UPDATE careers_register set password='$verification_code' where email='$e'";
	$rescr = $this->db->query($sqlres);

	if($rescr)
	   {
 
          $this->sendemails($e, $verification_code);
	  
          }
   
            }
      else
        {          
        
         $this->session->set_flashdata('reset_msg','<p id="rerror" class="alert alert-message modal" style="background:#EE0000; color:#ffffff"> That email address does not Exist! Enter the email you used when registerting with us.</p>');

         redirect('login/vforgot');
         
         }
		
}

public function sendemails($e, $code)
{
$this->email->set_newline("\r\n");
$this->email->from('jobs@iebc.or.ke','iRecruitment - Password Reset');
$this->email->to($e);
$link = '<body bgcolor="#8ab7f4" style="border-radius:50px;"> <h2><p>IEBC iRecruitment  - Password Reset</p><HR></h2> <p>Bellow are your Login Details:</p> <br> <table><tr><td>Email:</td><b><td>'.$e.'</b></td></tr><tr><td>Password:</td><b><td>'.$code.'</b></td></tr><tr><td>N/B:</td><td>Your Password is your Weapon! <b>Keep it Secret</b></td></tr>';

$this->email->subject('IEBC - iRecruitment Portal - Password Reset');
$this->email->message($link);

if($this->email->send())
{
//echo 'We have sent you a Password Reset Link, Please check on your email.';
$this->session->set_flashdata('reset_msg','<p class="alert alert-success"><font color=green><b>Your Password has been Successfuly Reset, a confirmation email has been sent in your email address, Use it to Login and Change your Password</b></font>');
$this->session->set_flashdata('email',$e);

redirect('resetpwd/pwdreset');
}

else
{
echo "The Email was not Sent. please contact the Administrator...";
//show_error($this->email->print_debugger());
}
}
    

public function pwdreseting()
{
$opw=$this->input->post('oldpwd');
$newpwd=$this->input->post('newpwd');


//echo $opw;
$sqlresetu="SELECT * FROM careers_register where password='$opw'";
$rescru = $this->db->query($sqlresetu);

if($rescru->num_rows()> 0)
 {
    $email=$this->session->userdata('email');   
    $sqlUppwd="UPDATE careers_register SET password='$newpwd' where email='$email'";
    $reupdatepwd=$this->db->query($sqlUppwd);

  if($reupdatepwd)
    {
    
      
      /*
    $jt=$this->session->userdata('job_type');
            
            if($jt=='external')
            {
              
                  redirect('welcome');
            }
            else  if($jt=='internal')
            {
                */
                redirect('welcome/vinternal');
                
              /*  
            }
            else{
                  redirect('welcome');
                
            }
*/

    }
 
 }
	
else
{
    
$this->session->set_flashdata('reset_msg','<p id="perror" style="background:#EE0000; color:#ffffff" class="alert alert-message modal">That Password does not Exist, Kindly use the Password we had previously sent to your Email.</p>');
redirect('resetpwd/pwdreset');

}

}
public function add_cluster()
{
$c=$this->input->post('code');
$id=$this->input->post('jid');
$vacno=$this->input->post('vac_no');
$jtitle=$this->input->post('j_title');
foreach ($c as $value)
{
    $data[] = array(
          
	'vacancy_no'=>$vacno,
	'jtitle' => $jtitle,
        'edu_code'  =>  $value,
	'weight'=>0

        // Populate more columns here if you need to
       
    );
}

$re=$this->db->insert_batch('careers_cluster', $data); 

if($re)

{
$this->session->set_flashdata('error', "<p id='lerr'  style='background:green; color:#ffffff;'class='alert alert-success modal'>Successfully added Qualification Cluster to Job Vacancy No: $vacno.</p>");

redirect('symadm/vacancy_management');

}

}


public function get_apps()
{
 $newdatau = array(
   				'vac_nos' => $this->input->post('vacnumber'),
);
$this->session->set_userdata($newdatau);
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
 $this->db->select('*');
  $this->db->from('careers_final');
  $this->db->where('vacancy_no', $this->input->post('vacnumber'));
  //$this->db->where('j_type', 'EX');
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();
     
 return $query22->result_array();
   
   
}
public function generate_code()
{
$vac=$this->session->userdata('vac_nos');
if($vac=='')
{
$this->session->set_flashdata('error', "<p id='lerr'  style='background:red; color:#ffffff;'class='alert alert-success modal'>Oops! You did not input the Vacancy number, please try again...</p>");
redirect('addcourse/getapplist');

}
else{
//echo $vac;
 $this->db->select('*');
   $this->db->from('careers_final');
   $this->db->where('vacancy_no', $vac);
  //$this->db->limit(1);
   $query=$this->db->get();
 if($query->num_rows()> 0)
   {   	
$this->db->query('TRUNCATE table careers_scores');

   	foreach($query->result() as $rows)
   	{
//echo $rows->qualification_code;

$split=explode("|",$rows->qualification_code);
$q=implode(',', $split);
//echo $q;
$sqws="Select sum(weight) as cweight, vacancy_no from careers_cluster where edu_code in($q) and vacancy_no='$vac' group by vacancy_no";

$re=$this->db->query($sqws);

foreach($re->result() as $r)
   	{

//echo $r->cweight, $rows->uid;
    $datascore =array(
			
			'uid'=>$rows->uid,
			'fname'=>$rows->fname,
			'lname' => $rows->lname,
                        'email' => $rows->email,
                        'phone' => $rows->mobile,
			'dob' => $rows->dob,
			'vacancy_no' => $vac,
			'job_id' => $rows->job_id,
			'j_title' => $rows->j_title,
                        'score' => $r->cweight,
                    );
    
	$resescore= $this->db->insert('careers_scores',$datascore);

}

}



$this->session->set_flashdata('error', "<p id='lerr'  style='background:green; color:#ffffff;'class='alert alert-success modal'>Successfully Generated the Scores for Job Vacancy Number: $vac, Proceed to ShortList.</p>");
redirect('symadm');

}

}
}
public function shortlist()
{
$score=$this->input->post('score');
$vacno=$this->input->post('vacnumber');

$sqlsh="Select min_exp_year,max_exp_year,min_age,max_age from careers_jobs where vacancy_no=".$vacno;
$queryshort = $this->db->query($sqlsh);
$max_exp=0;
$min_exp=0;
$min_age=0;
$max_age=0;

if ($queryshort->num_rows() > 0)
{
   $row = $queryshort->row(); 

 $max_exp= $row->max_exp_year;
    $min_exp=$row->min_exp_year;
$min_age=$row->min_age;
$max_age=$row->max_age;

$year_save = array(
   				'max_year' => $row->max_exp_year,
				'min_year' => $row->min_exp_year,
				'min_age' => $row->min_age,
				'max_age' => $row->max_age,
				
				);

   	
   	$this->session->set_userdata($year_save);



   }
$sqly2="Select uid,sum(experience_code) as totaly from careers_employer_history group by uid";
$queryy2=$this->db->query($sqly2);

foreach ($queryy2->result() as $row)
{
$expy=$row->totaly;
$uu=$row->uid;
$queryscoreup="Update careers_scores set exp_year='$expy' where uid='$uu'"; 

$this->db->query($queryscoreup);

}


$sqlddyy="select dob,uid from careers_scores";

$queryddd=$this->db->query($sqlddyy);

foreach ($queryddd->result() as $row)
{
$dds=$row->dob;
$upss=$row->uid;
$seconds_remaining = time() - strtotime($dds);
$t=$seconds_remaining / (24 * 60 * 60);

$years_old= $t/365;
$sqlupdatedddd="update careers_scores set age='$years_old' where uid='$upss'";

$this->db->query($sqlupdatedddd);
}


//$sqlgetshort="Select * from ";

$this->db->select('*'); 
  $this->db->from('careers_scores');
  $this->db->where('vacancy_no', $vacno);
 $this->db->where('score >=', $score);
 $this->db->where('exp_year >=', $min_exp);
 $this->db->where('exp_year <=', $max_exp);
 $this->db->where('age >=', $min_age);
 $this->db->where('age <=', $max_age);
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();

$newdatavss = array(
   				'score' => $score,
				'vacnumber' => $vacno,
				
				);

   	
   	$this->session->set_userdata($newdatavss);

   
 return $query22->result_array();




}
public function longlist()
{
$score=$this->input->post('score');
$vacno=$this->input->post('vacnumber');
$max_year=$this->session->userdata('max_year');
$min_year=$this->session->userdata('min_year');
$min_age=$this->session->userdata('min_age');
$max_age=$this->session->userdata('max_age');

$this->db->select('*');
  $this->db->from('careers_scores');
  $this->db->where('vacancy_no', $vacno);
 $this->db->where('score <', $score);
 $this->db->where('exp_year <', $min_age);
 $this->db->where('age <', $min_age);
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();

$newdatavss = array(
   				'score' => $score,
				'vacnumber' => $vacno,
				
				);

   	
   	$this->session->set_userdata($newdatavss);

   
 return $query22->result_array();


}

public function shortlist_email()
{
$subject =$this->input->post('subject');
$msg =$this->input->post('msg');

$vacno=$this->session->userdata('vacnumber');
$score=$this->session->userdata('score');
$max_year=$this->session->userdata('max_year');
$min_year=$this->session->userdata('min_year');
$min_age=$this->session->userdata('min_age');
$max_age=$this->session->userdata('max_age');

$this->db->select('*');
   $this->db->from('careers_scores');
   $this->db->where('vacancy_no', $vacno);
 $this->db->where('score >=', $score);
$this->db->where('exp_year >=', $min_year);
 $this->db->where('exp_year <=', $max_year);
 $this->db->where('age >=', $min_age);
 $this->db->where('age <=', $max_age);
   //$this->db->limit(1);
   $query=$this->db->get();
 if($query->num_rows() >= 1)
   {   	
   	foreach($query->result() as $rows)
   	{
//echo $rows->email;
$link = "Dear <b>".$rows->fname."</b><br><br>".$msg;

$this->email->set_newline("\r\n");
$this->email->from('omollo.ateng@gmail.com');
$this->email->to($rows->email);
$this->email->subject($subject. ' - '. $rows->j_title);
$this->email->message($link);
$this->email->send();
}

if($this->email->send())
{
  $this->session->set_flashdata('error', "<p id='lerr'  style='background:green; color:#ffffff;'class='alert alert-success modal'>Email Successfully sent to the Short Listed Candidates.</p>");
redirect('symadm');

}
else
{
$this->session->set_flashdata('error', "<p id='lerr'  style='background:red; color:#ffffff;'class='alert alert-message modal'>OOps! the system is not able to sent Mails, Please contact the Administrator, and then try again.</p>");
redirect('symadm');
   
}
}
else{

$this->session->set_flashdata('error', "<p id='lerr'  style='background:red; color:#ffffff;'class='alert alert-message modal'>OOps! There are no Shortlisted candidates to send email to, Please Shortlist and then try again.</p>");
redirect('symadm');

}

}

public function longlist_email()
{
$subject =$this->input->post('subject');
$msg =$this->input->post('msg');

$min_year=$this->session->userdata('min_year');
$min_age=$this->session->userdata('min_age');


$vacno=$this->session->userdata('vacnumber');
$score=$this->session->userdata('score');
$this->db->select('*');
   $this->db->from('careers_scores');
   $this->db->where('vacancy_no', $vacno);
 $this->db->where('score <', $score);
 $this->db->where('exp_year <', $min_exp);
 $this->db->where('age <', $min_age);
   //$this->db->limit(1);
   $query=$this->db->get();
 if($query->num_rows()> 0)
   {   	
   	foreach($query->result() as $rows)
   	{
//echo $rows->email;
$link = "Dear <b>".$rows->fname."</b><br><br>".$msg;

$this->email->set_newline("\r\n");
$this->email->from('omollo.ateng@gmail.com');
$this->email->to($rows->email);
$this->email->subject($subject. ' - '. $rows->j_title);
$this->email->message($link);
$this->email->send();
echo 'Sent';
}

if($this->email->send())
{
  $this->session->set_flashdata('error', "<p id='lerr'  style='background:green; color:#ffffff;'class='alert alert-success modal'>Email Successfully sent to the Long Listed Candidates.</p>");
redirect('symadm');

}
else
{
$this->session->set_flashdata('error', "<p id='lerr'  style='background:red; color:#ffffff;'class='alert alert-message modal'>OOps! the system is not able to sent Mails, Please contact the Administrator, and then try again.</p>");
redirect('symadm');
   
}
}

}

public function sendmail_shortlist($email,$fname,$subject,$message)
{  



}	
public function get_countybyname()
{
$c ="Kwale";//$this->input->post('subject');


$emps="select b.constituency_name from careers_counties a, careers_constituency b  where a.county_code=b.county_code and  a.county_name='$c'";

//$this->db->select('*');
 // $this->db->from('careers_employer_history');
  //$this->db->where('uid', $uid);
//$queryempd=array();
  $queryempd = $this->db->query($emps);
  
  
  if ($queryempd->num_rows() > 0)
  {
  
  	return $queryempd->result_array();
  }
  
  return array();  

   
 //return $query22->result_array();
  
   // return $queryempd->result_array();
    // get_employmente
 
}

}
?>
