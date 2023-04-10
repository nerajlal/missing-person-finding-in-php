<?php /* Smarty version 2.6.26, created on 2023-02-19 07:07:45
         compiled from postmortemrqst.tpl */ ?>
<html>
<head><title>postmortemrequest</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	
	<tr><td>Hospital Name</td><td><select name="hospitalname" class="form-control">
	<option>select</option>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<option value="<?php echo $this->_tpl_vars['d']['loginid']; ?>
"><?php echo $this->_tpl_vars['d']['hospitalname']; ?>
</option>
	<!-- <option>ssr</option>
	<option>kollam district hospital</option>
	<option>lms</option> -->
	<?php endforeach; endif; unset($_from); ?>
	</select></td></tr>
	<tr><td>Patient Name</td><td><input type="text" name="patientname" class="form-control"></td></tr>
	<tr><td>Address</td><td><textarea name="address" class="form-control"></textarea></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control"></td></tr>
	<tr><td>Death Date</td><td><input type="date" name="deathdate" class="form-control"></td></tr>
	<tr><td>Age</td><td><input type="text" name="age" class="form-control"></td></tr>
	<tr><td>Gender</td><td><input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female</td></tr>
	<tr><td></td><td><input type="submit" value="submit" class="btn btn-primary"></td></tr> 
	</form>

	</table>
	</center>
</body>
</html>