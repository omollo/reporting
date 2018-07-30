<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Model {

    function __construct()
    {
        parent::__construct();
        
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('email');
		$this->email->set_mailtype("html");
	 	$this->load->library('session');
   		$this->load->helper('date');		
    }
    
    
public function check($email, $password)
	{

   $this->db->select('*');
   $this->db->from('tbl_login');
   $this->db->where('email', $email);
   $this->db->where('password',md5($password));
   $this->db->limit(1);
   $query=$this->db->get();

// this is for logging in.....

 if($query->num_rows()> 0)
   {   	
   	foreach($query->result() as $rows)
   	{
	//add all data to session
   		 $newdata = array(   			
				'email' => $rows->email,
				'fname' => $rows->fname,
				'password_status' => $rows->password_status,
				'lname' => $rows->lname,
				'phone' => $rows->phone,
			//	'tel' => $rows->tel,
		  	//	'oop' => $rows-> oop,
				'county' => $rows->county,
				'constituency' => $rows->constituency,
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
$sqln ="update tbl_login set loggedin='1' where password_status<>'0' and email='$email'";
$this->db->query($sqln);
     return true;
//$query->result();
   }
   else
   {
      // $this->session->set_flashdata();
   
    $this->session->set_flashdata('log_error', '<p id="lerr"  style="background:#EE0000; color:#ffffff;"class="alert alert-message">Oops!  Incorrect Username or Password, Please try again</p>');
	//echo "Not Logged in!";
    return false;
    
   }

 }


public function reg_chapasswd()
{
$e=$this->session->userdata('email');
$pass= md5($this->input->post('opassword'));
$npass= md5($this->input->post('npassword'));
$sql ="select * from tbl_login where password='$pass' and email='$e'";

$query = $this->db->query($sql);

if ($query->num_rows() > 0)
{
$sql1 = "update tbl_login set password='$npass', password_status='1'where email='$e'";
$res = $this->db->query($sql1);
if($res)
{

 $this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success">Password Successfully Changed, Kindly proceed to login</p>');

redirect("/");


}


}else
{
 $this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-danger">Oops! Old Password is wrong, please input the correct Password.</p>');

redirect("welcome/changepwd");


}


}



public function get_county()
{
 
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
 $this->db->select('*');
$this->db->order_by("county_name","asc");
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
$this->db->order_by("constituency_name","asc");
  
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
$this->db->order_by("ward_name","asc");
  $this->db->from('careers_wards');
  
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();
     
 return $query22->result_array();
   
   
}

public function get_incident_types()
{
 
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
 $this->db->select('*');
$this->db->order_by("id","asc");
  $this->db->from('tbl_incident_types');

  
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();
     
 return $query22->result_array();
   
   
}
public function get_issue_types()
{
 
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
$this->db->select('*');
$this->db->order_by("id","asc");
$this->db->from('tbl_issue_type'); 
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();    
 return $query22->result_array();   
}

public function get_statuses()
{
 
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
$this->db->select('*');
$this->db->order_by("id","asc");
$this->db->from('tbl_issue_status'); 
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();    
 return $query22->result_array();   
}

public function get_priority_types()
{
 
 //$sqlvex = "select * from careers_jobs where j_status='active' and j_type='EX'";
$this->db->select('*');
$this->db->order_by("id","asc");
$this->db->from('tbl_priority'); 
 // $queryempd = 
 
 ///$rvex = $this->db->query($sqlvex);
 $vacs= array();
 
 $query22 = $this->db->get();    
 return $query22->result_array();   
}

	
public function get_countybyname($county=string)
{
$emps="select b.constituency_code,b.constituency_name from careers_counties a, careers_constituency b  where a.county_code=b.county_code and  a.county_code='$county' order by b.constituency_name asc";
$queryempd = $this->db->query($emps);

  
  if ($queryempd->num_rows() > 0)
  {
  
  	return $queryempd->result_array();
  }
  
  return array();  

}
public function get_wardbyname($constituency=string)
{
$emps="select b.ward_code,b.ward_name from careers_constituency a, careers_wards b  where a.constituency_code=b.constituency_code and  a.constituency_code='$constituency' order by b.ward_name asc";
$queryempd = $this->db->query($emps);

  
  if ($queryempd->num_rows() > 0)
  {
  
  	return $queryempd->result_array();
  }
  
  return array();  

}

public function get_issuetype($issue_type=string)
{
$emps="select a.id,b.secondary_desc from tbl_issue_type a, tbl_issue_type_secondary b where a.id=b.issue_id and a.id='$issue_type'";


$queryempd = $this->db->query($emps);

  
  if ($queryempd->num_rows() > 0)
  {
  
  	return $queryempd->result_array();
  }
  
  return array();  

}

public function get_pollingcenterbyname($ward=string)
{
$emps="select b.pollingcentercode,b.pollingcentername from careers_wards a, pollingcent b  where a.ward_code=b.wardcode and  b.wardcode='$ward' order by b.pollingcentername asc";
$queryempd = $this->db->query($emps);
  
  if ($queryempd->num_rows() > 0)
  {
    	return $queryempd->result_array();
  }
  return array();  

}

public function reg_distribution()
{
$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'matrix'=>$this->input->post('matrixs'),
			'county'=>$this->input->post('county'),
			'constituency'=>$this->input->post('constituency'),
			'ward'=>$this->input->post('ward'),
			'polling_station'=>$this->input->post('polling_center'),
			'expected_no'=>$this->input->post('expected_no'),
			'arrivedat10'=>$this->input->post('arrivedat10pm'),
			'yettoarrive'=>$this->input->post('yettoarrive'),
			'arrivedat10pm12'=>$this->input->post('arrivedat10pmto12'),
			'arrivedafter12'=>$this->input->post('arrivedafter12am'),
			'comment'=>$this->input->post('comment'),
'raised_by'=>$this->input->post('reported_by'),
'phone'=>$this->input->post('phone'),
			'reported_by'=>$user,

			);
	$res= $this->db->insert('staff_deployment',$data);

if($res)
{

 $this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");

}


}

public function reg_distributions()
{
$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'matrix'=>$this->input->post('matrixsec'),
			'county'=>$this->input->post('countys'),
			'constituency'=>$this->input->post('constituencys'),
			'ward'=>$this->input->post('wards'),
			'polling_station'=>$this->input->post('polling_centers'),
			'expected_no'=>$this->input->post('expected_nos'),
			'arrivedat10'=>$this->input->post('arrivedat10pms'),
			'yettoarrive'=>$this->input->post('yettoarrives'),
			'arrivedat10pm12'=>$this->input->post('arrivedat10pmto12s'),
			'arrivedafter12'=>$this->input->post('arrivedafter12ams'),
			'comment'=>$this->input->post('comments'),
'raised_by'=>$this->input->post('reported_by'),
'phone'=>$this->input->post('phone'),
			'reported_by'=>$user,

			);
	$res= $this->db->insert('staff_deployment',$data);

if($res)
{

 $this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");

}

}
public function reg_threat()
{
$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'incident_type'=>$this->input->post('incident'),
			'county'=>$this->input->post('county'),
			'priority'=>$this->input->post('priority'),
			'constituency'=>$this->input->post('constituency'),
			'ward'=>$this->input->post('ward'),
			'polling_station'=>$this->input->post('polling_center'),
			'comment'=>$this->input->post('comment'),
'raised_by'=>$this->input->post('reported_by'),
'phone'=>$this->input->post('phone'),
			'reported_by'=>$user,
			);
	$res= $this->db->insert('tbl_incident_reporting',$data);

if($res)
{

 $this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/threat");

}

}


