
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



<span class="loginerror"> <?php if ($this->session->flashdata('error') !== FALSE) { echo $this->session->flashdata('error'); } ?></span>

 <form action="<?php echo base_url()?>index.php/addcourse/shortlist" method="post" />

 
<table>
<tr><td>Vacancy Number </td> 

<td> <input type="text" name="vacnumber" placeholder="Enter the Vacancy Number here..." ></td>
</tr>
<tr>
<td>Applicants with Scores Greater than: </td><td><input type="number" name="score" placeholder="Enter the least percentage here...">% <td>
</tr>
<tr>
<td></td>
<td><input type="submit" class="btn btn-success"value="Short List"></td>
</tr>

</table>
<br>
<table class="table table-striped">


<hr>
<h3>Shortlisted Applicants</h3>
<th>User ID</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Email Address</th>
<th>Vacancy Number</th>
<th>Job Title</th>
<th>Score(%)</th>
<th>Experience(Years)</th>
<th>Age</th>
<?php if (isset($shortlists)): foreach ($shortlists as $sh): ?>
 <tr>

<td><?php echo $sh['uid']; ?> </td> 
<td> <?php echo $sh['fname']; ?></td> <td> <?php echo $sh['lname']; ?></td>
<td> <?php echo $sh['email']; ?></td> 
<td> <?php echo $sh['vacancy_no']; ?></td> 
<td> <?php echo $sh['j_title']; ?></td> 
<td> <?php echo $sh['score']; ?></td> 
<td> <?php echo $sh['exp_year']; ?></td> 
<td> <?php echo $sh['age']; ?></td> 
</tr>

<?php endforeach; else: ?>
    <font color="red"> <h5>No results found...</h5></font>
<?php endif; ?>
</table>
<a href="<?php echo site_url('addcourse/emails_view')?>" class="btn btn-danger btn-large">Send Email Notification </a>


</form>
<div>
</div>
</div>
</div>
