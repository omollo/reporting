<head>
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>



<script type="text/javascript">
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
  // Set a callback to run when the Google Visualization API is loaded.
 google.charts.setOnLoadCallback(pie_chart);
    function pie_chart() {
      var jsonData = $.ajax({
          url: "<?php echo base_url();?>index.php/welcome/getturnout",
          dataType: "json",
          async: false
          }).responseText;
      // Create our data table out of JSON data loaded from server.
     // alert(jsonData);return false;
      var data = new google.visualization.DataTable(jsonData);
     // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('piechart'));
      chart.draw(data, {width: 800, height: 440});
    }
</script>

</head>
 <body>
	<div>
<center>	
	<center></div>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"></h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                
               
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-database fa-fw"></i> Voter Turnout Statistics <a href="<?php echo site_url('examples/voterturnout_management')?>">Show Details </a>
                           



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
Voter TurnOut

<div id="piechart"></div>











</div>


                        <!-- /.panel-body 0719175813-->
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
