<?php /* Smarty version 2.6.26, created on 2023-02-19 07:21:49
         compiled from accidentregedit.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<table border="1">
 <tr>
                                             
                                             <th>District</th>
                                             <th>City</th>
                                             <th>street</th>
                                             <th>pincode</th>
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
                                             <td>
                                             <img src="uploads/<?php echo $this->_tpl_vars['d']['photo']; ?>
" height="100" width="100">
                                             </td>
                                     <td><a href="accidentcaseedit.php?a=<?php echo $this->_tpl_vars['d']['akey']; ?>
" class="btn btn-success">EDIT</a></td>
                                    <td><a href="accidentcasedelete.php?a=<?php echo $this->_tpl_vars['d']['akey']; ?>
" class="btn btn-success">DELETE</a></td></tr>
                                    
                                           
                                            <!--  <td><a href="passtopublic.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">passtopublic</a></td>
                                          
                                          <td><a href="remove.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </body>
                                             </html>