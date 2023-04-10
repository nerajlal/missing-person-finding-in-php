<?php /* Smarty version 2.6.26, created on 2022-03-24 08:13:01
         compiled from complaintedit.tpl */ ?>
<html>
<head><title>Complaint edit</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<form method="POST" action="">
	
	<input type="hidden" name="hide" value="h">
	
	<tr><td>Complaint Subject</td><td><input type="text" name="complaintsubject" value="<?php echo $this->_tpl_vars['d']['subject']; ?>
" class="form-control"></td></tr>
	<tr><td>Complaint</td><td><textarea name="complaint"  class="form-control"><?php echo $this->_tpl_vars['d']['complaint']; ?>
</textarea></td></tr>
	
	<tr><td></td><td><input type="submit" value="UPDATE" class="btn btn-primary"></td></tr> 

	</form>
	<?php endforeach; endif; unset($_from); ?>
	</table>
	</center>
</body>
</html>