<head>
<script>
$(document).ready(function(){

$("#staff").hide();
$("#security").hide();
$("#8th").hide();
$("#8tht").hide();
$("#8tha").hide();
$("#8thaco").hide();
$("#8thab").hide();
$("[name='dist']").change(function(){
     var select=  $(this).val();
       if(select=='staff'){
          //some code

$("#staff").show();
 $("#matrixs").val($(this).val());
$("#security").hide();
$("#8th").hide();
$("#8tht").hide();
$("#8tha").hide();
$("#8thaco").hide();
$("#8thab").hide();

         }
 else if(select=='security'){
          //some code
 
$("#security").show();
$("#matrixsec").val($(this).val());
$("#staff").hide();
$("#8th").hide();
$("#8tht").hide();
$("#8tha").hide();
$("#8thab").hide();
$("#8thaco").hide();
         }


else if(select=='8th'){
          //some code
 
$("#8th").show();
$("#matrixsec").val($(this).val());
$("#staff").hide();
$("#security").hide();
$("#8tht").hide();
$("#8tha").hide();
$("#8thab").hide();
$("#8thaco").hide();
         }

else if(select=='8tht'){
          //some code
 
$("#8th").hide();
$("#matrixsec").val($(this).val());
$("#staff").hide();
$("#security").hide();
$("#8tha").hide();
$("#8tht").show();
$("#8thab").hide();
$("#8thaco").hide();

         }
else if(select=='8tha'){
          //some code 
$("#8th").hide();
$("#matrixsec").val($(this).val());
$("#staff").hide();
$("#security").hide();
$("#8tht").hide();
$("#8thab").hide();
$("#8thaco").hide();
$("#8tha").show();


         }

else if(select=='8thaco'){
          //some code 
$("#8th").hide();
$("#matrixsec").val($(this).val());
$("#staff").hide();
$("#security").hide();
$("#8tht").hide();
$("#8thab").hide();
$("#8tha").hide();
$("#8thaco").show();

         }
else if(select=='8thab'){
          //some code 
$("#8th").hide();
$("#matrixsec").val($(this).val());
$("#staff").hide();
$("#security").hide();
$("#8tht").hide();
$("#8tha").hide();
$("#8thaco").hide();
$("#8thab").show();

         }


    }); 
  }); 

</script>


<script>
$(document).ready(function(){
$("#constituency").prop("disabled", true);
$("#ward").prop("disabled", true);
$("#polling_center").prop("disabled", true);
$("[name='county']").change(function(){


 		 $.ajax({
                    url:"<?php echo base_url();?>index.php/welcome/getcountybyid",    
                    data: {county: $(this).val()},
                    type: "POST",
                    success: function(data){
                       // alert("hey");
                        $("#constituency").html(data);
			$("#constituency").prop("disabled", false);
                    }
                   
                    });


});


$("[name='constituency']").change(function(){
//alert("hey");

 		 $.ajax({
                    url:"<?php echo base_url(); ?>index.php/welcome/getconstituencybyid",    
                    data: {constituency: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                        $("#ward").html(data);
			$("#ward").prop("disabled", false);
                    }
                    
                    });


});

$("[name='ward']").change(function(){
//alert("hey");

 		 $.ajax({
                    url:"<?php echo base_url(); ?>index.php/welcome/getpollingcenterbyid",    
                    data: {ward: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                        $("#polling_center").html(data);
			$("#polling_center").prop("disabled", false);
                    }
                    
                    });


});

});
</script>

<script>
$(document).ready(function(){
$("#constituencys").prop("disabled", true);
$("#wards").prop("disabled", true);
$("#polling_centers").prop("disabled", true);
$("[name='countys']").change(function(){


 		 $.ajax({
                    url:"<?php echo base_url();?>index.php/welcome/getcountybyid",    
                    data: {county: $(this).val()},
                    type: "POST",
                    success: function(data){
                       // alert("hey");
                        $("#constituencys").html(data);
			$("#constituencys").prop("disabled", false);
                    }
                   
                    });


});


$("[name='constituencys']").change(function(){
//alert("hey");

 		 $.ajax({
                    url:"<?php echo base_url(); ?>index.php/welcome/getconstituencybyid",    
                    data: {constituency: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                        $("#wards").html(data);
			$("#wards").prop("disabled", false);
                    }
                    
                    });


});

$("[name='wards']").change(function(){
//alert("hey");

 		 $.ajax({
                    url:"<?php echo base_url(); ?>index.php/welcome/getpollingcenterbyid",    
                    data: {ward: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                        $("#polling_centers").html(data);
			$("#polling_centers").prop("disabled", false);
                    }
                    
                    });


});

});
</script>



