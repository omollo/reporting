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

  <title>IEBC - iRecruitment</title>
 
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  this is to style the moves in the making to handle the ongoing movements to include
  -->

  <!-- Included CSS Files (Compressed) -->




    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

  <!--<link href="<?php echo base_url()?>css/bootstrap.css" rel="stylesheet">-->






<link rel="stylesheet" href="<?php echo base_url()?>css/datepicker.css">
    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url()?>bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

  <!-- Timeline CSS -->
    <link href="<?php echo base_url()?>dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url()?>dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="<?php echo base_url()?>bower_components/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url()?>bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


<style>
.navbar-static-top{
background-color: #f2f2f2; 
box-shadow: 0px 3px #f1f1f1;
color:#ffffff;
/*  
background-color: #91bd5f; 
*/

}


</style>

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
                <a class="navbar-brand" href="index.html">IEBC - iRecruitment </a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                
              
                </li>
 <li><a href="#"><i class="fa fa-user fa-fw"></i>   Welcome <?php echo $this->session->userdata('userid');?></a>
                        </li>
<li><a href="<?php echo site_url('login/logout')?>"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
               
                
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            Main Menu
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-home"></i> Home</a>
							
							
                        </li>
						<li>

                                    <a href="<?php echo site_url('usermnt/education_management')?>"><i class="fa fa-envelope fa-fw"></i> My Educational Qualification</a>
                                </li>

	<li>

                                    <a href="<?php echo site_url('usermnt/proffessional_management')?>"><i class="fa fa-envelope fa-fw"></i> My Proffesion Qualification</a>
                                </li>



	<li>

                                    <a href="<?php echo site_url('usermnt/employer_management')?>"><i class="fa fa-envelope fa-fw"></i> My Employment History</a>
                                </li>

<li>

                                    <a href="<?php echo site_url('usermnt/membership_management')?>"><i class="fa fa-envelope fa-fw"></i> My Membership</a>
                                </li>

<li>

                                    <a href="<?php echo site_url('usermnt/integrity_management')?>"><i class="fa fa-envelope fa-fw"></i> Integrity Documents</a>
                                </li>


<li>

                                    <a href="<?php echo site_url('usermnt/referees_management')?>"><i class="fa fa-envelope fa-fw"></i> My Referees</a>
                                </li>
<li>

                        <a href="<?php echo site_url('welcome/show_job')?>"><i class="fa fa-envelope fa-fw"></i> Complete</a>            

                                </li>


							
								
								<!--
<li>

                                    <a href="<?php echo site_url('welcome/bulksms')?>"><i class="fa fa-user fa-fw"></i> Bulk Contact Upload</a>
                                </li>

<li>



                                    <a href="<?php echo site_url('welcome/pcontacts')?>"><i class="fa fa-user fa-fw"></i> Send Bulk SMS</a>
                                </li>
                                
                                
                                <li>



                                    <a href="<?php echo site_url('examples/phone_contacts')?>"><i class="fa fa-user fa-fw"></i> Manage Phone Contacts</a>
                                </li>
			
<li>
                                    <a href="<?php echo site_url('examples/receivedsms_management')?>"><i class="fa fa-user fa-fw"></i> Received SMS</a>
                                </li>



<li>

                                    <a href="<?php echo site_url('examples/sentsms_management')?>"><i class="fa fa-user fa-fw"></i> Sent SMS</a>
                                </li>
			-->

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


    </div>
   
