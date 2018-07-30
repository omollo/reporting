   <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>IEBC Election Reporting System</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>build/css/custom.min.css" rel="stylesheet">


 //<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
 <script src="<?php echo base_url()?>js/jjquery.js"></script>

<style>

</style>
</head>

 <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
             <img src="<?php echo base_url()?>images/logoiebc.png" alt="..." class="img-circle profile_img"></i> </a>
            </div>

            <div class="clearfix"></div>
 <div class="clearfix"></div>
 <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <!--<img src="<?php echo base_url()?>images/logoiebc.png" alt="..." class="img-circle profile_img"> -->
              </div>
              <div class="profile_info">
                <span>Reporting System</span>
               
              </div>
              <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />
   <br />
   <br />
   <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_dmenu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo site_url('apply')?>">Landing Page</a></li>                     
                    </ul>
                  </li>
                  <li><a><i class="fa fa-edit"></i> Matrices <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
<?php
$id=$this->session->userdata('level_id');

if($id=='1')
{
?>
                      <li><a href="<?php echo site_url('welcome/distribution')?>">Compliance Matrix</a></li>
                      <li><a href="<?php echo site_url('welcome/threat')?>">Threats Matrix </a></li>
<?php
}
?>
 
<?php
$id=$this->session->userdata('level_id');
if($id=='4')
{
?> 	
	   <li><a href="<?php echo site_url('welcome/incident')?>">Incidence Reporting - Internal Customer Care</a></li>                
<?php
}
?>
                 <!--<li><a href="<?php echo site_url('welcome/preelection')?>">Pre-election </a></li>-->
<?php
$id=$this->session->userdata('level_id');
if($id=='3')
{
?> 
			<li><a href="<?php echo site_url('ict/ict_report')?>">Add Incident </a></li>
			<li><a href="<?php echo site_url('ict/incident_management')?>">My Previous Incidents</a></li>

<li><a href="<?php echo site_url('ict/all_incidents')?>">Reported Incidents</a></li>

<li><a href="<?php echo site_url('ict/knowledge')?>">Knowledge Base</a></li>


<?php
}
?>
   

<?php
$id=$this->session->userdata('level_id');
if($id=='5')
{
?> 
			<li><a href="<?php echo site_url('media/media_incidents')?>">Media Monitoring Matrix </a></li>
<?php
}
?>


<?php
$id=$this->session->userdata('level_id');
if($id=='6')
{
?> 
			<li><a href="<?php echo site_url('incident/kiems')?>">KIEMS Incidents </a></li>
<?php
}
?>

<?php
$id=$this->session->userdata('level_id');
if($id=='7')
{
?> 
<li><a href="<?php echo site_url('incident/safaricom')?>">Safaricom Incidents</a></li>
<?php
}
?>

<?php
$id=$this->session->userdata('level_id');
if($id=='8')
{
?> 
<li><a href="<?php echo site_url('incident/telkom')?>">Telkom Kenya Incidents</a></li>
<?php
}
?>


<?php
$id=$this->session->userdata('level_id');
if($id=='9')
{
?> 
<li><a href="<?php echo site_url('incident/airtel')?>">Airtel Incidents</a></li>
<?php
}
?>


<?php
$id=$this->session->userdata('level_id');
if($id=='10')
{
?> 
<li><a href="<?php echo site_url('incident/thuraya')?>">Thuraya Incidents</a></li>
<?php
}
?>
     
                    </ul>
                  </li>
                 <li>
<?php
$id=$this->session->userdata('level_id');
if($id=='3')
{
?>
<a><i class="fa fa-edit"></i> Reports <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
		<li><a href="<?php echo site_url('incident/incident_management')?>">ICT Incidents</a>
<?php
}
?>
</li>

              </ul> </li>
                
                </ul>
              </div>
             

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small footer_fixed">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo site_url('login/logout')?>">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>images/user.png" alt=""> Welcome <?php echo $this->session->userdata('email');?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
              
                    <li><a href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

             
              </ul>
            </nav>
          </div>
        </div>
