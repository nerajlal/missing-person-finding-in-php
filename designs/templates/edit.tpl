<html>
<body>
{foreach from=$data item="d"}
<form method="POST" action="">
<center>
<table>
<input type="hidden" name="hide" value="h">
<tr><td>Name</td><td><input type="text" name="a" value="{$d.name}"></td></tr>
<tr><td>Address</td><td><textarea name="b">{$d.address}</textarea></td></tr> 
<tr><td>Gender</td><td><select name="gender"><option>{$d.gender}</option><option>male</option><option>female</option></select></td></tr>
<tr><td>Email</td><td><input type="email" name="c" value="{$d.email}"></td></tr>
<tr><td></td><td><input type="submit" value="edit"></td>
</tr>
</table>
</center>
</form>
{/foreach}
</body>
</html>
