<html>
<head><title> </title>
</head>
<body>
	<center>
	<table>
	
	<form method="POST" action="">
	<input type="hidden" name="hide" value="m">
	{foreach from=$data item="d"}
	<tr><td>Criminal name</td><td><input type="text" name="criminalname" value="{$d.criminalname}" class="form-control"></td></tr>
	<tr><td>Address</td><td><textarea name="address" class="form-control" >{$d.address}</textarea></td></tr>
	<tr><td>Age</td><td><input type="text" name="age" value="{$d.age}" class="form-control"></td></tr>
	
	<tr><td>Gender</td>
	{if $d.gender=='male'}

   <td><input type="radio" name="gender" value="male" checked>Male
   <input type="radio" name="gender" value="female">Female</td>
   {else}
   <td><input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female" checked>Female</td>
{/if}

	
	<tr><td>Other details</td><td><textarea name="otherdetails" class="form-control">{$d.otherdetails}</textarea></td></tr>
	{/foreach}
   <tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	</form>
	
	</table>
	</center>
</body>
</html>