<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.js" /></script>
<link rel="stylesheet" type="text/css"
          href="https://fonts.googleapis.com/css?family=Quicksand">

<style>

.sidebar .sidebar-nav 
{

background-color:blue;


}
#side-menu li{
 font-family: 'Quicksand';
font-weight:bold;
cbackground: rgba(255,255,255,1);
background: -moz-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(249,249,249,1) 12%, rgba(246,246,246,1) 19%, rgba(237,237,237,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(255,255,255,1)), color-stop(12%, rgba(249,249,249,1)), color-stop(19%, rgba(246,246,246,1)), color-stop(100%, rgba(237,237,237,1)));
background: -webkit-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(249,249,249,1) 12%, rgba(246,246,246,1) 19%, rgba(237,237,237,1) 100%);
background: -o-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(249,249,249,1) 12%, rgba(246,246,246,1) 19%, rgba(237,237,237,1) 100%);
background: -ms-linear-gradient(left, rgba(255,255,255,1) 0%, rgba(249,249,249,1) 12%, rgba(246,246,246,1) 19%, rgba(237,237,237,1) 100%);
background: linear-gradient(to right, rgba(255,255,255,1) 0%, rgba(249,249,249,1) 12%, rgba(246,246,246,1) 19%, rgba(237,237,237,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#ededed', GradientType=1 );

background-color:#000000 !important;
}
.navbar{
background-color:#000000
}

</style>

<!--<link href='http://fonts.googleapis.com/css?family=Ubuntu:300' rel='stylesheet' type='text/css'>-->
 

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>Bensen Solution</title>
 
  <!-- Included CSS Files (Uncompressed) -->
  <!--
  <link rel="stylesheet" href="stylesheets/foundation.css">
  this is to style the moves in the making to handle the ongoing movements to include
  -->

  <!-- Included CSS Files (Compressed) -->




    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url()?>bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">







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
                <a class="navbar-brand" href="index.html"><b>Welcome to Bensen Solutions</b> </a>
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
                            <a href="#"><i class="glyphicon-envelope"></i> Home</a>
                        </li>


<li>
<a href="<?php echo site_url('borrower/loan_calc')?>"><i class="fa fa-envelope  fa-fw"></i> Loan Calculator</a>
</li>

<li>
<a href="<?php echo site_url('borrower/apply_loan')?>"><i class="fa fa-envelope  fa-fw"></i> Apply Loan</a>
</li>

<li>
<a href="<?php echo site_url('borrower/loans')?>"><i class="fa fa-envelope  fa-fw"></i> My Loans</a>
</li>




                                
                               


<li>

                                    <a href="#"><i class="fa fa-envelope fa-fw"></i> Change password</a>
                                </li>

				
			
			

                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>


    </div>
   
