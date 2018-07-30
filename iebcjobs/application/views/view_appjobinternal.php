<div id="topcl"> </div>
<div class="container">
    <div class="span12">
 
<form action="<?php echo base_url()?>index.php/welcome/vinternal" method="post">
<a href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">IEBC iRecruitment. - Internal Job Application 

</a>
<?php if (isset($appjob)): foreach ($appjob as $job): ?>

<p>  <h4><?php echo $job['j_title']; ?></h4>
 </p>
 <hr>
 
 <p>
  <b><h5>Description:</h5></b>
  <hr>
  </p>
  <p> <?php echo $job['j_description']; ?>
</p>

<p>
  <b><h5>Qualifications:</h5></b>
  <hr>
  </p>
  <p> <?php echo $job['j_qualification']; ?> </p>
<p>
Posted: <b><font color="green"><?php echo $job['j_created'];?></font></b>

Deadline: <b><font color="red"><?php echo $job['j_expiry'];?></font></b>
</p>
<input type="hidden" name="jid" value="<?php echo $job['job_id'];?>">
<input type="hidden" name="vac_no" value="<?php echo $job['vacancy_no'];?>">
<input type="hidden" name="j_title" value="<?php echo $job['j_title'];?>">


<input type="button" class="btn btn-success btn-large" value=" Go Back" onclick="goBack()">
<input type="submit" value="Login to Apply " class="btn btn-success btn-large">
<?php endforeach; else: ?>
    <font color="red"> <h3>No Jobs Selected</h3></font>
<?php endif; ?>

</form>

  </div>       </div> 
