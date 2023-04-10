<?php /* Smarty version 2.6.26, created on 2023-02-19 07:20:56
         compiled from publicregedit.tpl */ ?>
<html>
<head><title>public registration</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="m">
	<tr><td>Fullname</td><td><input type="text" name="fullname" value="<?php echo $this->_tpl_vars['d']['fullname']; ?>
" class="form-control"></td></tr>
	
	<tr><td>Address</td><td><textarea name="address" class="form-control"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" value="<?php echo $this->_tpl_vars['d']['pincode']; ?>
" class="form-control"></td></tr>
	<tr><td>District</td><td><select name="district" value="<?php echo $this->_tpl_vars['d']['district']; ?>
" class="form-control">
	<option>Kollam</option>
	<option>Trivandrum</option>
	<option>Alappuzha</option>
	<option>Pathanamthitta</option>
	<option>Kottayam</option>
	<option>Idukki</option>
	<option>Ernakulam</option>
	<option>Thrissur</option>
	<option>Palakkad</option>
	<option>Malappuram</option>
	<option>Kozhikode</option>
	<option>Wayanad</option>
	<option>Kannur</option>
	<option>Kasaragod</option>
	</select></td></tr>
	<tr><td>City</td><td><input type="text" name="city" value="<?php echo $this->_tpl_vars['d']['city']; ?>
" class="form-control"></td></tr>
	<tr><td>Gender</td>
	 <?php if ($this->_tpl_vars['d']['gender'] == 'male'): ?>

   <td><input type="radio" name="gender" value="male" checked>Male
   <input type="radio" name="gender" value="female">Female</td>
   <?php else: ?>
   <td><input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female" checked>Female</td>
<?php endif; ?>

	<!-- <td><input type="radio" name="gender" value="male">Male
	<input type="radio" name="gender" value="female">Female</td></tr> -->
	<tr><td>Aadharno</td><td><input type="text" name="aadharno" value="<?php echo $this->_tpl_vars['d']['aadharno']; ?>
" class="form-control"></td></tr>
	<tr><td>Contactno</td><td><input type="text" name="contactno" value="<?php echo $this->_tpl_vars['d']['contactno']; ?>
" class="form-control"></td></tr>
	<tr><td>Email</td><td><input type="email" name="email" value="<?php echo $this->_tpl_vars['d']['email']; ?>
" class="form-control"></td></tr> 
	<tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	
	</form>
	<?php endforeach; endif; unset($_from); ?>
	</table>
	</center>
</body>
</html>