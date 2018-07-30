 
<div class="container">
<p class="alert alert-info">Add Employment History</p>
 <?php echo $this->session->flashdata('successd');?>
      
<table class='table'>
<th>Institution Name</th>
<th>Year Registered</th>
<th>Valid Upto</th>
<th>Registration Number</th>

 
<?php echo form_open('apply/add_membership')?>
     
<tr>
     <td> <input type="text" name="institution_name" placeholder="Institution Name" required></td>  
<td><input type="text" name="year_registered" placeholder="Year Registered..." required></td>
<td> <input type="text" name="valid" placeholder="Enter Year Valid Upto.." required></td>
<td> <input type="text" name="registration_no" placeholder="Enter Registration Number.." required></td>
 <td>    

  </td>
  </tr>
<tr>

  <td> <button class="btn btn-primary">Add Membership</button></td>
  </div>
   </tr> 
 
    
</div>   

<?php echo form_close();?>
</table>
</div>
