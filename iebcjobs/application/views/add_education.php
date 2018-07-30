

<div class="container">
<p class="alert alert-info">Add Education</p>
  <?php echo $this->session->flashdata('successd');?>
 
      
      <?php echo form_open('apply/add_education')?>
      <table class="table table-striped">
         


<tr >
<?php
echo "<td colspan='2'><input type='text' name='study1' placeholder='Enter name of Colledge/University' size='50px' id='study1' required /></td>";
echo "<td>From: <select name='from' id='study1periodfrom'>

<option value=''>Select year from...</option>";
$year=date('Y'); 
for ($i=1980;$i<=$year;$i++)
{
echo "<option value=".$i.">".$i."</option>";
}              			
echo "</select>



				      To:

                        <select name='to' id='study1periodto'>

                        	<option value=''> Select year to...</option>";
for ($i=1980;$i<=$year;$i++){
echo "<option value=".$i.">".$i."</option>";
}    
?>

</td>
<td>

<input type="text" name='course_type1' placeholder="Enter Course Name...">
					 <?php
//echo form_dropdown('course_type1', $select_courses);
?>
</td>
<td>
<input type="text" name='grades1' placeholder="Enter the Grade Attained...">

<?php
//echo form_dropdown('grades1', $select_grades);
?>
</td>
</tr>


  
</table>
 <button class="btn btn-primary">Submit to Add Education</button>
  </div>
    
     
  </div>
    
</div>   

<?php echo form_close();?>

