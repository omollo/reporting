    <head>
<script type="text/javascript">
   
$(document).ready(function() {

 $('#perror').delay(5000).fadeOut();

});

    
</script>

</head> 

<body>
	<div>
<center>


	
	<center></div>


        <div id="page-wrapper">
           
            <!-- /.row -->
            
                
               
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                   
<p class="alert alert-info"> <?php  echo 'You are applying: - <b>'.$this->session->userdata('j_title').'</b>'; ?> 



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
           


<?php echo form_open('apply/job_application');?>
<div id="perror"><?php echo $this->session->flashdata('error')?></div>
<br>
<center>
</p>
<h1> CURRICULUM VITAE</h1>
<hr>
</center>
<table class="table table-striped">

<tr>
<h4> PERSONAL DETAILS </H4>
<hr>
<tr>
 <?php if (isset($account)): foreach ($account as $acct): ?>
 

<tr>     
 <td> Full Name:  </td><td><b><?php echo $acct['firstname']." ".$acct['middlename']." ".$acct['surname']?></b> </td>             
                 
</tr>
<tr>     
 <td> Gender  </td><td><b><?php echo $acct['sex']?></b> </td>             
                 
</tr>
  
<tr>     
 <td> ID Number / Passport:  </td><td><b><?php echo $acct['userid']?></b> </td>             
                 
</tr>

 <!--
<tr>     
 <td> Date of Birth:  </td><td><b><?php echo $acct['dob']?></b> </td>             
                 
</tr>
-->
 
<tr>     
 <td> Marital Status  </td><td><b><?php echo $acct['marital_status']?></b> </td>             
                 
</tr>


<?php endforeach; else: ?>
 
    <div class="alert alert-message">You have not updated your proffesions here.. </div>
 
    <?php endif; ?> 
</table>
 
<TABLE class="table table-striped">
 
<tr>
<h4> EDUCATIONAL BACKGROUND </H4>
<hr>
</tr>
<?php if (isset($education)): foreach ($education as $edu): ?>

<tr>
<td><?php echo $edu['periodfrom']?></td>  <td> - </td> <td><?php echo $edu['periodto']?>: </td> <td>Institute Name:  <?php echo $edu['nameofinstitute']?> </td>

</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>Course: <?php echo $edu['course']?></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>Grade: <?php echo $edu['grade']?></td>
</tr>
 

<?php endforeach; else: ?>
 
    <div class="alert alert-message">You have not updated your proffesions here.. </div>
 
    <?php endif; ?> 

</table>

<TABLE class="table table-striped">
 
<tr>
<h4> PROFFESSIONAL BACKGROUND </H4>
<hr>
</tr>

<?php if (isset($proffession)): foreach ($proffession as $prof): ?>

<tr>
<td>Name of the Institution:</td> <td><?php echo $prof['nameofinstitute']?></td>  



</tr>
<tr>

<td></td>
<td>Course: <?php echo $prof['pcourses']?></td>
</tr>


<?php endforeach; else: ?>
 
    <div class="alert alert-message">You have not updated your proffesions here.. </div>
 
    <?php endif; ?> 
</table>

<TABLE class="table table-striped">
 
<tr>
<h4> EMPLOYMENT HISTORY </H4>
<hr>
</tr>
<?php if (isset($employment)): foreach ($employment as $emp): ?>
<tr>
<td><?php echo $emp['date_started']?></td>  <td> - </td> <td><?php echo $emp['date_ended']?>: </td> <td>Employer:  <?php echo $emp['employer_name']?> </td>

</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>Industry: <?php echo $emp['industry']?></td>
</tr>
<tr>
<td></td>
<td></td>
<td></td>
<td>Position Held: <?php echo $emp['post_held']?></td>
</tr>


<?php endforeach; else: ?>
 
    <div class="alert alert-message">You have not updated your proffesions here.. </div>
 
    <?php endif; ?> 
  
 </table>
   

<center><div class="alert alert-info"> End of CV </div> </center>


       
        

 
 <center> <td><input type="submit" value="Submit your Application" class="btn btn-danger btn-large" onClick="gotIt();"></td>
 

  </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                    
                    
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-8 -->
               
              
                        
                    </div>
                    <!-- /.panel .chat-panel -->
                </div>
                <!-- /.col-lg-4 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
	
    <div>
		
    </div>

</body>
</html>
