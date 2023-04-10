<?php /* Smarty version 2.6.26, created on 2022-01-12 10:24:46
         compiled from edit.tpl */ ?>
<html>
<body>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
<form method="POST" action="">
<center>
<table>
<input type="hidden" name="hide" value="h">
<tr><td>Name</td><td><input type="text" name="a" value="<?php echo $this->_tpl_vars['d']['name']; ?>
"></td></tr>
<tr><td>Address</td><td><textarea name="b"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea></td></tr> 
<tr><td>Gender</td><td><select name="gender"><option><?php echo $this->_tpl_vars['d']['gender']; ?>
</option><option>male</option><option>female</option></select></td></tr>
<tr><td>Email</td><td><input type="email" name="c" value="<?php echo $this->_tpl_vars['d']['email']; ?>
"></td></tr>
<tr><td></td><td><input type="submit" value="edit"></td>
</tr>
</table>
</center>
</form>
<?php endforeach; endif; unset($_from); ?>
</body>
</html>