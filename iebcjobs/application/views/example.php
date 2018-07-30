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
	<div>
<center>
<h1>Welcome Web Admininistrator </h1>
<hr>
	

		
		<a href='<?php echo site_url('examples/vacancy_management')?>' class="button"> Vacancies </a> 
		<a href="<?php echo site_url('login/logout')?>" class="button"> Logout </a> 
		<hr>
	<center></div>
	<div style='height:20px;'></div>  
    <div>
		<?php echo $output; ?>
    </div>
</body>
</html>