public function reg_preelection()
{
$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'strategic_materials'=>$this->input->post('strategic_materials'),
			'strategic_comment'=>$this->input->post('strategic_comment'),
			'nonstrategic_materials'=>$this->input->post('nonstrategic_materials'),
			'nonstrategic_comment'=>$this->input->post('nonstrategic_comment'),
			'ballot_papers'=>$this->input->post('ballot_papers'),
			'ballot_comment'=>$this->input->post('ballot_comment'),
'register'=>$this->input->post('register'),
'register_comment'=>$this->input->post('register_comment'),
'vehicles'=>$this->input->post('vehicles'),
'vehicle_comment'=>$this->input->post('vehicle_comment'),
			'reported_by'=>$user,
			);
	$res= $this->db->insert('tbl_preelection',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");


}
}
public function reg_electionpreparedness()
{
$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'county'=>$this->input->post('county'),
			'constituency'=>$this->input->post('constituency'),
			'strategic_materials'=>$this->input->post('strategic_materials'),
			'strategic_comment'=>$this->input->post('strategic_comment'),
			'nonstrategic_materials'=>$this->input->post('nonstrategic_materials'),
			'nonstrategic_comment'=>$this->input->post('nonstrategic_comment'),
			'ballot_papers'=>$this->input->post('ballot_papers'),
			'ballot_comment'=>$this->input->post('ballot_comment'),
'register'=>$this->input->post('register'),
'register_comment'=>$this->input->post('register_comment'),
'vehicles'=>$this->input->post('vehiclesno'),
'vehicle_comment'=>$this->input->post('vehiclesno_comment'),
'vehicle_inspection'=>$this->input->post('vehiclesinspect'),
'vehicle_inspection_comment'=>$this->input->post('vehiclesinspect_comment'),
			'reported_by'=>$user,
			);
	$res= $this->db->insert('election_preparedness_5th',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");


}
}

