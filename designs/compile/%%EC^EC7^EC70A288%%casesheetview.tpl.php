<?php /* Smarty version 2.6.26, created on 2023-02-19 07:19:54
         compiled from casesheetview.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Patientname</th>
                                             <th>Address</th>
                                             <th>pincode</th>
                                             <th>gender</th>
                                             <th>age</th>
                                             <th>bloodgroup</th>
                                             <th>photo</th>
                                             <th>otherdetails</th>
                                             <th>admitteddate</th>
                                          </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                            
                                             <td><?php echo $this->_tpl_vars['d']['patientname']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['age']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['bloodgroup']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['photo']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['otherdetails']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['admitteddate']; ?>
</td>
                                     <td><a href="casesheetedit.php?a=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-success">EDIT</a></td>
                                    <td><a href="casesheetdelete.php?a=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-danger">DELETE</a></td>
                                    <td><a href="postmortem.php?a=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-success">Upload Postmortem</a></td>
                                          
                                          <!-- <td><a href="remove.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </body>
                                             </html>