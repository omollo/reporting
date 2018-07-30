<html>
<head>
    
    

    
  <script type="text/javascript">
   
$(document).ready(function() {

 $('#perror').delay(5000).fadeOut();

});

    
    </script> 
    
    
    

<style>
#errors{
color:red;


}



</style>



</head>

<div class="container-fluid">
    
<a href="#"><img src="<?php echo base_url()?>images/postbank.png" height="100px" width="100px">Postbank iRecruitment. - Reset Password 

</a>
<hr>
<center>
<form action="<?php echo base_url()?>index.php/resetpwd/resetingpwd" method="post">
<div id="err"><?php echo $reset_msg;?></div>
<div id=""><?php echo validation_errors(); ?> </div>
<table>
    <tr>
        <h4> Change Your Password</h4>
        
    </tr>
<tr>
<td>* Old Password:</td><td><input type="password" name="oldpwd" required></td>
</tr>
<tr>
<td>* New Password:</td><td><input type="password" name="newpwd" required></td>
</tr>
<tr>
<td>* Confirm New Password:</td><td><input type="password" name="cnewpwd" required></td>
</tr>
<tr>
<td></td><td><input type="submit" class="btn btn-primary" value="Change Password" required></td>
</tr>

</table>
</div>
</center>
</html>
