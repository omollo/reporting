
<div id="topcl"> </div>
<div class="container">

<div class="span12">
<a href="#"><img src="<?php echo base_url()?>images/tzlogo.png" height="200px" width="200px">Tanzania Postal Bank - Job Application.
</a>
<hr>

 <form action="<?php echo base_url()?>index.php/addcourse/sendemail" method="post" />

Vacancy Number: <b><?php echo $this->session->userdata('vacnumber')?></b>
<h3> Sending Email to Short Listed Applicants <small>NB: The salutation will be automatic, please concentrate on the body of the email. </small></h3>
<label>Subject
</label>

<input type="text" class="span12" placeholder="Enter the Email Subject here..." name="subject">

<label> Message</label>
<textarea name="msg" class="field span12" id="textarea" placeholder="Enter Email body here..." rows="6" >

</textarea>

<input type="submit" class="btn btn-success" value="Send Email to Shortlisted Candidates">
</div>
</div>
</div>