<script>
$(document).ready(function(){
$("#constituencys8th").prop("disabled", true);
$("[name='countys8th']").change(function(){


 		 $.ajax({
                    url:"<?php echo base_url();?>index.php/welcome/getcountybyid",    
                    data: {county: $(this).val()},
                    type: "POST",
                    success: function(data){
                       // alert("hey");
                        $("#constituencys8th").html(data);
			$("#constituencys8th").prop("disabled", false);
                    }
                   
                    });


});


$("[name='constituencys8th']").change(function(){
//alert("hey");

 		 $.ajax({
                    url:"<?php echo base_url(); ?>index.php/welcome/getconstituencybyid",    
                    data: {constituency: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                        $("#wards").html(data);
			$("#wards").prop("disabled", false);
                    }
                    
                    });


});

$("[name='wards']").change(function(){
//alert("hey");

 		 $.ajax({
                    url:"<?php echo base_url(); ?>index.php/welcome/getpollingcenterbyid",    
                    data: {ward: $(this).val()},
                    type: "POST",
                    success: function(data){
                        
                        $("#polling_centers").html(data);
			$("#polling_centers").prop("disabled", false);
                    }
                    
                    });


});

});
</script>
<script>
$(document).ready(function(){
$("#constituencys8thturn").prop("disabled", true);


$("[name='countys8thturn']").change(function(){


 		 $.ajax({
                    url:"<?php echo base_url();?>index.php/welcome/getcountybyid",    
                    data: {county: $(this).val()},
                    type: "POST",
                    success: function(data){
                       // alert("hey");
                        $("#constituencys8thturn").html(data);
			$("#constituencys8thturn").prop("disabled", false);
                    }
                   
                    });


});

});
</script>


<script>
$(document).ready(function(){
$("#constituencys8thturna").prop("disabled", true);


$("[name='countys8thturna']").change(function(){


 		 $.ajax({
                    url:"<?php echo base_url();?>index.php/welcome/getcountybyid",    
                    data: {county: $(this).val()},
                    type: "POST",
                    success: function(data){
                       // alert("hey");
                        $("#constituencys8thturna").html(data);
			$("#constituencys8thturna").prop("disabled", false);
                    }
                   
                    });


});

});
</script>

<script>
$(document).ready(function(){
$("#constituencyba").prop("disabled", true);


$("[name='countyba']").change(function(){


 		 $.ajax({
                    url:"<?php echo base_url();?>index.php/welcome/getcountybyid",    
                    data: {county: $(this).val()},
                    type: "POST",
                    success: function(data){
                       // alert("hey");
                        $("#constituencyba").html(data);
			$("#constituencyba").prop("disabled", false);
                    }
                   
                    });


});

});
</script>

<script>
$(document).ready(function(){
$("#constituencys8thturnapersonell").prop("disabled", true);


$("[name='countys8thturnapersonell']").change(function(){


 		 $.ajax({
                    url:"<?php echo base_url();?>index.php/welcome/getcountybyid",    
                    data: {county: $(this).val()},
                    type: "POST",
                    success: function(data){
                       // alert("hey");
                        $("#constituencys8thturnapersonell").html(data);
			$("#constituencys8thturnapersonell").prop("disabled", false);
                    }
                   
                    });


});

});
</script>
</head>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_middle">
                <h3>NECC TRACKING, ANALYSIS AND REPORTING SYSTEM  </h3>
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

<?php echo  $this->session->flashdata('log_error');?>

<label> Matrix Type:</label> 
<select name="dist" id="dist" class="form-control" required>
<option value=""> Please select the Matrix to report on: <br>
</option>

<option value="staff">Constituency Preparedness  </option>
<option value="security"> Distribution and Deployment of Staff and Materials</option>
<option value="8thaco"> Personnel Arrival Time</option>
<option value="8th"> Polling Day - Opening Time</option>
<option value="8tht"> Polling Day - Voter Turnout</option>
<!--<option value="8thab"> 8th August - Polling Day - Ballot Papers Reconciliation</option>-->
<option value="8tha">Polling Day - Constituency Tallying Center Arrival</option>

</select>
<div class="staff" id="staff">
<br>
<form action="<?php echo base_url()?>index.php/welcome/distribution_submit" method="post" onsubmit="return validate();">


<input type="hidden" name="matrixs" id="matrixs">

<div class="panel panel-success">

    <div class="panel-heading">

        <h3 class="panel-title">5th August - Constituency Preparedness</h3>

    </div>

    <div class="panel-body">

 <span class="reg">* </span> County:     	


<select class="form-control" name="county" id="county" required>

