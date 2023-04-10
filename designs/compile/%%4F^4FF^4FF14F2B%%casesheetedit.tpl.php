<?php /* Smarty version 2.6.26, created on 2022-04-29 09:13:55
         compiled from casesheetedit.tpl */ ?>
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
	<tr><td>Patient name</td><td><input type="text" name="patientname" value="<?php echo $this->_tpl_vars['d']['patientname']; ?>
" class="form-control"></td></tr>
	
	<tr><td>Address</td><td><textarea name="address" class="form-control"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea></td></tr>
	 <tr><td>Pincode</td><td><input type="text" name="pincode" value="<?php echo $this->_tpl_vars['d']['pincode']; ?>
" class="form-control"></td></tr> 
	<!-- <tr><td>District</td><td><select name="district">
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
	<option>Kasaragod</option>
	</select></td></tr> -->

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
	<tr><td>Age</td><td><input type="text" name="age" value="<?php echo $this->_tpl_vars['d']['age']; ?>
" class="form-control"></td></tr>
	<tr><td>Bloodgroup</td><td><input type="text" name="bloodgroup" value="<?php echo $this->_tpl_vars['d']['bloodgroup']; ?>
" class="form-control"></td></tr>
	<!-- <tr><td>photo</td><td><textarea name="accidentdetails"></textarea></td></tr> -->
	<tr><td>Photo</td><td><input type="file" name="photo" value="<?php echo $this->_tpl_vars['d']['photo']; ?>
" class="form-control"></td></tr>
	<!-- <tr><td>Weight</td><td><input type="text" name="weight"></td></tr>
	<tr><td>Blood group</td><td><input type="text" name="bloodgroup"></td></tr>
	<tr><td>Identification Mark</td><td><input type="text" name="identificationmark"></td></tr>
	<tr><td>Missing place</td><td><input type="text" name="missingplace"></td></tr> -->
	<!-- <tr><td>Missing date</td><td><input type="text" name="missingdate"></td></tr> -->
	<!--  <tr><td>Photo</td><td><input type="file" name="photo"></td></tr> -->
	<tr><td>Other details</td><td><textarea name="otherdetails" class="form-control"><?php echo $this->_tpl_vars['d']['otherdetails']; ?>
</textarea></td></tr> 
	<tr><td>Admitted Date</td><td><input type="date" name="admitteddate" value="<?php echo $this->_tpl_vars['d']['admitteddate']; ?>
" class="form-control">
	<tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
	</form>
<?php endforeach; endif; unset($_from); ?>
	</table>
	</center>
</body>
</html>