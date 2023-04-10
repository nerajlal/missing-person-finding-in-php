<html>
<head><title>public registration</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	{foreach from=$data item="d"}
	<form method="POST" action="">
	<input type="hidden" name="hide" value="m">
	<tr><td>Fullname</td><td><input type="text" name="fullname" value="{$d.fullname}" class="form-control"></td></tr>
	
	<tr><td>Address</td><td><textarea name="address" class="form-control">{$d.address}</textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" value="{$d.pincode}" class="form-control"></td></tr>
	<tr><td>District</td><td><select name="district" value="{$d.district}" class="form-control">
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
	</select></td></tr>
	<tr><td>City</td><td><input type="text" name="city" value="{$d.city}" class="form-control"></td></tr>
	<tr><td>Gender</td>
	 {if $d.gender=='male'}

   <td><input type="radio" name="gender" value="male" checked>Male
   <input type="radio" name="gender" value="female">Female</td>
   {else}
   <td><input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female" checked>Female</td>
{/if}

	<!-- <td><input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female</td></tr> -->
	<tr><td>Aadharno</td><td><input type="text" name="aadharno" value="{$d.aadharno}" class="form-control"></td></tr>
	<tr><td>Contactno</td><td><input type="text" name="contactno" value="{$d.contactno}" class="form-control"></td></tr>
	<tr><td>Email</td><td><input type="email" name="email" value="{$d.email}" class="form-control"></td></tr> 
	<tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	
	</form>
	{/foreach}
	</table>
	</center>
</body>
</html>