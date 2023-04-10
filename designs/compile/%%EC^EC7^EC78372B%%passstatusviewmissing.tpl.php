<?php /* Smarty version 2.6.26, created on 2023-01-27 14:37:52
         compiled from passstatusviewmissing.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<table border=1>
<!-- <table class="table-bordered"> -->
 <tr>
                                             <th>Name</th>
                                             <th>Address</th>
                                             <th>Pincode</th>
                                             <th>District</th>
                                             <th>City</th>
                                             <th>Gender</th>
                                             <th>Age</th>
                                             <th>Height</th>
                                             <th>Weight</th>
                                             <th>Bloodgroup</th>
                                             <th>Identificationmark</th>
                                             <th>Missing place</th>
                                             <th>Missing date</th>
                                             <th>Photo</th>
                                             <th>Otherdetails</th>
                                          </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                       <?php if ($this->_tpl_vars['d']['passstatus'] == 1): ?>
                                          <tr>
                                             <td><?php echo $this->_tpl_vars['d']['missingpersonname']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['district']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['city']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['age']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['height']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['weight']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['bloodgroup']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['identificationmark']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['missingplace']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['missingdate']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['photo']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['otherdetails']; ?>
</td>

                                                 <td><a href="found.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">FOUND</a></td>


                                              </tr>
                                              <?php endif; ?>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </body>
                                             </html>
 