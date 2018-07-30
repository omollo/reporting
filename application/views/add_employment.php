 
<div class="container">
<p class="alert alert-info">Add Employment History</p>
 <?php echo $this->session->flashdata('successd');?>
       <table class='table'>
<th>Name of Employer</th>
<th>Industry</th>
<th>Position Held</th>
<th>Experience</th>  
<?php echo form_open('apply/add_employment')?>
     
<tr>
     <td> <input type="text" name="employer_name" placeholder="Name of the Employer" required></td>  
<td><input type="text" name="industry" placeholder="Enter the Industry here..." required></td>
<td> <input type="text" name="post" placeholder="Enter the Position held..." required></td>
 <td>    
<?php
echo form_dropdown('experience_code', $select_exp);
?>

  </td>
  </tr>
<tr>

  <td> <button class="btn btn-primary">Add Employment History</button></td>
  </div>
   </tr> 
 
    
</div>   

<?php echo form_close();?>
</table>
</div>