<option value=""> Please select a county... </option>

<?php if ($county): foreach ($county as $count): ?>

<option value="<?php echo $count['county_code'];?>"><?php echo $count['county_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>
</select>


<br>
<span class="reg">* </span>  <label> Constituency:    </label>                  	
<select name="constituency" class="form-control" id="constituency" required>

</select>
<br>

</select>

<br>

<div class="panel panel-success">

    <div class="panel-heading">

        <h3 class="panel-title">1. Have you received Right election materials?</h3>

    </div>

<div class="panel-body">
<div class="col-sm-6" style="">
<label>Strategic Materials </label><br>
Yes: <input type="radio" name="strategic_materials" value="yes"> 
<br>
No: <input type="radio" name="strategic_materials" value="no">
<br>
<label> If No, why? 
<textarea name="strategic_comment"  class="form-control" id="strategic_comment"> </textarea>
</div>
<div class="col-sm-6" style="">
<label>Non-Strategic</label> <br>
Yes: <input type="radio" name="nonstrategic_materials" value="yes"> 
<br>
No: <input type="radio" name="nonstrategic_materials" value="no">
<br>
<label> If No, why? 
<textarea name="nonstrategic_comment"  class="form-control" id="nonstrategic_comment"> </textarea>

</div>
</div>
</div>

<div class="panel panel-success">
<div class="panel-heading">

        <h3 class="panel-title">2. Do you have the right Ballot Papers & Register?</h3>

    </div>

    <div class="panel-body">

<div class="col-sm-6" style="">
<label>Ballot Papers </label><br>
Yes: <input type="radio" name="ballot_papers" value="yes"> 
<br>
No: <input type="radio" name="ballot_papers" value="no">
<br>
<label> If No, why? 
<textarea name="ballot_comment"  class="form-control" id="ballot_comment"> </textarea>
</div>
<div class="col-sm-6" style="">
<label>Register</label> <br>
Yes: <input type="radio" name="register" value="yes"> 
<br>
No: <input type="radio" name="register" value="no">
<br>
<label> If No, why? 
<textarea name="register_comment"  class="form-control" id="register_comment"> </textarea>

</div>
</div>
</div>


<div class="panel panel-success">
<div class="panel-heading">

        <h3 class="panel-title">3. Vehicles</h3>

    </div>

    <div class="panel-body">

<div class="col-sm-6" style="">
<label>Do you have the right number of Vehicles? </label><br>
Yes: <input type="radio" name="vehiclesno" value="yes"> 
<br>
No: <input type="radio" name="vehiclesno" value="no">
<br>
<label> If No, why? 
<textarea name="vehiclesno_comment"  class="form-control" id="vehiclesno_comment"> </textarea>
</div>
<div class="col-sm-6" style="">
<label>Have the Vehicles been inspected?</label> <br>
Yes: <input type="radio" name="vehiclesinspect" value="yes"> 
<br>
No: <input type="radio" name="vehiclesinspect" value="no">
<br>
<label> If No, why? 
<textarea name="vehiclesinspect_comment"  class="form-control" id="vehiclesinspect_comment"> </textarea>

</div>
</div>
</div>

<label>Reported by:  </label>
<input type='text' class="form-control" name="reported_by">
<br>

<label>Phone Number:  </label>
<input type='number' class="form-control" name="phone">
<br>






</div>
<br>
<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit it"> </center>


</div>
</div>


</form>
</div>


<div class="security" id="security">
<form action="<?php echo base_url()?>index.php/welcome/distribution_submits" method="post" onsubmit="return validate();">

<input type="hidden" name="matrixsec" id="matrixsec">
<br>

<br>
<div class="panel panel-success">

    <div class="panel-heading">

        <h3 class="panel-title">7th August- Prepoll</h3>

    </div>

    <div class="panel-body">

<span class="reg">* </span> County:     	


<select class="form-control" name="countys" id="countys" required>

<option value=""> Please select a county... </option>

<?php if ($county): foreach ($county as $count): ?>

<option value="<?php echo $count['county_code'];?>"><?php echo $count['county_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>


</select>
<br>


<span class="reg">* </span> Constituency:                    	
<select name="constituencys" class="form-control" id="constituencys" required>

</select>
<br>

<div class="panel panel-success">
<div class="panel-heading">

        <h3 class="panel-title">1. Logistics</h3>

    </div>

    <div class="panel-body">

<div class="col-sm-6" style="">
<label>Have arrangements for the hot pre-poll meal been made? </label><br>
Yes: <input type="radio" name="meal" value="yes"> 
<br>
No: <input type="radio" name="meal" value="no">
<br>
<label> If No, why? 
<textarea name="meal_comment"  class="form-control" id="meal_comment"> </textarea>
</div>


<div class="col-sm-6" style="">
<label>Have all polling stations been allocated transport?</label> <br>
Yes: <input type="radio" name="transport" value="yes"> 
<br>
No: <input type="radio" name="transport" value="no">
<br>
<label> If No, why? 
<textarea name="transport_comment"  class="form-control" id="transport_comment"> </textarea>

</div>
</div>
</div>


<div class="panel panel-success">
<div class="panel-heading">

        <h3 class="panel-title">2. Personnel</h3>

    </div>

    <div class="panel-body">

<div class="col-sm-4" style="">
<label>(a) Have all polling Officials been deployed to Polling Station? </label><br>
Yes: <input type="radio" name="officials" value="yes"> 
<br>
No: <input type="radio" name="officials" value="no">
<br>
<label> If No, why? 
<textarea name="officials_comment"  class="form-control" id="officials_comment"> </textarea>
</div>


<div class="col-sm-4" style="">
<label>(b) Have all polling Officials been Dispatched to Polling Station?</label> <br>
Yes: <input type="radio" name="dispatched" value="yes"> 
<br>
No: <input type="radio" name="dispatched" value="no">
<br>
<label> If No, why? 
<textarea name="dispatched_comment"  class="form-control" id="dispatched_comment"> </textarea>

</div>


<div class="col-sm-4" style="">
<label>(c) Have all polling Officials Arrived to the Polling Station?</label> <br>
Yes: <input type="radio" name="arrived" value="yes"> 
<br>
No: <input type="radio" name="arrived" value="no">
<br>
<label> If No, why? 
<textarea name="arrived_comment"  class="form-control" id="arrived_comment"> </textarea>

</div>
</div>
</div>


<div class="panel panel-success">
<div class="panel-heading">

        <h3 class="panel-title">3. Security & Hardware</h3>

    </div>

    <div class="panel-body">

<div class="col-sm-6" style="">
<label>a. Have adequate security been allocated for each polling station?</label><br>
Yes: <input type="radio" name="security" value="yes"> 
<br>
No: <input type="radio" name="security" value="no">
<br>
<label> If No, why? 
<textarea name="security_comment"  class="form-control" id="security_comment"> </textarea>
</div>


<div class="col-sm-6" style="">
<label>b. Have all KIEMS been fully charged?</label> <br>
Yes: <input type="radio" name="fully_charged" value="yes"> 
<br>
No: <input type="radio" name="fully_charged" value="no">
<br>
<label> If No, why? 
<textarea name="fully_charged_comment"  class="form-control" id="fully_charged_comment"> </textarea>

</div>
</div>
</div>

 

<label>Reported by:  </label>
<input type='text' class="form-control" name="reported_by">
<br>

<label>Phone Number:  </label>
<input type='number' class="form-control" name="phone" >
<br>



<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit Election Preparedness Matrix"> </center>

</form>

</div>


</div>
</div>


<div class="8th" id="8th">
<form action="<?php echo base_url()?>index.php/welcome/intime_submits" method="post" onsubmit="return validate();">

<div class="panel panel-success">
<div class="panel-heading">

        <h3 class="panel-title">1. Polling Station Opening Time</h3>

    </div>

    <div class="panel-body">

<div class="col-sm-6" style="">
<span class="reg">* </span> County:     	


<select class="form-control" name="countys8th" id="countys8th" required>

<option value=""> Please select a county... </option>

<?php if ($county): foreach ($county as $count): ?>

<option value="<?php echo $count['county_code'];?>"><?php echo $count['county_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>


</select>
<br>


<span class="reg">* </span> Constituency:                    	
<select name="constituencys8th" class="form-control" id="constituencys8th" required>

</select>
<br>
</div>

<div class="col-sm-6" style="">

<label>Opened at: </label>

<select name="otime" id="otime" class="form-control" required>
<option value=""> Select the time </option>
<option value="6">6am</option>
<option value="601630">6:01am to 6:30am</option>
<option value="630">After 6:30am</option>
</select>
<br>

<label>How many?  </label>
<input type='number' class="form-control" name="onumber" required>
<br>

<!--
<label>Are there political Party  Candidates Agent(s) present at the Polling Station?</label>
Yes <input type="radio"  value="yes"name="agents"><br>
No <input type="radio"  value="no"name="agents"><br>
-->

</div>

</div>

<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit "> </center>

</form>
</div>

</div>

<div class="8tht" id="8tht">
<form action="<?php echo base_url()?>index.php/welcome/voter_turnout" method="post" onsubmit="return validate();">
<div class="panel panel-success">
<div class="panel-heading">

        <h3 class="panel-title"> Voter Turnout</h3>

    </div>
<div class="panel-body">
<br>

<label> Reporting Time: </label>
<select name="reporting_time" id="reporting_time" class="form-control">
<option value=''> Select the reporting Time: </option>
<option value='9'>9am </option>
<option value='11'>11am </option>
<option value='1'>1pm </option>
<option value='3'>3pm </option>
<option value='end'>End of Polling </option>
</select>

<br>


<label> County:  </label>

<select class="form-control" name="countys8thturn" id="countys8thturn" required>

<option value=""> Please select a county... </option>

<?php if ($county): foreach ($county as $count): ?>

<option value="<?php echo $count['county_code'];?>"><?php echo $count['county_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>
</select>
<br>
<span class="reg">* </span> Constituency:                    	
<select name="constituencys8thturn" class="form-control" id="constituencys8thturn" required>

</select>
<br>

<label>Number of Voters </label>
<input type="text" class="form-control" name="no_of_voters">
<br>

<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit "> </center>

</form>
</div>
</div>





</div>

<div class="8tha" id="8tha">
<br>
<form action="<?php echo base_url()?>index.php/welcome/polling_arrive" method="post" onsubmit="return validate();">

<label> County:  </label>
<select class="form-control" name="countys8thturna" id="countys8thturna" required>

<option value=""> Please select a county... </option>

<?php if ($county): foreach ($county as $count): ?>

<option value="<?php echo $count['county_code'];?>"><?php echo $count['county_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>
</select>
<br>
<span class="reg">* </span> Constituency:                    	
<select name="constituencys8thturna" class="form-control" id="constituencys8thturna" required>

</select>
<br>
<label>How many polling stations have closed? </label>
<input type="text" class="form-control" name="polling_station_closed">
<br>

<br>
<label>How many polling stations have reported to the Constituency Tallying Center? </label>
<input type="text" class="form-control" name="polling_station">
<br>




<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit "> </center>

</form>

</div>



<div class="8thab" id="8thab">
<form action="<?php echo base_url()?>index.php/welcome/ballots_submit" method="post" onsubmit="return validate();">
  
<?php echo  $this->session->flashdata('log_error');?>

<label> Reporting Time: </label>
<select name="reporting_time" id="reporting_time" class="form-control">
<option value=''> Select the reporting Time: </option>
<option value='9'>9am </option>
<option value='11'>11am </option>
<option value='1'>1pm </option>
<option value='3'>3pm </option>
<option value='end'>End of Polling </option>
</select>
<br>         



<label>How many ballot papers have been issued?  </label>
<input type='number' class="form-control" name="ballot_no">
<br>


<span class="reg">* </span> County:     	


<select class="form-control" name="countyba" id="countyba" required>
ba
<option value=""> Please select a county... </option>

<?php if ($county): foreach ($county as $count): ?>

<option value="<?php echo $count['county_code'];?>"><?php echo $count['county_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>


</select>


<br>
<span class="reg">* </span>  <label> Constituency:    </label>                  	
<select name="constituencyba" class="form-control" id="constituencyba">

</select>

<br>

<!--
<br>
<span class="reg">* </span>  <label> Wards:  </label>
<select name="ward" class="form-control" id="ward">
</select>
<br>
<span class="reg">* </span> Polling Center:
<select name="polling_center" class="form-control" id="polling_center">
</select>
-->



<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit"> </center>


</form>


</div>

<div class="8thaco" id="8thaco">
<br>
<form action="<?php echo base_url()?>index.php/welcome/polling_arrive_personnel" method="post" onsubmit="return validate();">
<br>
<label> County:  </label>
<select class="form-control" name="countys8thturnapersonell" id="countys8thturnapersonell" required>

<option value=""> Please select a county... </option>

<?php if ($county): foreach ($county as $count): ?>

<option value="<?php echo $count['county_code'];?>"><?php echo $count['county_name'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>
</select>
<br>
<span class="reg">* </span> Constituency:                    	
<select name="constituencys8thturnapersonell" class="form-control" id="constituencys8thturnapersonell" required>

</select>
<br>

<label>Personel Reporting Time: </label>
<select name="arrival_time" class="form-control" required>
<option value=""> Select the reporting time </option>
<option value="810"> 8 - 10pm </option>
<option value="1012"> 10 - 12pm </option>
<option value="12"> After 12am </option>
</select>
<br>

<label>Personell Number: </label>
<input type="text" class="form-control" name="personell_arrival" required>



<br>

<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit "> </center>

</form>

</div>




		</div>


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
</form>
    
  </body>
