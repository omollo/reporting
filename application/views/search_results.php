

<div id="topcl"> </div>
<div class="container">

    <div class="span12">
<a href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">Tanzania Postal Bank - External Job Application.
</a>
<hr>

<form action="<?php echo base_url()?>index.php/addcourse/generate" method="post">
</table>
<br>
<table class="table">
<?php 
if(isset($applicants))
{
?>
<th>User ID</th>
<th>Vacancy Number</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Qualification Codes</th>
<?php if (isset($applicants)): foreach ($applicants as $apps): ?>
 <tr>

<td><?php echo $apps['uid']; ?> </td> <td> <?php echo $apps['vacancy_no']; ?></td> 
<td> <?php echo $apps['fname']; ?></td> <td> <?php echo $apps['mname']; ?></td>
<td> <?php echo $apps['qualification_code']; ?></td> 

</tr>

<?php endforeach; else: ?>
    <font color="red"> <h5>No results found...</h5></font>
<?php endif; ?>
</table>
<a href="<?php echo site_url('addcourse/search_vac')?>" class="btn btn-danger btn-large"> Go Back   </a>    <input type="submit" class="btn btn-success btn-large" value="Generate Code">



<?php 
}else
{
?>
 <font color="red"> <h5>No results found...</h5></font>
<?php
}
?>
</form>


</div>
</div>
</div>