public function reg_electionpreparedness7th()
{
$this->db->set('logged_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'county'=>$this->input->post('county'),
			'constituency'=>$this->input->post('constituency'),
			'meal'=>$this->input->post('meal'),
			'meal_comment'=>$this->input->post('meal_comment'),
			'transport'=>$this->input->post('transport'),
			'transport_comment'=>$this->input->post('transport_comment'),
			'officials'=>$this->input->post('officials'),
			'officials_comment'=>$this->input->post('officials_comment'),
'dispatched'=>$this->input->post('dispatched'),
'dispatched_comment'=>$this->input->post('dispatched_comment'),
'arrived'=>$this->input->post('arrived'),
'arrived_comment'=>$this->input->post('arrived_comment'),
'security'=>$this->input->post('security'),
'security_comment'=>$this->input->post('security_comment'),
'fully_charged'=>$this->input->post('fully_charged'),
'fully_charged_comment'=>$this->input->post('fully_charged_comment'),
'raised_by'=>$this->input->post('reported_by'),
'phone'=>$this->input->post('phone'),
			'logged_by'=>$user,
			);
	$res= $this->db->insert('election_preparedness_7th',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");


}
}

public function reg_electionpreparedness8tht()
{
$this->db->set('reported_date', 'NOW()', FALSE);

$tt = $this->input->post('otime');
$o=$this->input->post('onumber');
$t6=0;
$t630=0;
$tg630=0;
if($tt =="6")
{
$t6=$o;
}
else if($tt =="601630")
{
$t630=$o;
}
else if($tt =="630")
{
$tg630=$o;
}



$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'county'=>$this->input->post('countys8th'),
			'constituency'=>$this->input->post('constituencys8th'),
			'opened_in_time'=>$t6,
			'opened_from_6am_to_6_30'=>$t630,
			'opened_after_6_30'=>$tg630,
			//'opened_late'=>$this->input->post('opened_late'),
			'agents_present'=>$this->input->post('agents'),
			'reported_by'=>$user,
			
			);
	$res= $this->db->insert('opening_time',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");


}
}

public function reg_electionpreparedness8thturnout()
{
$this->db->set('logged_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'county'=>$this->input->post('countys8thturn'),
			'constituency'=>$this->input->post('constituencys8thturn'),
			'time_reported'=>$this->input->post('reporting_time'),
			'no_of_voters'=>$this->input->post('no_of_voters'),
			'logged_by'=>$user,
			
			);
	$res= $this->db->insert('voter_turnout',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");


}
}

public function reg_polling_arrive()
{
$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'county'=>$this->input->post('countys8thturna'),
			'constituency'=>$this->input->post('constituencys8thturna'),
			'polling_stations_arrived'=>$this->input->post('polling_station'),
			'polling_station_closed'=>$this->input->post('polling_station_closed'),
			//'polling_station_arrived'=>$this->input->post('reporting_time'),
						'reported_by'=>$user,
			);
	$res= $this->db->insert('arrival_time',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");


}
}

