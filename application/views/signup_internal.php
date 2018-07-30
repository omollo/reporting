<!DOCTYPE html
     PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
     "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<head>
<style>
#errors{
color:red;


}


</style>



<script type="text/javascript">
    
     $(document).ready(function(){
     $('.datepicker').datepicker({
     viewMode: 'years',
         format: 'yyyy-mm-dd'
								});
					});
    
    
</script>


<script>
$(document).ready(function(){
    $("[name='county']").change(function(e) {
//alert('hey');
       // $('#dropdown2').load('<?php echo base_url()?>index.php/welcome/getcountybyid'+this.value);
    });
});
</script>

<script type="text/javascript">
$(document).ready(function(){
$("[name='county']").change(function(){

/*
  $.ajax({
     type : 'POST',
     data : 'source_id='+ $(this).val(),
     url : '<?php echo base_url()?>index.php/welcome/getcountybyid',
     success : function(data){
                 $('#constituency').val(data);
     }
*/
 });
});

    
    
</script>
<script type="text/javascript">
function validate()
{
 var numbers = /^[0-9]+$/;  
var pf = document.getElementById('pfno').value;
var pwd = document.getElementById('pwd').value;

if(document.getElementById('pfno').value =="")
{
alert("Please enter your PF Number");
pf.focus;
return false;
}

else if(!document.getElementById('pfno').length==6)
{
alert("Your PF Number must be 6 Characters");
pf.focus;
return false;
}
else if(document.getElementById('pwd').value =="")
{
alert("Please enter your password");
document.getElementById('pwd').focus;
return false;
}
else if(document.getElementById('pwd').value != document.getElementById('cpwd').value)
{
alert("Your passwords do not MATCH, Kindly try again");
document.getElementById('pwd').focus;
return false;

}
else
{

}
}


</script>
<style>
    span{
        color:red;
        font-size: 20px;
        font-weight: bold;
    }
    </style>

</head>
<body>

<div id="topcl"> </div>
<div class="container">

    <div class="span12">
<a href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">IEBC - Internal Job Application.
</a>
 <hr>
 

 <form action ="<?php echo base_url()?>index.php/signup/sign_validate" method="post" onsubmit="return validate()">




<div id="errors"><font weight="bold"><?php echo validation_errors(); ?></font> </div>
<center>
<table>
<h2>Online Application Portal - Registration</h2>
<span class="reg">* </span> Required Fields
<br><br>
    
<tr>
<td><span class="reg">* </span>ID/Passport Number:</td> <td><input type="text" name="idno"  id="idno" size="70px" autofocus="autofocus"  value="<?php echo set_value('idno')?>" required ></td>
</tr>

<tr>
<td><span class="reg">* </span>Password: </td> <td><input type="password" name="password"  id="pwd"size="70px" required ></td>

</tr>

<tr>
<td><span class="reg">* </span>Confirm Password</td> <td><input type="password" name="cpassword" id="cpwd" size="70px" required ></td>
</tr>

<form name='myform' method='post' action='careers_registerck.php' id='myform' onSubmit='return validate(this)'><input type='hidden' name='todo' value='post' /><tr>
    <td colspan='2' align='center'><strong>Personal Details</strong></td>
    
                <tr>
                <td align='right'><span class="reg">* </span> Title:</td>
                <td>
                	<select name='title' id='title'>
                    <option value='0'>Select a title</option>
                    	<option value='mr'>Mr</option>
				<option value='ms'>Ms</option>
         				<option value='mrs'>Mrs</option>
         				<option value='miss'>Miss</option>  
                    </select></td>
                    </tr>
                    <tr>
           	  		<td align='right'><span class="reg">* </span> Gender:</td>
                    <td>Female<input type='radio' name='sex' id='sex' value='female'/>Male <input type='radio' name='sex' id='sex' value='male'  required/></td>
           </tr>


<!--<tr>
                    	<td align='right'><span class="reg">* </span> KRA Pin:</td>
                    	<td><input type='text' name='kra_pin' id='kra_pin' size='40'  value="<?php echo set_value('kra_pin')?>"  required/></td>
</tr>
-->


                	<tr>
                		<td align='right'><span class="reg">* </span>Surname:</td>
                    	<td><input type='text' name='surname' id='surname' size='40'  value="<?php echo set_value('surname')?>"required /></td>
                    </tr>
                    <tr>
                    	<td align='right'><span class="reg"><span class="reg">* </span> </span>First Name:</td>
                    	<td><input type='text' name='firstname' id='firstname' value="<?php echo set_value('firstname')?>" size='40' required/></td></tr>
                    <tr>
                    	<td align='right'>Middle Name:</td>
                    	<td><input type='text' name='middlename' id='middlename'  value="<?php echo set_value ('middlename')?>"size='40' /></td>
</tr> 

<tr>
                    <td align='right'><span class="reg">* </span> Phone  Number:</td>
                    <td><input type='text' name='phone' id='phone'  value="<?php echo set_value('phone')?>" size='40' required /></td>
                  </tr>  


