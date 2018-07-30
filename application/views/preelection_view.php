
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_middle">
                <h3>Pre-Election </h3>
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


                <form action="<?php echo base_url()?>index.php/welcome/preelection_submit" method="post" onsubmit="return validate();">


<div class="panel panel-success">

    <div class="panel-heading">

        <h3 class="panel-title">1. Have you received election materials?</h3>

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

        <h3 class="panel-title">3. Do you the right number of Vehicles?</h3>

    </div>

    <div class="panel-body">

Yes: <input type="radio" name="vehicles" value="yes"> 
<br>
No: <input type="radio" name="vehicles" value="no">
<br>
<label> If No, why? 
<textarea name="vehicle_comment"  class="form-control" id="vehicle_comment"> </textarea>



</div>
</div>




<br>

<center><input type="submit" class="btn btn-lg btn-success" style="position:right;" value="Submit Pre-election Matrix"> </center>
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
