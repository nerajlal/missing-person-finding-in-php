<?php /* Smarty version 2.6.26, created on 2022-04-24 09:06:43
         compiled from accidentcaseedit1.tpl */ ?>
<html>
<head><title>AccidentcaseRegistration</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<!-- <tr><td>Missing person name</td><td><input type="text" name="missingpersonname"></td></tr>
	
	<tr><td>Address</td><td><textarea name="address" ></textarea></td></tr> -->
	<!-- <tr><td>Pincode</td><td><input type="text" name="pincode"></td></tr> -->
	<tr><td>District</td><td><select name="district" class="form-control">
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
	<?php echo $this->_tpl_vars['d']['district']; ?>

	</select></td></tr>
	<tr><td>City</td><td><input type="text" name="city" value="<?php echo $this->_tpl_vars['d']['city']; ?>
" class="form-control"></td></tr>
	<tr><td>Street</td><td><input type="text" name="street" value="<?php echo $this->_tpl_vars['d']['street']; ?>
" class="form-control"></td></tr>
	<tr><td>Pincode</td><td><input type="text" name="pincode" value="<?php echo $this->_tpl_vars['d']['pincode']; ?>
" class="form-control"></td></tr>
	<tr><td>Accident Details</td><td><textarea name="accidentdetails" class="form-control"><?php echo $this->_tpl_vars['d']['accidentdetails']; ?>
</textarea></td></tr>
	<tr><td>Photo</td><td><input type="file" name="photo" value="<?php echo $this->_tpl_vars['d']['photo']; ?>
" class="form-control"></td></tr>
	<!-- <tr><td>Weight</td><td><input type="text" name="weight"></td></tr>
	<tr><td>Blood group</td><td><input type="text" name="bloodgroup"></td></tr>
	<tr><td>Identification Mark</td><td><input type="text" name="identificationmark"></td></tr>
	<tr><td>Missing place</td><td><input type="text" name="missingplace"></td></tr> -->
	<!-- <tr><td>Missing date</td><td><input type="text" name="missingdate"></td></tr> -->
	<!-- <tr><td>Photo</td><td><input type="file" name="photo"></td></tr>
	<tr><td>Other details</td><td><textarea name="otherdetails"></textarea></td></tr> -->
	<tr><td></td><td><input type="submit" value="update" class="btn btn-primary"></td></tr> 
	</form>
<?php endforeach; endif; unset($_from); ?>
	</table>
	</center>
</body>
</html>