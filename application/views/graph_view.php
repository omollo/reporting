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
          url: "<?php echo base_url();?>index.php/welcome/gtest",
          dataType: "json",
	 series: {0: {visibleInLegend:false}},
          async: false
          }).responseText;
      // Create our data table out of JSON data loaded from server.
     // alert(jsonData);return false;
      var data = new google.visualization.DataTable(jsonData);
     // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('piechart_div'));
      chart.draw(data, {width: 850, height: 440});
    }
</script>
<script type="text/javascript">
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
  // Set a callback to run when the Google Visualization API is loaded.
 google.charts.setOnLoadCallback(pie_chart);
    function pie_chart() {
      var jsonData = $.ajax({
          url: "<?php echo base_url();?>index.php/welcome/gtestnot",
          dataType: "json",
          async: false
          }).responseText;
      // Create our data table out of JSON data loaded from server.
     // alert(jsonData);return false;
      var data = new google.visualization.DataTable(jsonData);
     // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('piechartnot_div'));
      chart.draw(data, {width: 800, height: 440});
    }
</script>

<script type="text/javascript">

    // Load the Visualization API and the piechart package.
    google.load('visualization', '1', {'packages':['corechart']});

    // Set a callback to run when the Google Visualization API is loaded.
    google.setOnLoadCallback(drawChart);

    function drawChart() {
      var jsonData = $.ajax({
          url: "<?php echo base_url();?>index.php/welcome/gtestnot",
          dataType:"json",
          async: false
          }).responseText;

      // Create our data table out of JSON data loaded from server.
      var data = new google.visualization.DataTable(jsonData);

      // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(data, {width: 400, height: 240});
    }

    </script>

<script type="text/javascript">
    // Load the Visualization API and the piechart package.
    google.charts.load('current', {'packages':['corechart']});
  // Set a callback to run when the Google Visualization API is loaded.
 google.charts.setOnLoadCallback(pie_chart);
    function pie_chart() {
      var jsonData = $.ajax({
          url: "<?php echo base_url();?>index.php/welcome/gettime",
          dataType: "json",
          async: false
          }).responseText;
      // Create our data table out of JSON data loaded from server.
     // alert(jsonData);return false;
      var data = new google.visualization.DataTable(jsonData);
     // Instantiate and draw our chart, passing in some options.
      var chart = new google.visualization.PieChart(document.getElementById('piechart2_div'));
      chart.draw(data, {width: 500, height: 440});
    }
</script>

  <script type="text/javascript">
         // Load the Visualization API and the line package.
         google.charts.load('current', {'packages':['corechart']});
         // Set a callback to run when the Google Visualization API is loaded.
         google.charts.setOnLoadCallback(drawChart);
          
         function drawChart() {
              $.ajax({
                type: 'POST',
                url: '<?php echo base_url();?>index.php/welcome/getdata',
                success: function (data1) {
                  var data = new google.visualization.DataTable();
                  // Add legends with data type
                 data.addColumn('string', 'Year');
                 data.addColumn('number', 'Sales');
  		 data.addColumn('number', 'Sales');
                 //Parse data into Json
                 var jsonData = $.parseJSON(data1);

              for (var i = 0; i < jsonData.length; i++) {
                   data.addRow([jsonData[i].opened_in_time, parseInt(jsonData[i].opened_from_6am_to_6_30),parseInt(jsonData[i].opened_after_6_30)]);
                 }
// thi 
                  
                 var options = {
                  legend: '',
                  pieSliceText: 'label',
                  title: 'Opening Time Statistics',
                };
  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));
                chart.draw(data, options);
               }
            });
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
                            <i class="fa fa-database fa-fw"></i> Constituency Statistics <a href="<?php echo site_url('examples/opening_time_management')?>">Show Details </a>
                           



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


<!--<div id="piechart"></div> -->




<div id="piechart_div"></div>



<h4> Yet to Open Polling Stations</h4>
<div id="piechartnot_div"></div>



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
