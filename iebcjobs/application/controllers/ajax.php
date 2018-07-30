<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends CI_Controller {

public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Users');
		//$this->load->model('user_model');
		$this->load->library('session');
		$this->load->library('calendar');
		$this->load->helper('form');
	}
public function index()
{

}
public function username_taken($cardno)
{

$cardno = trim($_POST['cardno']);
// if the username exists return a 1 indicating true
if ($this->Users->username_exists($cardno)) 
{
echo '1';
}
else
{
echo '0';
}
}
public function amount_check()
{
$amount = trim($_POST['amount']);
// if the username exists return a 1 indicating true
if ($this->Users->amount_max($amount)) {
echo '1';
}
}
public  function autosuggest()
{
// escapes single and double quotes
$str = addslashes($_POST['str']);
$activities_qry = $this->Users->find__activities($str);
// echo a list where each li has a set_activity function bound to its onclick() event
echo '<ul>';
foreach ($activities_qry->result() as $activity) {
echo '<li onclick="set_activity(\''.addslashes($activity->activity_name).'\'';
echo ', '.$activity->activity_id.');">'.$activity->activity_name.'</li>';
}
echo '</ul>';
}
public function get_activity_html()
{

$this->load->library('table');
$requested_activity_id = $_POST['master_activity_id'];
$requested_activity_qry =
$this->Users->get_requested_activity($requested_activity_id);
// code leveraged from /controllers/activity.php manage_class_listing() method
// generate HTML table from query results
$tmpl = array (
'table_open' => '<table>',
'heading_row_start' => '<tr class="table_header_add">',
'row_start' => '<tr class="odd_row_add">'
);
$this->table->set_template($tmpl);
$this->table->set_caption('&nbsp;Search Results');
$this->table->set_empty("&nbsp;");
$this->table->set_heading('<div class="search_r"><span class="date_column">Activity Date</span>',
'<span class="activity_name_column">Activity Name</span>',
'<span class="address_column">Activity Description</span></div>');
$table_row = array();
foreach ($requested_activity_qry->result() as $activity)
{
$m_id = $activity->activity_id;
$table_row = NULL;
$table_row[] = ''.
'<div class="search_r"><form action="" name="form_'.$m_id.'" method="post">'.
'<input type="hidden" name="master_activity_id" value="'.$m_id.'"/> '.
'<input type="text" name="activity_date" size="12" /> '.
'<input type="hidden" name="action" value="save" /> '.
'</form>'.
'<span class="help-text">format: MM-DD-YYYY</span><br/>'.
'<a href="" onclick="document.forms[\'form_'.$m_id.'\'].submit();'.
'return false;">save</a></div>';
$table_row[] = '<input type="text" value="'.$activity->activity_name.
'" id="class_activity" onkeyup="autosuggest(this.value);"'.
'class="autosuggest_input" />'.
'<div class="autosuggest" id="autosuggest_list"></div>';
$table_row[] = htmlspecialchars($activity->activity_desc);
//$table_row[] = htmlspecialchars($activity->city);
//$table_row[] = htmlspecialchars($activity->details);
$this->table->add_row($table_row);
}
$requested_activities_table = $this->table->generate();

echo $requested_activities_table;
}

public function test()
{
//$de= $this->Users->get_member_details();
//$memberid=$this->input->input('dep_selected');
//echo "hi";
 print_r($this->input->post('dep_selected'), true);
/*
$result=$this->Users->get_member_name($mid);
foreach($result as $r)
{
    echo print_r($r);
}
//echo print_r($result);
*/
}


	}
	?>
