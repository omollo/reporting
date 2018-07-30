  <head>


</head>
<div class="container">
<p class="alert alert-info">Membership</p>
    
 <table class="table">        
<th>Institution Name</th>
<th>Year Registered</th>
<th>Valid Upto</th>
 <th>Registration Number</th>

  <?php if (isset($member)): foreach ($member as $mem): ?>
 
<tr>
     
 <td><?php echo $mem['institution_name']?> </td>             
 <td> <?php echo $mem['year_registered']?> </td>   
<td> <?php echo $mem['valid_upto']?> </td>   
    <td> <?php echo $mem['registration_no']?> </td>              
</tr>
  
  
 <?php endforeach; else: ?>
 
    <div class="alert alert-message">You have not updated your proffesions here.. </div>
 
    <?php endif; ?>   
   
  </div>
    
 </table>

<a href="<?php echo site_url('welcome/add_membership')?>" class="btn btn-primary">Add Membership</a></button> <a href="<?php echo base_url()?>index.php/usermnt/membership_management" class="btn btn-primary"> View Membership </a>
   </div>
 </div>

    

