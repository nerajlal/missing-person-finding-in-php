<?php /* Smarty version 2.6.26, created on 2022-02-19 08:11:22
         compiled from enquirypolice.tpl */ ?>
<html>
<head><title>Enquiry</title>
</head>
<body>
	<center style="margin-top:5rem"><h2>Enquiry</h2>
	<table>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<!-- <tr><td>Hospital name</td><td><input type="text" name="hospitalname"></td></tr> -->
	
	<!-- <tr><td>Address</td><td><textarea name="address" ></textarea></td></tr> -->
	<!-- <tr><td>Pincode</td><td><input type="text" name="pincode"></td></tr> -->
	<tr><td>Hospital Name</td><td><select name="hospitalname">
	<option>select</option>
	<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
	<option value="<?php echo $this->_tpl_vars['d']['loginid']; ?>
"><?php echo $this->_tpl_vars['d']['hospitalname']; ?>
</option>
	<?php endforeach; endif; unset($_from); ?>

	
	</select></td></tr>
	
	<tr><td>Enquiry</td><td><textarea name="enquiry"></textarea></td></tr>

	<tr><td></td><td><input type="submit" value="Submit" class="btn btn-primary"></td></tr> 
	</form>

	</table>
	</center>
</body>
</html>