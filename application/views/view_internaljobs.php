<div id="topcl"> </div>
  <div class="container">	
 <form action="<?php echo base_url()?>index.php/apply/apply_internaljob" method="post">
<a href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">IEBC - Internal Job Application.

</a>
<hr>

<hr>

<p class="alert alert-danger">
<b>Kindly read the following simple instructions CAREFULLY: </b><br>
1. Identify the type of Job you wish to apply for, by Scrolling down the list
<br>
2. Click on View Job button to read the requirements and qualification details.
<br>
3. Scroll down and click Login to Apply button.
<br>
4. While on the login screen, click on Register Now link and fill all the details, this is to create your Account details for purposes of Login.
<br>
5. Follow the process and Login, if successfull, it will direct you to user dashboard.
<br>
6. Add all the Educational, Proffessional, Employment History, Integrity, etc data 
<br>
7. Go to the Complete Menu, and preview your Details, then click on Submit your Application button
</p>

	<div class="container">
<hr>
	
<?php if ($vacancy): foreach ($vacancy as $vac): ?>
 <input type="hidden" name="jobid" value="<?php echo $vac['job_id']?>">
	<h5><b><i>

 <a href="<?php echo site_url("apply/apply_internaljob/" . $vac['vacancy_no']); ?>" >
     <?php  print_r($vac['j_title']);?></a></b></i></u></h5>
	
		<p>
Posted: <b><font color="green"><?php echo $vac['j_created'];?></font></b>
&nbsp;&nbsp;&nbsp;


Deadline: <b><font color="red"><?php echo $vac['j_expiry'];?></font></b>

<a style="float:center;"href="<?php echo site_url("apply/apply_internaljob/" . $vac['vacancy_no']); ?>" > 
  <p>
      <div class="btn"> 
          
          Apply Now 
      </div>
</p>  

</a>

</p>
<hr>	
	
 <?php endforeach; else: ?>
 
  <div class="alert alert-message">We do not have Available Vacancies at the moment. Kindly keep on visiting our <a href="https://www.iebc.or..ke">Website </a>for more updates
 </div>
<?php endif; ?>
</form>
</table>
</div>

</div>
