<?php /* Smarty version 2.6.26, created on 2022-01-08 11:35:53
         compiled from tab.tpl */ ?>
<html>
<body>
<table border="1" align="center">
<tr><th>Name</th><th>Address</th><th>Gender</th><th>Email</th>
</tr>
<?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['b']):
?>
<tr><td><?php echo $this->_tpl_vars['b']['name']; ?>
</td><td><?php echo $this->_tpl_vars['b']['address']; ?>
</td><td><?php echo $this->_tpl_vars['b']['gender']; ?>
</td><td><?php echo $this->_tpl_vars['b']['email']; ?>
</td><td><a href="edit.php?key=<?php echo $this->_tpl_vars['b']['logkey']; ?>
">edit</a></td><td><a href="delete.php?key=<?php echo $this->_tpl_vars['b']['rkey']; ?>
">delete</a></td></tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<a href="logout.php">Logout</a>
</body>
</html>