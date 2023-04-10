<?php /* Smarty version 2.6.26, created on 2023-02-19 07:08:40
         compiled from policeregedit.tpl */ ?>
<html>
<head><title>police registration</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<tr><td>Station Id</td><td><input type="text" name="a" value="<?php echo $this->_tpl_vars['d']['stationid']; ?>
"  class="form-control" ></td></tr>
	<tr><td>Addressline 1</td><td><input type="text" name="b" value="<?php echo $this->_tpl_vars['d']['addline1']; ?>
"  class="form-control" ></td></tr>
	<tr><td>Addressline 2</td><td><textarea name="c"  class="form-control"><?php echo $this->_tpl_vars['d']['addline2']; ?>
</textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="d" value="<?php echo $this->_tpl_vars['d']['pincode']; ?>
"  class="form-control"></td></tr>
	<tr><td>District</td><td><select name="district"  class="form-control">
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
	<tr><td>City</td><td><input type="text" name="e" value="<?php echo $this->_tpl_vars['d']['city']; ?>
"  class="form-control"></td></tr>
	<tr><td>contact No:</td><td><input type="text" name="f" value="<?php echo $this->_tpl_vars['d']['contactno']; ?>
"  class="form-control"></td></tr>
	<tr><td>Email</td><td><input type="email" name="g" value="<?php echo $this->_tpl_vars['d']['email']; ?>
" class="form-control"></td></tr>
	<tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	
	</form>
	<?php endforeach; endif; unset($_from); ?>
	</table>
	</center>
</body>
</html>