public function reg_polling_arrive_personnel()
{
$this->db->set('logged_date', 'NOW()', FALSE);
$t=$this->input->post('arrival_time');
$pt=$this->input->post('personell_arrival');
$r810=0;
$r1012=0;
$r12=0;

if($t=="810")
{
$r810=$pt;
}
else if ($t=="1012")
{
$r1012=$pt;
}
else if ($t=="12")
{
$r12=$pt;
}

$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'county'=>$this->input->post('countys8thturnapersonell'),
			'constituency'=>$this->input->post('constituencys8thturnapersonell'),
			'8pm_to_10pm'=>$r810,
			'10pm_to_12pm'=>$r1012,
			'after_12am'=>$r12,
			//'polling_station_closed'=>$this->input->post('polling_station_closed'),
			//'polling_station_arrived'=>$this->input->post('reporting_time'),
						'logged_by'=>$user,
			);
	$res= $this->db->insert('tbl_personell_arrival',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");


}
}




public function reg_ict()
{

$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',

			'ticket_number'=>$this->input->post('ticket_no'),
			'county'=>$this->input->post('county'),
			'constituency_code'=>$this->input->post('constituency'),
			'issue_type'=>$this->input->post('issue_type'),
			'issue_type_description'=>$this->input->post('issue_cat_type'),
			'issue_status'=>$this->input->post('issue_status'),
			'reporter_phone'=>$this->input->post('reporter_phone'),
			'priority'=>$this->input->post('priority'),
			'issue_description'=>$this->input->post('comment'),
			'serial_no'=>$this->input->post('serial_no'),
			'reported_from'=>$this->input->post('reported_from'),

			//'polling_station_arrived'=>$this->input->post('reporting_time'),
						'logged_by'=>$user,
			);
$res= $this->db->insert('tbl_ict',$data);

if($res)
{
$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');
redirect("welcome/ict");
}
else{
$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-danger"> Duplicate record.</p>');

redirect("welcome/ict");

}
}


public function reg_incident_internal()
{
$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'priority'=>$this->input->post('priority'),
			'incident_type'=>$this->input->post('incident'),
			'internal_external'=>$this->input->post('reporting_from'),
			'comment'=>$this->input->post('comment'),
			'reported_by'=>$this->input->post('reported_by'),			
			//'polling_station_arrived'=>$this->input->post('reporting_time'),
			'reported_by'=>$user,
			);
	$res= $this->db->insert('incident_internal',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/incident");


}
}

public function reg_ballots()
{
$this->db->set('reported_date', 'NOW()', FALSE);
$user=$this->session->userdata('email');
$data =array(
			//'id'=> '',
			'reporting_time'=>$this->input->post('reporting_time'),
			'no_of_ballots'=>$this->input->post('ballot_no'),
			
'county'=>$this->input->post('county'),	
'constituency'=>$this->input->post('constituency'),		
			//'polling_station_arrived'=>$this->input->post('reporting_time'),
			'submited_by'=>$user,
			);
	$res= $this->db->insert('tbl_ballots_reconciliation',$data);

if($res)
{

$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Data successfully sent.</p>');

redirect("welcome/distribution");


}
}

public function updt()
{

$p=md5("Elections2017!");
$sql1 = "update tbl_countY_ict set password='$p'";
$res = $this->db->query($sql1);
if($res)
{

echo "Updated Password .</br>";

//PMuigai@IEBC.OR.KE

}

}

