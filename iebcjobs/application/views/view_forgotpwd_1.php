<div class="row">
<div class="panel">
<h2> Forgot Password</h2>
<hr>
<p>
Enter Your email address in the input bellow:
</p>
<form action="<?php echo base_url()?>index.php/login/checkemail" method="post" />
<table>
    
<tr>
<td>Email Address: </td><td><input type="email" id="email" name="email" size="70px"></td>
</tr>

<tr>
<td> </td>
<td><input type="submit"  class="button" value="Submit"></td>
</tr>

</table>

</div>
</div>