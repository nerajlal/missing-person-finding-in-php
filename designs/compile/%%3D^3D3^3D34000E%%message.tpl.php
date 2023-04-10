<?php /* Smarty version 2.6.26, created on 2023-02-19 07:09:50
         compiled from message.tpl */ ?>
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
		<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<option value="<?php echo $this->_tpl_vars['d']['loginid']; ?>
"><?php echo $this->_tpl_vars['d']['hospitalname']; ?>
</option>
	<?php endforeach; endif; unset($_from); ?>
		
	</select></td></tr>
	<tr><td>Message </td><td><input type="text" name="message" class="form-control"></td></tr>
	<tr><td></td><td><input type="submit" value="SEND" class="btn btn-primary"></td></tr> 
	</form>

	</table>
	</center>
</body>
</html>