public function get_const()
{
$sq="SELECT b.constituency_name, sum(opened_in_time+opened_from_6am_to_6_30) as opened FROM `opening_time` a, careers_constituency b WHERE a.county=b.county_code and a.constituency=b.constituency_code  group by b.constituency_name";
$query = $this->db->query($sq);

foreach ($query->result_array() as $row)
{  
$rows[]=array("c"=>array("0"=>array("v"=>$row['constituency_name'],"f"=>NULL),"1"=>array("v"=>(int)$row['opened'],"f" =>NULL)));
   //echo $row['body'];
}
echo $format = '{
"cols":
[
{"id":"","label":"Constituency","pattern":"","type":"string"},
{"id":"","label":"Number of Polling Station","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';

/* $vacs= array(); 
$query = $this->db->get();
   
 return $query->result_array();
*/
}

public function get_constnot()
{
$sq="SELECT b.constituency_name, GREATEST(b.no_of_polling_stations-sum(opened_in_time+opened_from_6am_to_6_30),0) as yet_to_open FROM `opening_time` a, careers_constituency b WHERE a.county=b.county_code and a.constituency=b.constituency_code  group by b.constituency_name, b.no_of_polling_stations";
$query = $this->db->query($sq);

foreach ($query->result_array() as $row)
{
  
 $rows[]=array(
"c"=>array("0"=>array("v"=>$row['constituency_name'],
"f"=>NULL),
"1"=>array("v"=>(int)$row['yet_to_open'],"f" =>NULL)
));
   //echo $row['body'];
}
echo $format = '{
"cols":
[
{"id":"","label":"Constituency","pattern":"","type":"string"},
{"id":"","label":"Number of Polling Station","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';

/* $vacs= array(); 
 $query = $this->db->get();     
 return $query->result_array();
*/
}


public function get_voterturnout()
{
$sq="SELECT b.constituency_name, b.voters, (sum(no_of_voters)*100)/b.voters as percentage FROM `voter_turnout` a, careers_constituency b where a.constituency=b.constituency_code and a.no_of_voters>0 group by b.constituency_name, b.voters ";
$query = $this->db->query($sq);

foreach ($query->result_array() as $row)
{
  
 $rows[]=array(
"c"=>array("0"=>array("v"=>$row['constituency_name'],
"f"=>NULL),
"1"=>array("v"=>(int)$row['percentage'],"f" =>NULL)
));
   //echo $row['body'];
}
echo $format = '{
"cols":
[
{"id":"","label":"Constituency","pattern":"","type":"string"},
{"id":"","label":"Percentage","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';

/* $vacs= array(); 
 $query = $this->db->get();     
 return $query->result_array();
*/
}


public function get_per_time()
{

$sq="SELECT sum(opened_in_time) as opened_in_time, sum(opened_from_6am_to_6_30) as opened_from_6am_to_6_30, sum(opened_after_6_30) as opened_after_6_30 FROM `opening_time` ";

$query = $this->db->query($sq);

foreach ($query->result_array() as $row)
{  

$rows[]=array(
"c"=>array("0"=>array("v"=>"Opened in Time",
"f"=>NULL),
"1"=>array("v"=>(int)$row['opened_in_time'],"f" =>NULL),

));
   //echo $row['body'];
}
echo $format = '{
"cols":
[
{"id":"","label":"Time","pattern":"","type":"string"},
{"id":"","label":"Hello","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';
/* $vacs= array();
 
 $query = $this->db->get();
     
 return $query->result_array();
*/
}

function getdata()
{

$sq="SELECT sum(opened_in_time) as opened_in_time, sum(opened_from_6am_to_6_30) as opened_from_6am_to_6_30, sum(opened_after_6_30) as opened_after_6_30 FROM `opening_time` ";

$query = $this->db->query($sq);

if ($query->num_rows() > 0)
{
 return $query->result_array();
}

}
function getvoterturndata()
{

$sq="SELECT b.constituency_name, sum(no_of_voters) as no_of_voters, b.voters FROM `voter_turnout` a, careers_constituency b where a.constituency=b.constituency_code group by b.constituency_name, b.voters ";

$query = $this->db->query($sq);

if ($query->num_rows() > 0)
{
 return $query->result_array();
}

}

public function getvoterturndata1()
{

$sq="SELECT b.constituency_name, sum(no_of_voters) as no_of_voters, b.voters FROM `voter_turnout` a, careers_constituency b where a.constituency=b.constituency_code group by b.constituency_name, b.voters";
$query = $this->db->query($sq);

foreach ($query->result_array() as $row)
{
  
 $rows[]=array(
"c"=>array("0"=>array("v"=>$row['constituency_name'],"f"=>NULL),
"1"=>array("v"=>(int)$row['no_of_voters'],"f" =>NULL)
));
   //echo $row['body'];
}
echo $format = '{
"cols":
[
{"id":"","label":"Constituency","pattern":"","type":"string"},
{"id":"","label":"Number Voters","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';

/* $vacs= array(); 
$query = $this->db->get();
   
 return $query->result_array();
*/
}

public function getarrivaltime()
{

$sq="SELECT b.constituency_name, sum(8pm_to_10pm + 10pm_to_12pm + after_12am) as arrived_personel FROM tbl_personell_arrival a, careers_constituency b where a.constituency=b.constituency_code group by b.constituency_name";
$query = $this->db->query($sq);


 $responce->cols[] = array( 
            "id" => "", 
            "label" => "Constituency Name", 
            "pattern" => "", 
            "type" => "string" 
        ); 
        $responce->cols[] = array( 
            "id" => "", 
            "label" => "Arrived Personel", 
            "pattern" => "", 
            "type" => "number" 
        ); 

foreach ($query->result_array() as $row)
{
  
 	$responce->rows[]["c"] = array( 
                array( 
                    "v" => "$row->constituency_name", 
                    "f" => null 
                ) , 
                array( 
                    "v" => (int)$row->arrived_personel, 
                    "f" => null 
                ) 
            ); 

/*$rows[]=array(
"c"=>array("0"=>array("v"=>$row['constituency_name'],"f"=>NULL),
"1"=>array("v"=>(int)$row['arrived_personel'],"f" =>NULL)
));
*/
   //echo $row['body'];
}

/*echo $format = '{
"cols":
[
{"id":"","label":"Constituency","pattern":"","type":"string"},
{"id":"","label":"Number of Personnel Arrived","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';

/* $vacs= array(); 
$query = $this->db->get();
   
 return $query->result_array();
*/
}
public function sendemail()
{
//$msg = "First line of text\nSecond line of text";
// use wordwrap() if lines are longer than 70 characters
// send email
// mail("omollo.ateng@gmail.com","My subject",$msg);  
// 79 id the last to send email

$query = $this->db->query("select * from tbl_login where level_id='1' and email='omollo.ateng@gmail.com'");

foreach ($query->result_array() as $row)
{
$p="Elections2017";
$sysu="http://www.iebc.or.ke/reporting";
$sname=$this->session->userdata('username');
$this->load->helper('string');
$verification_code=random_string('numeric', 16);
		//$verification_code="jack";
$link = '<p><h3>NECC  Portal</h3><hr></p><p>Dear <b>'.$row['fname'].'</b>, </p> <p>You have been successfully created <b>'.
'</b></p> <p>Below are your credentials: <p>Link: '.$sysu.'</p><p>Email:<b>'.$row['email'].'</b><p>Password: <b>'.$p.'</b></p><br><b>Best Regards. </b></p>';

$this->email->set_newline("\r\n");
$this->email->from('National Elections Cordination System');
$this->email->to($row['email']);
$this->email->subject('NECC TRACKING, ANALYSIS AND REPORTING SYSTEM');
$this->email->message($link);

if($this->email->send())
{
echo "Email has been sent for id: ". $row['lg_id']."<br>";
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
}
public function generate_password( $length = 8 ) {
$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
$password = substr( str_shuffle( $chars ), 0, $length );
return $password;
}

public function process_forgot()
{

$email= $this->input->post('email');

$sql ="select * from tbl_login where email='$email'";

$query = $this->db->query($sql);

if ($query->num_rows() > 0)
{
//echo "Should reset the account.";

$p=$this->generate_password();

$hp=md5($p);
$sql = "update tbl_login set password='$hp', password_status='0' where email='$email'";

$query = $this->db->query($sql);

$this->sendemailp($email,$p);




echo $p;
}

else{
$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-danger"> Oops! the email entered is incorrect, please enter the email you had registered with.</p>');

redirect("welcome/fpass");
}
}

public function sendemailp($email,$pass)
{

$sname=$this->session->userdata('username');
$this->load->helper('string');
$verification_code=random_string('numeric', 16);
		//$verification_code="jack";
$link = '<p><h3>Incident Management System</h3><hr></p><p>Dear <b>'.$email.'</b>, </p> <p>Your password has been reset successfully<b>'.
'</b></p> <p>Password: <b>'.$pass.'</b></p><br><b>Best Regards. </b></p>';

$this->email->set_newline("\r\n");
$this->email->from('Incident Management System');
$this->email->to($email);
$this->email->subject('Incident Management System');
$this->email->message($link);

if($this->email->send())
{
$this->session->set_flashdata('log_error', '<p id="lerr" class="alert alert-success"> Your password reset was successful, kindly check your email for the new password.</p>');

redirect("welcome");

//echo "Email has been sent for id: ". $row['lg_id']."<br>";
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
}
?>
