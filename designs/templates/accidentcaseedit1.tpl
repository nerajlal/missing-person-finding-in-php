<html>
<head><title>AccidentcaseRegistration</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	{foreach from=$data item="d"}
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<!-- <tr><td>Missing person name</td><td><input type="text" name="missingpersonname"></td></tr>
	
	<tr><td>Address</td><td><textarea name="address" ></textarea></td></tr> -->
	<!-- <tr><td>Pincode</td><td><input type="text" name="pincode"></td></tr> -->
	<tr><td>District</td><td><select name="district" class="form-control">
	<option>Kollam</option>
	<option>Trivandrum</option>
	<option>Alappuzha</option>
	<option>Pathanamthitta</option>
	<option>Kottayam</option>
	<option>Idukki</option>
	<option>Ernakulam</option>
	<option>Thrissur</option>
	<option>Palakkad</option>
	<option>Malappuram</option>
	<option>Kozhikode</option>
	<option>Wayanad</option>
	<option>Kannur</option>
	<option>Kasaragod</option>
	{$d.district}
	</select></td></tr>
	<tr><td>City</td><td><input type="text" name="city" value="{$d.city}" class="form-control"></td></tr>
	<tr><td>Street</td><td><input type="text" name="street" value="{$d.street}" class="form-control"></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" value="{$d.pincode}" class="form-control"></td></tr>
	<tr><td>Accident Details</td><td><textarea name="accidentdetails" class="form-control">{$d.accidentdetails}</textarea></td></tr>
	<tr><td>Photo</td><td><input type="file" name="photo" value="{$d.photo}" class="form-control"></td></tr>
	<!-- <tr><td>Weight</td><td><input type="text" name="weight"></td></tr>
	<tr><td>Blood group</td><td><input type="text" name="bloodgroup"></td></tr>
	<tr><td>Identification Mark</td><td><input type="text" name="identificationmark"></td></tr>
	<tr><td>Missing place</td><td><input type="text" name="missingplace"></td></tr> -->
	<!-- <tr><td>Missing date</td><td><input type="text" name="missingdate"></td></tr> -->
	<!-- <tr><td>Photo</td><td><input type="file" name="photo"></td></tr>
	<tr><td>Other details</td><td><textarea name="otherdetails"></textarea></td></tr> -->
	<tr><td></td><td><input type="submit" value="update" class="btn btn-primary"></td></tr> 
	</form>
{/foreach}
	</table>
	</center>
</body>
</html>