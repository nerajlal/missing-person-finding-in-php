<html>
<head><title>message</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<tr><td>Hospital name</td><td><select name="hospitalname" class="form-control">
		<option>select</option>
		{foreach from=$data item="d"}
	<option value="{$d.loginid}">{$d.hospitalname}</option>
	{/foreach}
		
	</select></td></tr>
	<tr><td>Message </td><td><input type="text" name="message" class="form-control"></td></tr>
	<tr><td></td><td><input type="submit" value="SEND" class="btn btn-primary"></td></tr> 
	</form>

	</table>
	</center>
</body>
</html>