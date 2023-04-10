<?php /* Smarty version 2.6.26, created on 2023-02-19 07:09:27
         compiled from accidentpoliceview.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>District</th>
                                             <th>City</th>
                                             <th>Street</th>
                                            
                                             <th>Pincode</th>
                                             <th>Accident details</th>
                                             <th>Photo</th>
                                          </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                             <td><?php echo $this->_tpl_vars['d']['district']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['city']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['street']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['accidentdetails']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['photo']; ?>
</td>
                                             
                                    <!--  <td><a href="missingpersonedit.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">EDIT</a></td>
                                    <td><a href="missingpersondelete.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">DELETE</a></td></tr> -->
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </body>
                                             </html>