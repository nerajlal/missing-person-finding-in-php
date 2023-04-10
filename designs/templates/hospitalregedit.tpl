<html>
<head><title>hospital registration</title>
</head>
<body>
	<center>
	<table>
	{foreach from=$data item="d"}
	<form method="POST" action="">
	<input type="hidden" name="hide" value="m">
	<tr><td>Hospital Name</td><td><input type="text" name="hospitalname" value="{$d.hospitalname}" class="form-control"></td></tr>
	<tr><td>Address</td><td><textarea name="address"  class="form-control">{$d.address}</textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" value="{$d.pincode}" class="form-control"></td></tr>
	<tr><td>District</td><td><select name="district" class="form-control">
	<option>kollam</option>
	<option>Trivandrum</option>
	<option>Alappuzha</option>
	<option>pathanamthitta</option>
	<option>kottayam</option>
	<option>Idukki</option>
	<option>Ernakulam</option>
	<option>Thrissur</option>
	<option>Palakkad</option>
	<option>Malappuram</option>
	<option>kozhikode</option>
	<option>Wayanad</option>
	<option>Kannur</option>
	<option>Kasaragod</option>{$d.district}
	</select></td></tr>
	<tr><td>City</td><td><input type="text" name="city" value="{$d.city}" class="form-control"></td></tr>
	<tr><td>Contact No:</td><td><input type="text" name="contactno" value="{$d.contactno}" class="form-control"></td></tr>
	<tr><td>Email</td><td><input type="email" name="email" value="{$d.email}" class="form-control"></td></tr>
   <tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	</form>
	{/foreach}
	</table>
	</center>
</body>
</html>