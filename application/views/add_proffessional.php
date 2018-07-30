 
<div class="container">
<p class="alert alert-info">Add Proffession</p>
 <?php echo $this->session->flashdata('successd');?>
        
<?php echo form_open('apply/add_proffesion')?>
      
<p>
      <input type="text" name="pstudy1" placeholder="Name of Learning Institute" autofocus="autofocus"required> 
      Qualification:

<input type="text" name="pequal" placeholder="Qualification, eg Proffesion, Training etc" required>
     
Course: <input type="text" name="courses" placeholder="eg CPA I, CPA II, Traid Union Studies.. etc" required>

<?php
//echo form_dropdown('courses', $select_others);
?>

  
  </p>
<hr>
   <button class="btn btn-primary">Submit to add Proffession</button>
  </div>
    
 
    
</div>   

<?php echo form_close();?>

</div>
