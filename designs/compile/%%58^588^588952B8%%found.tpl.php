<?php /* Smarty version 2.6.26, created on 2022-04-25 08:55:35
         compiled from found.tpl */ ?>
<html>
<head><title>missing person found</title>
</head>
<body>
	<center style="margin-top:5rem">
	<table>
	<form method="POST" action="">
	<input type="hidden" name="hide" value="h">
	<tr><td>Name</td><td><input type="text" name="name" class="form-control"></td></tr>
	
	<tr><td>Address</td><td><textarea name="address" class="form-control"></textarea></td></tr>
	<tr><td>Contact no</td><td><input type="text" name="contactno" class="form-control"></td></tr>
	<tr><td>Aadhar no</td><td><input type="text" name="aadharno" class="form-control"></td></tr>
	<tr><td>Found details</td><td><textarea name="founddetails" class="form-control"></textarea></td></tr>
	<tr><td>Founded date</td><td><input type="date" name="founddate" class="form-control"></td></tr>
	<tr><td></td><td><input type="submit" value="Submit" class="btn btn-primary"></td>
 <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
 <td><a href="missingdetails.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">Missing details</a></td>
	</tr>
	<?php endforeach; endif; unset($_from); ?> 
	</form>

	</table>
	</center>
</body>
</html>