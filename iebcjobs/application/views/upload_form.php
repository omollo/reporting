<html>
<head>
<title>Upload Form</title>
</head>
<body>
<div class="row">
<div class="panel">
<h3>Upload your CV </h3>
<hr>
<font color='blue'><?php echo $error;?></font>

<?php echo form_open_multipart('upload/do_upload');?>

<input type="file" name="userfile" size="50px" />

</p>
<table>


<tr>
 <td>Do you have any objections to our making inquires with your present / prevoius employer?</td>   <td>No<input type="radio" name="emp" value="no"></td><td>Yes<input type="radio" name="emp" value="yes"></td>
</tr>

<tr>
<td>Have you ever been Arrested, Indicted, Summoned into Court as a Defendant in a Criminal Proceeding and / or Convicted, Fined or Imprisoned for the Violation of any law?</td> 
<td> No<input type="radio" name="law" value="no"></td><td>Yes<input type="radio" name="law" value="yes"></td>
</tr>

<tr>
<td>Do you suffer from any physical impairment?</td> <td>No<input type="radio" name="impair" value="no"></td><td>Yes<input type="radio" name="impair" value="yes"></td>

</tr>

                <tr>
                	<td width='60%'>State in 200 words why you are best suited candidate for this job</td>
                    <td width='38%'><textarea name='comptency' id='comptency' cols='60' rows='3' class='fonts' style='FONT-SIZE: 10pt'></textarea></td>
                </tr>
				
                <tr>
                	<td width='60%'>List down your achievements in this fields</td>
                    <td width='38%'><textarea name='achievement' id='achievement' cols='60' rows='5' class='fonts' style='FONT-SIZE: 10pt'></textarea></td>
                </tr>

                <tr>
                  <td width='60%'>Current Salary(Ksh./pm):</td>
                  <td><input type='text' id='salary' name='salary' size='38'/></td>
                </tr>
				
                <tr>
                  <td width='60%'> Current Benefits(Ksh./pm):</td>
                  <td><input type='text' name='benefits' id='benefits' size='38'  /></td>
                </tr>
				
                <tr>
                  <td width='60%'>Expected salary (Ksh./pm):</td>
                  <td><input type='text' name='expected_salary' id='expected_salary' size='38' /></td>
                </tr>
               
                <tr>
</div>
<tr>
<td></td><td><input type="submit" value="Submit" class="button"></td>
</tr>
</p>
</div>
</form>
</div>



</body>
</html>