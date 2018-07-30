
<div id="topcl"> </div>
<div class="container">

    <div class="span12">
<a href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">Administrator
</a>
<hr>	
 <span class="loginerror"> <?php if ($this->session->flashdata('error') !== FALSE) { echo $this->session->flashdata('error'); } ?></span>
	
<center>
<h1>Welcome Super Admin! <small><a href="<?php echo site_url('login/logout')?>" class="btn btn-danger"> Logout </a> </small></h1>
<hr>
		<a href="<?php echo site_url('symadm/member_management')?>" class="btn btn-success"> Users </a> 
			
                <a href="<?php echo site_url('symadm/course_management')?>" class="btn btn-success"> Courses</a> 
	
                <a href="<?php echo site_url('symadm/experience_management')?>"  class="btn btn-success"> Experience</a> 
	
                <a href="<?php echo site_url('symadm/application_management')?>"  class="btn btn-success"> Applicants </a> 
		<a href="<?php echo site_url('symadm/vacancy_management')?>"   class="btn btn-success"> Vacancies </a> 
		
		<a href="<?php echo site_url('symadm/cluster_management')?>"   class="btn btn-success">Weight Cluster</a> 
		<a href="<?php echo site_url('addcourse/search_vac')?>"   class="btn btn-success">Generate Scores</a> 
		 <a href="<?php echo site_url('addcourse/shortlist_view')?>"   class="btn btn-success">Short Listings</a> 
		<a href="<?php echo site_url('addcourse/longlist_view')?>"   class="btn btn-success">Long Listings</a> 
		
		<hr>
	<center></div>


<hr>
<span class="loginerror"> <?php if ($this->session->flashdata('error') !== FALSE) { echo $this->session->flashdata('error'); } ?></span>

 <form action="<?php echo base_url()?>index.php/addcourse/getapplist" method="post" />

 
<table>
<tr><td>Vacancy Number </td>

<td> <input type="text" name="vacnumber" value="<?php echo $vac?>" placeholder="Enter the Vacancy Number here..." ></td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-success"value="Get Vacancy"></td>
</tr>
</form>
<form action="<?php echo base_url()?>index.php/addcourse/generate" method="post">
</table>
<br>
<table class="table">
<?php 
if(isset($applicants))
{
?>
<hr>
<h3>Applicants</h3>
<th>User ID</th>
<th>Vacancy Number</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Qualification Codes</th>
<?php if (isset($applicants)): foreach ($applicants as $apps): ?>
 <tr>

<td><?php echo $apps['uid']; ?> </td> <td> <?php echo $apps['vacancy_no']; ?></td> 
<td> <?php echo $apps['fname']; ?></td> <td> <?php echo $apps['mname']; ?></td>
<td> <?php echo $apps['qualification_code']; ?></td> 

</tr>

<?php endforeach; else: ?>
    <font color="red"> <h5>No results found...</h5></font>
<?php endif; ?>
</table>
<input type="submit" class="btn btn-success btn-large" value="Generate Scores">



<?php 
}else
{
?>
 <font color="red"> <h5>No results found...</h5></font>
<?php
}
?>
</form>
<div>
</div>
</div>
</div>
