<!DOCTYPE>
<head>
<script type="text/javascript">
function validate()
{
 var numbers = /^[0-9]+$/;  
var pf = document.getElementById('pfno').value;
var pwd = document.getElementById('pwd').value;

if(document.getElementById('pfno').value =="")
{
alert("Please enter your PF Number");
document.getElementById('pfno').focus;
return false;
}
else if (document.getElementById('pwd').value =="")
{
alert("Please enter your Password");
document.getElementById('pwd').focus;
return false;
}else
{
return true;
}
}
</script>
<script type="text/javascript">
$(document).ready(function() {
//$("#lbutton").attr("disabled",true);
$("#lpfno").keyup(function() {
var regex="/^[0-9]+$";
    var $submit =  $("#lbutton");
    if(this.value.length == 6) {
        $submit.attr("disabled", false);
    } else 
	{
        $submit.attr("disabled", true);
    }
});
});
</script>

<script type="text/javascript">
   
$(document).ready(function() {

 $('#lerr').delay(5000).fadeOut();

});

    
    </script>
    
   
</head>

<a href="#"><img src="<?php echo base_url()?>images/postbank.png" height="100px" width="100px">
Careers Applications</a>

 <hr>

 <div class="container-fluid">
<center>
<h3>
 Login
 <?php echo $lerror ?>
 </h3>
<form action="<?php echo base_url()?>index.php/login" method="post" onsubmit="return validate();">


    
    
    <table>
 
 <tr>
 
 <td>ID/Passport Number: </td><td><input type="text" name="idno" id="idno"size="30px" required></td>
 
 </tr>
 
 <tr>
 <td>
<input type="hidden" name="jobid" value="<?php echo $jid;?>">
</td>
</tr>
  <tr>
 <td>Password: </td><td><input type="password" name="password" id="lpwd" size="30px" required></td>
 </TR>
 
  <tr>
 <td> </td><td><input type="submit" class="btn btn-primary btn-large" id="lbutton" value="Login"></td>
  </tr>
  <tr>
      
  </tr>
  <tr>
      <td></td>
<td>
<a href="<?php echo site_url('login/vforgot')?>" ><b> Forgot Password? </b></a>
</td>
</tr>
  <tr>
  <td>
</td><td> New Member?  <a href="<?php echo site_url('login/reg')?>" ><b> Sign Up</b></a></td>
</tr>

<!--//hqmkt0809 -->
</table>
 
    </div>
 
 </form>
</center>
 
