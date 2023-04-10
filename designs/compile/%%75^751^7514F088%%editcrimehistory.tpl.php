<?php /* Smarty version 2.6.26, created on 2022-04-29 09:04:13
         compiled from editcrimehistory.tpl */ ?>
<html>
<head><title> </title>
</head>
<body>
	<center>
	<table>
	
	<form method="POST" action="">
	<input type="hidden" name="hide" value="m">
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<tr><td>Criminal name</td><td><input type="text" name="criminalname" value="<?php echo $this->_tpl_vars['d']['criminalname']; ?>
" class="form-control"></td></tr>
	<tr><td>Address</td><td><textarea name="address" class="form-control" ><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea></td></tr>
	<tr><td>Age</td><td><input type="text" name="age" value="<?php echo $this->_tpl_vars['d']['age']; ?>
" class="form-control"></td></tr>
	
	<tr><td>Gender</td>
	<?php if ($this->_tpl_vars['d']['gender'] == 'male'): ?>

   <td><input type="radio" name="gender" value="male" checked>Male
   <input type="radio" name="gender" value="female">Female</td>
   <?php else: ?>
   <td><input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female" checked>Female</td>
<?php endif; ?>

	
	<tr><td>Other details</td><td><textarea name="otherdetails" class="form-control"><?php echo $this->_tpl_vars['d']['otherdetails']; ?>
</textarea></td></tr>
	<?php endforeach; endif; unset($_from); ?>
   <tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	</form>
	
	</table>
	</center>
</body>
</html>