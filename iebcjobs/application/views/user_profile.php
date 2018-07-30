<!DOCTYPE html>

<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width">



  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<style>
input{


}

</style>


  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>IEBC - Careers Application </title>
 
     
 <script>
     
      $(document).ready(function(){

        $("#add_edu").click( function()
           {
            $('#myModal1').modal('hide');
              $('#myModal4').modal('show');
           }
        );
      });
    </script>
    
    <script type="text/javascript">
      $(document).ready(function(){
      $('#vedu').popover({
    html: true,
    trigger: 'hover',
    container: '#vedu',
    placement: 'top',
    title: 'Educational Background',
    content: function () {
        return '<div class="box">Click this button to view and Add more Educational Background</div>';
    }
});
      });  
        </script>
      
      
      
      
    <script type="text/javascript">
      $(document).ready(function(){
      $('#vedu').popover({
    html: true,
    trigger: 'hover',
    container: '#vedu',
    placement: 'top',
    title: 'Educational Background',
    content: function () {
        return '<div class="box">Click this button to view and Add more Educational Background</div>';
    }
});
      });  
        </script>
        
     <script type="text/javascript">
      $(document).ready(function(){
      $('#cvinfo').popover({
    html: true,
    trigger: 'hover',
    container: '#cvinfo',
    placement: 'top',
    title: 'Curiculum Vitae (Resume) Details',
    content: function () {
        return '<div class="box">Your CV must NOT be more than 300KB of size, MUST NOT contain any of these special characters [. > < -] and with atleast one of the following File Extension [.doc .pdf .jpg .png]</div>';
    }
    });
      });  
        </script>
    <!--    hqfin0406 -->
        
         <script type="text/javascript">
      $(document).ready(function(){
      $('#vemp').popover({
    html: true,
    trigger: 'hover',
    container: '#vemp',
    placement: 'top',
    title: 'Employment History',
    content: function () {
        return '<div class="box">Click this button to view and Add more of your Employment History.</div>';
    }
});
      });  
        </script>
  
    
    <script>
     
      $(document).ready(function(){                  

        $("#add_proff").click( function()
           {
            $('#myModal2').modal('hide');
              $('#myModal5').modal('show');
           }
        );
      });
    </script>
    
    <script>
     
      $(document).ready(function(){

        $("#add_emp").click( function()
           {
            $('#myModal3').modal('hide');
              $('#myModal6').modal('show');
           }
        );
      });
    </script>
  
  
 


</script>
<script type="text/javascript">
       
    function submitForm(){
        
        alert('hey');
        
        document.getElementById("edit_profile").submit();
        
    }
    </script>

<!-- this is to make in the move to make it happen in the going -->

<script type="text/javascript">
    $(document).ready(function(){
         $("#eemail").attr("disabled", "disabled");
         $("#emname").attr("disabled", "disabled");
          $("#elname").attr("disabled", "disabled");
          $("#ephone").attr("disabled", "disabled");
          $("#efnames").attr("disabled", "disabled");
          $("#save_details").attr("disabled", "disabled");                
          $("#epcode").attr("disabled", "disabled");
          $("#eaddressp").attr("disabled", "disabled");
        
    });
    </script>



<script type="text/javascript">

function EnableAccountInputs()
{
document.getElementById('efnames').disabled=false;
document.getElementById('eemail').disabled=false;
document.getElementById('elname').disabled=false;
document.getElementById('emname').disabled=false;
document.getElementById('ephone').disabled=false;
document.getElementById('epcode').disabled=false;
document.getElementById('eaddressp').disabled=false;
document.getElementById('save_details').disabled=false;
}
</script>

<script type="text/javascript">
    $(document).ready(function(){
    	// Smart Wizard 	
     $('#wizard').smartWizard();
      
   function onFinishCallback(){
        $('#wizard').smartWizard('showMessage','Finish Clicked');

		}     
		});
</script>


<script>
jQuery(function() {

$('#aperror').delay(5000).fadeOut('slow');
// this is for it
});
// this is to notify the above in the
</script>


<style>
#s_message{
width:60%;

}
</style>


<script type="text/javascript">
   
$(document).ready(function() {
 alert('hey');
 $('#cbtn').click(function(){
     alert('hey');
     $('#Fmodal').modal('hide');
     
 });
 

});
    
</script>
    

</head>
<body>
	<div>
<center>


	
	<center></div>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">         Welcome to IEBC - iRecruitment Portal </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                
               
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-home fa-fw"></i> 
                           



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            

  
        <p>
<marquee behavior="alternate">Use this portal to apply the vacancies that we have recently advertised. </marquee>
            </p>
       
    </center>    <div id="aperror">
           
 
  <?php print_r ($error);?>
       

            
          </div>
                        <!-- /.panel-body -->
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
</html>
