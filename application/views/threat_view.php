<head>
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

</head>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_middle">
                <h3>Threat Matrix </h3>
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
<form action="<?php echo base_url()?>index.php/welcome/threat_submit" method="post" onsubmit="return validate();">
  
<?php echo  $this->session->flashdata('log_error');?>


  <label> Incident Type: </label>



<select class="form-control" name="incident" id="incident" required>

<option value=""> Select the Type of Incident Reporting you want to Report</option>

<?php if ($incidents): foreach ($incidents as $inc): ?>

<option value="<?php echo $inc['id'];?>"><?php echo $inc['incident_type'];?> </option>
 <?php endforeach; else: ?>
 
 <div class="alert alert-message"> Error
</div>
 
<?php endif; ?>

</select>
<br>              


<label> Priority: </label>

<select name="priority" id="priority" class="form-control" required>
<option value="">Select the priority </option>
<option value="1">Critical</option>
<option value="2">High</option>
<option value="3">Medium</option>
</select>

<br>


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
<select name="constituency" class="form-control" id="constituency">

</select>
<br>

<span class="reg">* </span>  <label> Wards:  </label>
<select name="ward" class="form-control" id="ward">

</select>
<br>
<span class="reg">* </span> Polling Center:
<select name="polling_center" class="form-control" id="polling_center">

</select>

<br>

<label>Comment on the Incidence / interventions / resolutions: </label>
<textarea class="form-control" name="comment" id="comment" required> </textarea>


<!--
<br>
<label>Reported by:  </label>
<input type='text' class="form-control" name="reported_by">
<br>

<label>Phone Number:  </label>
<input type='number' class="form-control" name="phone">
-->
<br>

<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit Incident"> </center>


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
