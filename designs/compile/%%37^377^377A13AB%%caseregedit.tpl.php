<?php /* Smarty version 2.6.26, created on 2022-03-24 08:14:24
         compiled from caseregedit.tpl */ ?>
<html>
<head><title>caseregistration</title>
</head>
<body>
<center style="margin-top:5rem">
<table>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
<form action="" method="POST">
<input type="hidden" name="hide" value="h">
<tr><td>Case</td><td><input type="text" name="case" value="<?php echo $this->_tpl_vars['d']['cases']; ?>
"  class="form-control"></td></tr>
<tr><td>Case Details</td><td><textarea name="casedetails"  class="form-control"><?php echo $this->_tpl_vars['d']['casedetails']; ?>
</textarea></td></tr>
<tr><td>Occurence Day</td><td><input type="text" name="occurenceday" value="<?php echo $this->_tpl_vars['d']['occurenceday']; ?>
"  class="form-control"></td></tr>
<tr><td>Occurence Date</td><td><input type="date" name="occurencedate" value="<?php echo $this->_tpl_vars['d']['occurencedate']; ?>
"  class="form-control"></td></tr>
<tr><td>Occurence Time</td><td><input type="time" name="occurencetime" value="<?php echo $this->_tpl_vars['d']['occurencetime']; ?>
"  class="form-control"></td></tr>
<tr><td>Occurence Place</td><td><input type="text" name="occurenceplace" value="<?php echo $this->_tpl_vars['d']['occurenceplace']; ?>
"  class="form-control"></td></tr>
<tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr>
</form>
<?php endforeach; endif; unset($_from); ?>
</table>
</center>
</body>
</html>