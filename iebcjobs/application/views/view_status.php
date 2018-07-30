<div class="row">
<div  class="panel">
<p>
<?php foreach($urecords->result() as $record): ?>
<h3>The Status for the terminal id: <b><?php echo $record->current_terminal_id; ?></b></h3>
<hr>
</p>
<p>
<?php echo $term_logoff_error;?>
</p>

<p>
<table>

 


<tr>
<td>Card Number:</td> <td><b><?php echo $record->teller_card; ?></b></td>
</tr>

<tr>
<td>Current Terminal ID:</td> <td><b><?php echo $record->current_terminal_id;?></b></td>
</tr>
</table>



 


<form action="<?php echo base_url()?>index.php/login/terminal_off" method="post">
<input type="hidden" name="tid" value="<?php echo $record->current_terminal_id;?>">
<input type="hidden" name="cardno" value="<?php echo $record->teller_card;?>">
 <a href="<?php echo site_url('login/show_profile')?>"><< Go Back </a> <input type="submit" class="button" value="Log Off">
</form>

 <?php endforeach; ?>


</div>
</div>
