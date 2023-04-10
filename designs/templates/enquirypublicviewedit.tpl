<html>
<head><title>Enquiry</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>

	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<!-- <tr><td>Hospital name</td><td><input type="text" name="hospitalname"></td></tr> -->
	
	<tr><td>Hospital Name</td><td><select name="hospitalname" class="form-control">
	<option>select</option>
	{foreach from=$data item="d"}
	<option value="{$d.loginid}">{$d.hospitalname}</option>
	 {/foreach}
	
	</select></td></tr>
		{foreach from=$view item="b"}
	<tr><td>Enquiry</td><td><textarea name="enquiry" class="form-control">{$b.enquiry}</textarea></td></tr>

	<tr><td></td><td><input type="submit" value="UPDATE" class="btn btn-primary"></td></tr> 
	</form>
{/foreach}
	</table>
	</center>
</body>
</html>