<html>
<head><title>Complaint edit</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	{foreach from=$data item="d"}
	<form method="POST" action="">
	
	<input type="hidden" name="hide" value="h">
	
	<tr><td>Complaint Subject</td><td><input type="text" name="complaintsubject" value="{$d.subject}" class="form-control"></td></tr>
	<tr><td>Complaint</td><td><textarea name="complaint"  class="form-control">{$d.complaint}</textarea></td></tr>
	
	<tr><td></td><td><input type="submit" value="UPDATE" class="btn btn-primary"></td></tr> 

	</form>
	{/foreach}
	</table>
	</center>
</body>
</html>