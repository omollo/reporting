
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_middle">
                <h3>Welcome to IEBC Incident Management System </h3>
              </div>

              <div class="title_right">
                    </div>
            </div>

            <div class="clearfix"></div>

<?php

$id=$this->session->userdata('level_id');

if($id=='1')
{
?>



             <div class="row">
                      <div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_100">
                          <div class="x_title">
                            <center><h2>Compliance Matrix</h2></center>
                      
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

<br>

<center><a href="<?php echo site_url('welcome/distribution')?>" class="btn btn-lg btn-success"> Report Now! </a> </center>

                            <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                              <canvas id="canvas_line1" height="100"></canvas>
                            </div>


                       </div>
                          </div>
                        </div>

<div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_100">
                          <div class="x_title">
                            <center><h2>Threats Matrix</h2></center>
                      
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">


<br>


<center><a href="<?php echo site_url('welcome/threat')?>" class="btn btn-lg btn-success"> Report Now! </a> </center>


                            <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                              <canvas id="canvas_line1" height="100"></canvas>
                            </div>


                       </div>
                          </div>
                        </div>

<?php
}
?>

<?php

$id=$this->session->userdata('level_id');

if($id=='4')
{
?>

<div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_100">
                          <div class="x_title">
                            <center><h2>Incidence - Internal Customer Care</h2></center>
                      
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">


<br>

<center><a href="<?php echo site_url('welcome/incident')?>" class="btn btn-lg btn-success"> Report Now! </a> </center>


                            <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                              <canvas id="canvas_line1" height="100"></canvas>
                            </div>


                       </div>
                          </div>
                        </div>

<?php
}
?>
<?php
$id=$this->session->userdata('level_id');
if($id=='3')
{
?>

<div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_100">
                          <div class="x_title">
                            <center><h2>ICT Matrix</h2></center>
                      
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

<br>

<center><a href="<?php echo site_url('ict/ict_report')?>" class="btn btn-lg btn-success"> Report Now! </a> </center>


                            <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                              <canvas id="canvas_line1" height="100"></canvas>
                            </div>


                       </div>
                          </div>
                        </div>
                      </div>


<?php
}
?>



<?php
$id=$this->session->userdata('level_id');
if($id=='5')
{
?>

<div class="col-md-3 col-xs-12 widget widget_tally_box">
                        <div class="x_panel fixed_height_100">
                          <div class="x_title">
                            <center><h2>Media Incidents</h2></center>
                      
                            <div class="clearfix"></div>
                          </div>
                          <div class="x_content">

<br>

<center><a href="<?php echo site_url('media/media_incidents')?>" class="btn btn-lg btn-success"> Report Now! </a> </center>


                            <div style="text-align: center; overflow: hidden; margin: 10px 5px 0;">
                              <canvas id="canvas_line1" height="100"></canvas>
                            </div>


                       </div>
                          </div>
                        </div>
                      </div>


<?php
}
?>



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
