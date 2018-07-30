<div id="topcl"> </div>
<div class="container">

    <div class="span12">
<a href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">IEBC - External Job Application.
</a>
<hr>	


	<h2>Thank you</h2>
	<hr>
	<p>
<font color="green">
   <b>Thank you for registering with IEBC Online Recruitment Portal</b>
   <p>
   <?php
   $jt=$this->session->userdata('job_type');
   if($jt=='internal')
   {
?>
   Click here to <a href="<?php echo site_url('apply/internaljobs')?>">proceed ></a>;
   
  <?php
 }
   else if($jt=='external')
   {
?>
    Click here to <a href="<?php echo site_url('apply')?>">Login</a>;
  
  <?php 
   }
   
   ?>
  
   </p>
   
   </p>
   </font>
 </div>
 

   
    </div>
