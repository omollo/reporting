  <head>


</head>
<div class="container">
<p class="alert alert-info">Employment History</p>
    
 <table class="table">        
<th>Employer Name</th>
<th>Industry</th>
<th>Experience (Years)</th>
   
  <?php if (isset($employ_de)): foreach ($employ_de as $emp): ?>
 
<tr>
     
 <td><?php echo $emp['employer_name']?> </td>             
 <td> <?php echo $emp['industry']?> </td>   
<td> <?php echo $emp['exp_desc']?> </td>   
                
</tr>
  
  
 <?php endforeach; else: ?>
 
    <div class="alert alert-message">You have not updated your proffesions here.. </div>
 
    <?php endif; ?>   
   
  </div>
    
 </table>

<a href="<?php echo site_url('welcome/add_employment')?>" class="btn btn-primary">Add Employment History</a></button> <a href="<?php echo base_url()?>index.php/usermnt/employer_management" class="btn btn-primary"> View Employment History</a>
   </div>
 </div>

    

