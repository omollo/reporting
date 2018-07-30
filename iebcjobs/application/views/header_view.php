
<!DOCTYPE html>
<html lang="en">
  <head>
    
    <meta name="author" content="">
   
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()?>/css/bootstrap2.css" rel="stylesheet">
 <script   type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js">
 </script>
    <script   type="text/javascript" src="<?php echo base_url()?>js/jquery.js">
    </script>
    
    <script   type="text/javascript" src="<?php echo base_url()?>js/bootstrap.min.js">
    </script>

<style>
.ff{
background-color:green;
color:#fff;
padding:20px;

}


</style>
<style>
#topcl
{
background-color:#000;
height:30px;
}
</style>
     
 
  </head>

  
   <div class="container-fluid">
  <div class="span12">
<a style="top:14px;position:relative;" href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">IEBC -  iRecruitment Portal.
</a>
</div><h3 style="background-color:#f2f2f2; height:100px;padding:5px;border-radius:10px;"> <small> <b>Welcome <?php echo $this->session->userdata('userid')?></b> <a href="<?php echo site_url('login/logout')?>" class="btn btn-danger" style="float:right">logout</a></small></h3>
<hr>
<center>
<a href="https://www.iebc.or.ke/" class="btn btn-primary btn-success" >Our Website</a>
<a href="<?php echo site_url('welcome/show_education')?>" class="btn btn-primary btn-success">My Education Qualifications</a>
<a href="<?php echo site_url('welcome/show_proffessional')?>" class="btn btn-primary btn-success">My Proffesion Qualifications</a>
<a href="<?php echo site_url('welcome/show_employment')?>" class="btn btn-primary btn-success">My Employment History</a>
<a href="<?php echo site_url('welcome/show_membership')?>" class="btn btn-primary btn-success">Membership</a>
<a href="<?php echo site_url('welcome/show_job')?>" class="btn btn-primary btn-success" >Complete</a>
   <hr> 
 </center>


 

