<?php /* Smarty version 2.6.26, created on 2023-02-19 07:21:10
         compiled from missingperson.tpl */ ?>
<html>
<head><title>missing person</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<tr><td>Missing Person Name</td><td><input type="text" name="missingpersonname" class="form-control"></td></tr>
	
	<tr><td>Address</td><td><textarea name="address" class="form-control"></textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control"></td></tr>
	<tr><td>District</td><td><select name="district" class="form-control">
	<option>select</option>
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
	</select></td></tr>
	<tr><td>City</td><td><input type="text" name="city" class="form-control"></td></tr>
	<tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female</td></tr>
	<tr><td>Age</td><td><input type="text" name="age" class="form-control"></td></tr>
	<tr><td>Height</td><td><input type="text" name="height" class="form-control"></td></tr>
	<tr><td>Weight</td><td><input type="text" name="weight" class="form-control"></td></tr>
	<tr><td>Blood Group</td><td><input type="text" name="bloodgroup" class="form-control"></td></tr>
	<tr><td>Identification Mark</td><td><input type="text" name="identificationmark" class="form-control"></td></tr>
	<tr><td>Missing Place</td><td><input type="text" name="missingplace" class="form-control"></td></tr>
	<!-- <tr><td>Missing date</td><td><input type="text" name="missingdate"></td></tr> -->
	<tr><td>Photo</td><td><input type="file" name="photo" class="form-control"></td></tr>
	<tr><td>Other Details</td><td><textarea name="otherdetails" class="form-control"></textarea></td></tr>
	<tr><td></td><td><input type="submit" value="Register" class="btn btn-primary"></td></tr> 
	</form>

	</table>
	</center>
</body>
</html>