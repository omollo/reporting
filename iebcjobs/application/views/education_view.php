<body>
	<div>
<center>


	
	<center></div>


        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Education Background</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            
                
               
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-database fa-fw"></i> 
                           



                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            


                <p class="alert alert-info">
             Educational Details
               </p> 
    <table class="table"> 
       
<th>School/Colledge/University</th>
<th>Period from</th>
<th>Period to</th>
<th>Course</th>

  
  <?php if (isset($educ_back)): foreach ($educ_back as $educ): ?>
         

        <tr>
   <td><?php echo $educ['nameofinstitute']?></td>
           <td><?php echo $educ['periodfrom']?></td>
<td> <?php echo $educ['periodto']?></td>
<td> <?php echo $educ['qualification_name']?></td>


     
 <?php endforeach; else: ?>
 
    <div class="alert alert-message">There are no Educational Backgrounds you applied. </div>
 
    <?php endif; ?>  
 </tr>    
      </tbody>
      </table>
   
<a href="<?php echo site_url('welcome/add_educa')?>" class="btn btn-primary">Add Education</a></button> <a href="<?php echo base_url()?>index.php/usermnt/education_management" class="btn btn-primary "> View Educational Background</a>

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
	

		
    </div>

       
                


