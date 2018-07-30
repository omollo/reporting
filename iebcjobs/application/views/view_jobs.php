<head>

    
<script type="text/javascript">
   
$(document).ready(function() {

 $('#doubleerr').delay(5000).fadeOut();
});
</script>
    
 </head>


<div id="topcl"> </div>
<div class="container">

    <div class="span12">
<img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">IEBC - External Job Application.

     <?php echo $jerror;?>

<div class="container-fluid">
    <!--
<div id="myCarousel" class="carousel slide">
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>
  <!-- Carousel items 
  <div class="carousel-inner">
    <div class="active item"><img src="<?php echo base_url()?>images/v1.jpg"/></div>
    <div class="item"><img src="<?php echo base_url()?>images/v2.jpg"/></div>
    <div class="item"><img src="<?php echo base_url()?>images/v4.jpg"/></div>
  </div>
  <!-- Carousel nav 
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>
-->
<hr>	
	<p>
            <h2>Welcome to IEBC - Online Recruitment Portal</h2>

         
            </p>
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


	<?php if ($vacancy): foreach ($vacancy as $vac): ?>
 	
	<input type="hidden" name="jobid" value="<?php echo $vac['job_id']?>"/>
	<h5><b><i><a href="<?php echo site_url("apply/apply_job/" . $vac['vacancy_no']); ?>" 
	 > <?php  print_r($vac['j_title']);?></a></b></i></u></h5> 
	
		
Posted: <b><font color="green"><?php echo $vac['j_created'];?></font></b>
&nbsp;&nbsp;&nbsp;

Deadline: <b><font color="red"><?php echo $vac['j_expiry'];?></font></b>

<a style="float:center;"href="<?php echo site_url("apply/apply_job/" . $vac['vacancy_no']); ?>" > 
 
          <div class="btn btn-success">   
          View Job
                       </div>

		
	<hr>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> We do not have Available Vacancies at the moment. Kindly keep on visiting our <a href="https://www.iebc.or.ke">Website </a>for more updates
</div>
 
<?php endif; ?>
</form>
</table>

</div>
</div>
</div>
