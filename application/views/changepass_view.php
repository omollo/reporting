<!DOCTYPE html>
<html>
<head>
<script>
function pass_validate()
{
 var pass2 = document.getElementById("cpassword").value;
 var pass1 = document.getElementById("npassword").value;
 var passo = document.getElementById("opassword").value;


if (pass1 != pass2) 
{
            //alert("Passwords Do not match");
	    alert("Confirm Password and Password fields DO NOT match");
            document.getElementById("npassword").style.borderColor = "#E34234";
            document.getElementById("cpassword").style.borderColor = "#E34234";
	    return false;
        }


        else {
           // alert("Passwords Match!!!");
	  return true;
        }



}



</script>

</head>
<body>
	<div>
<center>


	
	<center></div>


       <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_middle">
                <h3>Change Password</h3>
              </div>

              <div class="title_right">
                    </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

<form action="<?php echo base_url()?>index.php/welcome/passwd_submit" method="post" onsubmit="return pass_validate();">
  
<?php echo  $this->session->flashdata('log_error');?>


		<label> Email Address </label>
	<input type="email" name="name" readonly="readonly" class="form-control" value="<?=$pp?>">
<br>
	<label> Old Password </label>
	<input type="password" name="opassword" id="opassword" class="form-control" required>

<br>
	<label> New Password </label>
	<input type="password" name="npassword" id="npassword" class="form-control" required>

<br>
	<label> Confirm Password </label>
	<input type="password" name="cpassword" id="cpassword" class="form-control" required>

<br>

<center><input type="submit" class="btn btn-lg btn-primary btn-danger"value ="Change Password">
<center>

</form>
            </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
           Copyright 2017, All rights reserved <a href="https://iebc.or.ke">IEBC</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    
  </body>
