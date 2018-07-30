<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo $file; ?>" />
<?php endforeach; ?>
<?php foreach($js_files as $file): ?>
	<script src="<?php echo $file; ?>"></script>
<?php endforeach; ?>
<style type='text/css'>
body
{
	font-family: Arial;
	font-size: 14px;
}
a {
    color: blue;
    text-decoration: none;
    font-size: 14px;
}
a:hover
{
	text-decoration: underline;
}
.button { width: auto; background: #2ba6cb; border: 1px solid #1e728c; -webkit-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset; -moz-box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset; box-shadow: 0 1px 0 rgba(255, 255, 255, 0.5) inset; color: white; cursor: pointer; display: inline-block; font-family: inherit; font-size: 14px; font-weight: bold; line-height: 1; margin: 0; padding: 10px 20px 11px; position: relative; text-align: center; text-decoration: none; -webkit-transition: background-color 0.15s ease-in-out; -moz-transition: background-color 0.15s ease-in-out; -o-transition: background-color 0.15s ease-in-out; transition: background-color 0.15s ease-in-out; /* Hovers */ /* Sizes */ /* Colors */ /* Radii */ /* Layout */ /* Disabled ---------- */ }
.button:hover, .button:focus { color: white; background-color: red; }

</style>
</head>
<body>
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
	 
    <div class="container-fluid">
		<?php echo $output; ?>
    </div>
 </div>
</body>
</html>
