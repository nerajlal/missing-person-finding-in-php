<html>
<head><title>AccidentcaseRegistration</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	{foreach from=$data item="d"}
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<tr><td>Patient name</td><td><input type="text" name="patientname" value="{$d.patientname}" class="form-control"></td></tr>
	
	<tr><td>Address</td><td><textarea name="address" class="form-control">{$d.address}</textarea></td></tr>
	 <tr><td>Pincode</td><td><input type="text" name="pincode" value="{$d.pincode}" class="form-control"></td></tr> 
	<!-- <tr><td>District</td><td><select name="district">
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
	<option>Kasaragod</option>
	</select></td></tr> -->

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
	<tr><td>Age</td><td><input type="text" name="age" value="{$d.age}" class="form-control"></td></tr>
	<tr><td>Bloodgroup</td><td><input type="text" name="bloodgroup" value="{$d.bloodgroup}" class="form-control"></td></tr>
	<!-- <tr><td>photo</td><td><textarea name="accidentdetails"></textarea></td></tr> -->
	<tr><td>Photo</td><td><input type="file" name="photo" value="{$d.photo}" class="form-control"></td></tr>
	<!-- <tr><td>Weight</td><td><input type="text" name="weight"></td></tr>
	<tr><td>Blood group</td><td><input type="text" name="bloodgroup"></td></tr>
	<tr><td>Identification Mark</td><td><input type="text" name="identificationmark"></td></tr>
	<tr><td>Missing place</td><td><input type="text" name="missingplace"></td></tr> -->
	<!-- <tr><td>Missing date</td><td><input type="text" name="missingdate"></td></tr> -->
	<!--  <tr><td>Photo</td><td><input type="file" name="photo"></td></tr> -->
	<tr><td>Other details</td><td><textarea name="otherdetails" class="form-control">{$d.otherdetails}</textarea></td></tr> 
	<tr><td>Admitted Date</td><td><input type="date" name="admitteddate" value="{$d.admitteddate}" class="form-control">
	<tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	</form>
{/foreach}
	</table>
	</center>
</body>
</html>