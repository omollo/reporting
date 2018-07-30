<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js" /></script>


<!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>-->
 

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>IEBC Reporting System</title>
 
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  this is to style the moves in the making to handle the ongoing movements to include
  -->

  <!-- Included CSS Files (Compressed) -->




    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>css/bootstrap.min.css" rel="stylesheet">

<style>
input{
height:30px !important;

}

</style>





<link rel="stylesheet" href="<?php echo base_url()?>css/datepicker.css">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>bower_componentsadmin/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->


    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>bower_componentsadmin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Timeline CSS -->
    <link href="<?php echo base_url()?>dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()?>bower_componentsadmin/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>bower_componentsadmin/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>
<body>

<div class="row">

    <!-- Title Area -->




    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->






</div>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#"><b>IEBC - Administration </b> </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
              
                </li>
 <li><a href="#"><i class="fa fa-user fa-fw"></i>   Welcome <?php echo $this->session->userdata('email');?></a>
                        </li>
<li><a href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
               
                
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            Administration
                            <!-- /input-group -->
                        </li>
Information & Technology
                      
		<li>
                    <a href="<?php echo site_url('examples/user_management')?>"><i class="fa fa-user fa-fw"></i> Manage Users</a>
                                </li>
  <li>
                       <a href="<?php echo site_url('examples/ict_management')?>"><i class="fa fa-user fa-fw"></i> ICT Report</a>
                       </li>
<li>

                    <a href="<?php echo site_url('examples/status_management')?>"><i class="fa fa-user fa-fw"></i>Status Management</a>
                                </li>
<li>

                    <a href="<?php echo site_url('examples/priority_management')?>"><i class="fa fa-user fa-fw"></i>Priority Management</a>
                                </li>

                              <li>

                    <a href="<?php echo site_url('examples/issuetype_management')?>"><i class="fa fa-user fa-fw"></i>Issue Types Management</a>
                                </li>

         <li>

                    <a href="<?php echo site_url('examples/issuetype_secondary_management')?>"><i class="fa fa-user fa-fw"></i>Second Level Issue Management</a>
                                </li>



Call Center

                                <li>

                        <a href="<?php echo site_url('examples/distribution_management')?>"><i class="fa fa-user fa-fw"></i> Deployment Report</a>
                                </li>
           <li>
                        <a href="<?php echo site_url('examples/preparedness_management')?>"><i class="fa fa-user fa-fw"></i> Preparedness - 5th</a>                                </li>

     <li>
                        <a href="<?php echo site_url('examples/preparedness7th_management')?>"><i class="fa fa-user fa-fw"></i> Preparedness - 7th</a>                                </li>

<li>
                        <a href="<?php echo site_url('examples/personell_management')?>"><i class="fa fa-user fa-fw"></i> Personel Arrival - Report</a>   

    <!--
 <li>
                       <a href="<?php echo site_url('examples/show_graph_personel_view')?>"><i class="fa fa-user fa-fw"></i>Personell - Report</a>
                       </li>
-->

                      <li>
                       <a href="<?php echo site_url('examples/show_graph_view')?>"><i class="fa fa-user fa-fw"></i> Opening Time - Report</a>
                       </li>
        <li>
                       <a href="<?php echo site_url('examples/show_graph_voter_view')?>"><i class="fa fa-user fa-fw"></i> Voter Turnout - Report</a>
                       </li>
        <li>
                       <a href="<?php echo site_url('examples/arrival_management')?>"><i class="fa fa-user fa-fw"></i>Tallying Center Arrival - Report</a>
                       </li>


                       <li>
                       <a href="<?php echo site_url('examples/threat_management')?>"><i class="fa fa-user fa-fw"></i> Incident - Report</a>
                       </li>

                       <li>
                       <a href="<?php echo site_url('examples/mediamoni_management')?>"><i class="fa fa-user fa-fw"></i> Media - Report</a>
                       </li>




<li>

                    <a href="<?php echo site_url('examples/incident_types')?>"><i class="fa fa-user fa-fw"></i>Incident Types </a>
                                </li>

<li>

                    <a href="<?php echo site_url('examples/roles_management')?>"><i class="fa fa-user fa-fw"></i>Roles Management</a>
                                </li>




<li>

                    <a href="<?php echo site_url('examples/media_management')?>"><i class="fa fa-user fa-fw"></i>Media Channels</a>
                                </li>





			

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


    </div>
   
