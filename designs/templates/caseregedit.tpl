<html>
<head><title>caseregistration</title>
</head>
<body>
<center style="margin-top:5rem">
<table>
{foreach from=$data item="d"}
<form action="" method="POST">
<input type="hidden" name="hide" value="h">
<tr><td>Case</td><td><input type="text" name="case" value="{$d.cases}"  class="form-control"></td></tr>
<tr><td>Case Details</td><td><textarea name="casedetails"  class="form-control">{$d.casedetails}</textarea></td></tr>
<tr><td>Occurence Day</td><td><input type="text" name="occurenceday" value="{$d.occurenceday}"  class="form-control"></td></tr>
<tr><td>Occurence Date</td><td><input type="date" name="occurencedate" value="{$d.occurencedate}"  class="form-control"></td></tr>
<tr><td>Occurence Time</td><td><input type="time" name="occurencetime" value="{$d.occurencetime}"  class="form-control"></td></tr>
<tr><td>Occurence Place</td><td><input type="text" name="occurenceplace" value="{$d.occurenceplace}"  class="form-control"></td></tr>
<tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr>
</form>
{/foreach}
</table>
</center>
</body>
</html>