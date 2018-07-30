<head>
<script>
function validateEntry()
{
var comm = document.getElementById('comment').value;

if(comm.length == 0)
{
alert ("Incident Description Must not be Empty!");
return false;

}
else
{

return true;
}

}

</script>

<script>
$(document).ready(function(){
$("#constituency").prop("disabled", true);
$("#ward").prop("disabled", true);
$("#polling_center").prop("disabled", true);
$("#issue_cat_type").prop("disabled", true);
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

$("[name='issue_type']").change(function(){
//alert("hey");

 		 $.ajax({
                    url:"<?php echo base_url(); ?>index.php/welcome/getissuecategory",
                    data: {issue_type: $(this).val()},
                    type: "POST",
                    success: function(data){

                        $("#issue_cat_type").html(data);
			$("#issue_cat_type").prop("disabled", false);
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
                <h3>ICT Incident Reporting </h3>
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

<form action="<?php echo base_url()?>index.php/welcome/ict_submit" method="post" onSubmit=" validateEntry();">

<?php echo  $this->session->flashdata('log_error');?>

<div class="col-sm-6" style="">

<label> Ticket Number: </label>
<input type="text" class="form-control" name="ticket_no" value="<?php echo 'IEBC_ICT_'.mt_rand(10000,9999999999999);?>" readonly="readonly">

<br>
<label> County: </label>

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
  <label> Constituency:    </label>
<select name="constituency" class="form-control" id="constituency" required>

</select>
<br>

<label> Incident Category: </label>

<select name="issue_type" id="issue_type" class="form-control" required>
<option value="">Select the issue type </option>

<?php if ($issues): foreach ($issues as $issue): ?>

<option value="<?php echo $issue['id'];?>"><?php echo $issue['issue_name'];?> </option>
 <?php endforeach; else: ?>

 <div class="alert alert-message"> Error
</div>

<?php endif; ?>

</select>
<br>

<label> Incident Type:    </label>
<select name="issue_cat_type" class="form-control" id="issue_cat_type" required>

</select>

<label> Polling Station </label>
<input type="text" class="form-control" name="reported_from"  required>

<br>




</div>
<div class="col-sm-6" style="">


<label> Priority Incident: </label>
<select name="priority" id="priority" class="form-control" required>
<option value="">Select the priority </option>
<?php if ($priorities): foreach ($priorities as $prior): ?>
<option value="<?php echo $prior['id'];?>"><?php echo $prior['priority_name'];?> </option>
 <?php endforeach; else: ?>

 <div class="alert alert-message"> Error
</div>

<?php endif; ?>

</select>
<br>
<label> Hardware Serial Number/ IMEI Number </label>
<input type="text" class="form-control" name="serial_no" >
<br>

<label>Incident Description: </label>
<textarea class="form-control" name="comment" id="comment" required> </textarea>
<br>

<label> Reporter Phone Number / Reported by: </label>
<input type="text" class="form-control" name="reporter_phone" required>
<br>
<label> Issue Status: </label>
<select name="issue_status" id="issue_status" class="form-control" required>
<option value="">Select the priority </option>
<?php if ($statuses): foreach ($statuses as $status): ?>
<option value="<?php echo $status['id'];?>"><?php echo $status['status_name'];?> </option>
 <?php endforeach; else: ?>

 <div class="alert alert-message"> Error
</div>

<?php endif; ?>

</select>
<br>

<br>
<br>
<br>

</div>
<center><input type="submit" class="btn btn-lg btn-danger" style="position:right;" onclick="validateEntry();"value="Submit Incident"> </center>


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
