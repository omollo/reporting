
<head>
    
  <script type="text/javascript">
   
$(document).ready(function() {

 $('#rerror').delay(5000).fadeOut();

});

    
    </script> 
    
    
    
    </head>

<div id="topcl"> </div>
<div class="container">

    <div class="span12">
<img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">IEBC - External Job Application.
</a>

</a>
<hr>

<center>
    <p>
<h4>    Enter your Email Address on the input bellow.  </h4>
</p>
<p>
    <?php echo $errorem ?>
    
    </p>
<form action="<?php echo base_url()?>index.php/login/checkemail" method="post" />

<table> 
<tr>
<td>Email Address: </td><td><input type="email" id="email" name="email" placeholder="Enter your Email Addres..."size="70px" required></td>
</tr>

<tr>
<td> </td>
<td><input type="submit"  class="btn btn-success" value="Submit"></td>
</tr>
</table>

</div>
</div>
</center>
