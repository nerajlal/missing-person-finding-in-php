<html>
<head><title>postmortemrequest</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	
	<tr><td>Hospital Name</td><td><select name="hospitalname" class="form-control">
	<option>select</option>
	{foreach from=$data item="d"}
	<option value="{$d.loginid}">{$d.hospitalname}</option>
	<!-- <option>ssr</option>
	<option>kollam district hospital</option>
	<option>lms</option> -->
	{/foreach}
	</select></td></tr>
	<tr><td>Patient Name</td><td><input type="text" name="patientname" class="form-control"></td></tr>
	<tr><td>Address</td><td><textarea name="address" class="form-control"></textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control"></td></tr>
	<tr><td>Death Date</td><td><input type="date" name="deathdate" class="form-control"></td></tr>
	<tr><td>Age</td><td><input type="text" name="age" class="form-control"></td></tr>
	<tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female</td></tr>
	<tr><td></td><td><input type="submit" value="submit" class="btn btn-primary"></td></tr> 
	</form>

	</table>
	</center>
</body>
</html>