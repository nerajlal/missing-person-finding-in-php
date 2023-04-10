<?php /* Smarty version 2.6.26, created on 2023-02-19 07:09:41
         compiled from crimehistory.tpl */ ?>
<html>
<head><title>crime history </title>
</head>
<body>
	<center>
	<table>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="m">
	<tr><td>Criminal name</td><td><input type="text" name="criminalname" class="form-control"></td></tr>
	<tr><td>Address</td><td><textarea name="address"class="form-control" ></textarea></td></tr>
	<tr><td>Age</td><td><input type="text" name="age"class="form-control"></td></tr>
	
	<tr><td>Gender</td><td><input type="radio" name="gender" value="Male">Male<input type="radio" name="gender" value="Female">Female</td></tr>
	<tr><td>Other details</td><td><textarea name="otherdetails" class="form-control"></textarea></td></tr>
   <tr><td></td><td><input type="submit" value="submit" class="btn btn-primary"></td></tr> 
	</form>
	</table>
	</center>
</body>
</html>