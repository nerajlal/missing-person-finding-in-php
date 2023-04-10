<html>
<body>
<table border="1" align="center">
<tr><th>Name</th><th>Address</th><th>Gender</th><th>Email</th>
</tr>
{foreach from=$data item="b"}
<tr><td>{$b.name}</td><td>{$b.address}</td><td>{$b.gender}</td><td>{$b.email}</td><td><a href="edit.php?key={$b.logkey}">edit</a></td><td><a href="delete.php?key={$b.rkey}">delete</a></td></tr>
{/foreach}
</table>
<a href="logout.php">Logout</a>
</body>
</html>