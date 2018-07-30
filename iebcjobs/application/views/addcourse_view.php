
<div id="topcl"> </div>
<div class="container">

    <div class="span12">
<a href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">Tanzania Postal Bank -  Application.
</a>
<hr>

<p class="alert aler-info"> Job Vacancy Clustering  </p>
 <form action="<?php echo base_url()?>index.php/addcourse/cluster" method="post" />
          		
<table class="table table-striped">
<th>CheckBox</th>
<th> Course Description</th>
<input type="hidden" value="<?php echo $jid?>" name="jid">
<input type="hidden" value="<?php echo $this->session->userdata('vacancy_no')?>" name="vac_no"><br>
<input type="hidden" value="<?php echo $this->session->userdata('j_title')?>" name="j_title">
<?php if (isset($educations)): foreach ($educations as $edu): ?>

 <tr>

<td><input type="checkbox" id="select1"  value="<?php echo $edu['qualification_code']; ?>" name="code[]" class="selectit" /> </td>    <td> <?php echo $edu['qualification_name']; ?></td> <td> </td>

</tr>
<?php endforeach; else: ?>
    <font color="red"> <h3>No Jobs Selected</h3></font>
<?php endif; ?>
</table>

<input type="submit" value="Cluster" class="btn btn-success btn-large">

      
</div>
</div>
</div>


