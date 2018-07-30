  <head>


</head>
<div class="container">
<p class="alert alert-info">Proffessional Background</p>
    
 <table class="table">        
<th>Colledge/University</th>
<th>Qualification</th>
<th>Courses</th>
   
  <?php if (isset($proff_de)): foreach ($proff_de as $proffe): ?>
 
<tr>
     
 <td><?php echo $proffe['nameofinstitute']?> </td>             
 <td><?php echo $proffe['pqualification']?> </td>   
 <td> <?php echo $proffe['qualification_name']?> </td>
                
</tr>
  
  
 <?php endforeach; else: ?>
 
    <div class="alert alert-message">You have not updated your proffesions here.. </div>
 
    <?php endif; ?>   
   
  </div>
    
 </table>

<a href="<?php echo site_url('welcome/add_proffesss')?>" class="btn btn-primary">Add Proffessional</a></button> <a href="<?php echo base_url()?>index.php/usermnt/proffessional_management" class="btn btn-primary"> View Proffessional Background</a>
   </div>
 </div>

    

