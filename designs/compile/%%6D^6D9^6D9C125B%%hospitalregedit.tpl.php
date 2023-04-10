<?php /* Smarty version 2.6.26, created on 2023-02-19 07:19:41
         compiled from hospitalregedit.tpl */ ?>
<html>
<head><title>hospital registration</title>
</head>
<body>
	<center>
	<table>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="m">
	<tr><td>Hospital Name</td><td><input type="text" name="hospitalname" value="<?php echo $this->_tpl_vars['d']['hospitalname']; ?>
" class="form-control"></td></tr>
	<tr><td>Address</td><td><textarea name="address"  class="form-control"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" value="<?php echo $this->_tpl_vars['d']['pincode']; ?>
" class="form-control"></td></tr>
	<tr><td>District</td><td><select name="district" class="form-control">
	<option>kollam</option>
	<option>Trivandrum</option>
	<option>Alappuzha</option>
	<option>pathanamthitta</option>
	<option>kottayam</option>
	<option>Idukki</option>
	<option>Ernakulam</option>
	<option>Thrissur</option>
	<option>Palakkad</option>
	<option>Malappuram</option>
	<option>kozhikode</option>
	<option>Wayanad</option>
	<option>Kannur</option>
	<option>Kasaragod</option><?php echo $this->_tpl_vars['d']['district']; ?>

	</select></td></tr>
	<tr><td>City</td><td><input type="text" name="city" value="<?php echo $this->_tpl_vars['d']['city']; ?>
" class="form-control"></td></tr>
	<tr><td>Contact No:</td><td><input type="text" name="contactno" value="<?php echo $this->_tpl_vars['d']['contactno']; ?>
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