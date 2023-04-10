<?php /* Smarty version 2.6.26, created on 2022-03-26 10:56:51
         compiled from enquirypublicviewedit.tpl */ ?>
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
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<option value="<?php echo $this->_tpl_vars['d']['loginid']; ?>
"><?php echo $this->_tpl_vars['d']['hospitalname']; ?>
</option>
	 <?php endforeach; endif; unset($_from); ?>
	
	</select></td></tr>
		<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
	<tr><td>Enquiry</td><td><textarea name="enquiry" class="form-control"><?php echo $this->_tpl_vars['b']['enquiry']; ?>
</textarea></td></tr>

	<tr><td></td><td><input type="submit" value="UPDATE" class="btn btn-primary"></td></tr> 
	</form>
<?php endforeach; endif; unset($_from); ?>
	</table>
	</center>
</body>
</html>