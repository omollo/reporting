<div class="row">
<div  class="panel">
<p>
<?php foreach($urecords->result() as $record): ?>
<h3>The Status for the terminal id: <b><?php echo $record->tellerid; ?></b></h3>
<hr>
</p>
<p>
<?php echo $term_logoff_error;?>
</p>

<p>
<table>
<tr>
<td>Terminal Logged in?</td>

<td>
<b>
 <font color="red">No</font>
 </b>
 </td>
 
</tr>

<tr>
<td>Card Number:</td> <td><b><?php echo $record->card_no; ?></b></td>
</tr>
<tr>
<td>Current Terminal ID:</td> <td><b><?php echo $record->status;?></b></td>
</tr>
</table>



 


<form action="<?php echo base_url()?>index.php/login/terminal_off" method="post">
<input type="hidden" name="tid" value="<?php echo $record->tellerid;?>">
<input type="submit" class="button" value="Log Off">
</form>

 <?php endforeach; ?>


</div>
</div>