<tr>
                    <td align='right'> Alternate Phone  Number:</td>
                    <td><input type='text' name='phone2' id='phone2'  value="<?php echo set_value('phone2')?>"size='40' /></td>
                  </tr>                           
                         
                  	<tr>
                  		<td align='right'><span class="reg">* </span> Email:</td>
                    	<td><input type='text' name='email' id='email'  value="<?php echo set_value('email')?>" size='40'  required/></td>
                    </tr>
                            <!-- <tr>
                    <td align='right'><span class="reg">* </span> Date of Birth:</td> <td><input type="text"  name="dob"  value="<?php echo set_value('dob')?>" class="datepicker" data-date-format="yyyy-mm-dd"readonly="readonly"required></td>
			
</tr>
-->

                    	<td align='right'><span class="reg">* </span> Marital Status:</td>
                    	<td>
<select name="marital_status">
<option value="">Please select your Marital Status </option>
<option value="married">Married </option>
<option value="single">Single </option>
<option value="single">Divorced </option>
</select>


</tr>

<tr>
                    	<td align='right'><span class="reg">* </span> County:</td>
                    	<td>


<select name="county" id="county">
<option value=""> Please select a county... </option>

<?php if ($county): foreach ($county as $count): ?>

<option value="<?php echo $count['county_code'];?>"><?php echo $count['county_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>


</select>
</td>
</tr>
            

<tr>
                    	<td align='right'><span class="reg">* </span> Constituency:</td>


                    	<td>
<select name="constituency" id="constituency">
<option value=""> Please select a Constituency... </option>
<?php if ($constituency): foreach ($constituency as $const): ?>

<option value="<?php echo $const['constituency_code'];?>"><?php echo $const['constituency_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>


</td>
</tr>



<tr>
                    	<td align='right'><span class="reg">* </span> Ward:</td>


                    	<td>
<select name="ward" id="ward">
<option value=""> Please select a Ward... </option>
<?php if ($ward): foreach ($ward as $w): ?>

<option value="<?php echo $w['ward_code'];?>"><?php echo $w['ward_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>


</td>
</tr>

     	
                   <!-- <tr>
                    	<td align='right'><span class="reg">* </span> Nationality:</td>
                   		<td><input type='text' name='citizenship' size='40'  value="<?php echo set_value('citizenship')?>" id='citizenship' required/></td></tr>
-->
                    <tr>
                    <td align='right'><span class="reg">* </span> Physical Location:</td>
                    <td><input type='text' name='physical_location' size='40' id='physical_location' value="<?php echo set_value('physical_location')?>" required/></td>
                    </tr>

         
                   		<td align='right'><span class="reg">* </span>Current Postal Address:</td>
                    	<td><input type='text' name='addresspersonal' id='addresspersonal' value="<?php echo set_value('addresspersonal')?>" size='40'  required/></td></tr>
                    <tr>
                    	<td align='right'><span class="reg">* </span> Current Postal Code:</td>
                    	<td><input type='text' name='postalcode' id='postalcode'  value="<?php echo set_value('postalcode')?>" size='40' required/></td></tr>
                   
 <tr>
                    	<td align='right'><span class="reg">* </span> Current City:</td>
                    	<td><input type='text' name='city' id='city' size='40'  value="<?php echo set_value('city')?>"  required/></td></tr>
                 	<tr>

<!--
<tr>
                    	<td align='right'><span class="reg">* </span> Religion:</td>
                    	<td><input type='text' name='religion' id='religion' size='40'  value="<?php echo set_value('religion')?>"  required/></td></tr>
-->

<!--
<tr>
                    	<td align='right'><span class="reg">* </span> Ethnic Group:</td>
                    	<td><input type='text' name='ethnic_group' id='ethnic_group' size='40'  value="<?php echo set_value('ethnic_group')?>" required/></td>

</tr>
-->
                 	<tr>
  
<!--                 
 <tr>
                    	<td align='right'><span class="reg">* </span> Current Term of service:</td>
                    	<td><input type='text' name='current_terms_of_service' id='current_terms_of_service' size='40' value="<?php echo set_value('current_terms_of_service')?>"  required/></td></tr>
-->
                 	<tr>

 <tr>
                    	<td align='right'><span class="reg">* </span> Current Position:</td>
                    	<td><input type='text' name='current_position' id='current_position' size='40'  value="<?php echo set_value('current_position')?>" required/></td></tr>
                 	<tr>


<!--
 <tr>
                    	<td align='right'><span class="reg">* </span> Current Employment:</td>
                    	<td><input type='text' name='current_employment' id='current_employment' size='40' value="<?php echo set_value('current_employment')?>"  required/></td></tr>
-->
                 	<tr>

 <tr>
                    	<td align='right'><span class="reg">* </span> Current Work Station:</td>
                    	<td><input type='text' name='current_work_station' id='current_work_station' size='40' value="<?php echo set_value('current_work_station')?>"  required/></td></tr>
                 	<tr>

 <tr>
                    	<td align='right'> Disabled ?: </td>

 <td>Yes<input type='radio' name='disable' id='disable' value='1'/>No <input type='radio' name='disable' id='disable' value='0'  required/></td>

</tr>

                  
 <tr>
                    	<td align='right'> Disability Type:</td>
                    	<td><input type='text' name='disability_type' id='disability_type'  value="<?php echo set_value('disability_type')?>"size='40'   /></td></tr>
  


                 	<tr>
                    
                    
                
                                        <tr>
                                            <td><br></td>
                                            
                                            </tr>
					<tr>
                                            
                    <td>
					</td><td><input type="submit" class="btn btn-success" id="regb" value="Register "></td>
					
					</tr>
</form>
</center>
</div>
</div></div>
</table>


