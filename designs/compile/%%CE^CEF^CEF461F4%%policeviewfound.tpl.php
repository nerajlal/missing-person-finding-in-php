<?php /* Smarty version 2.6.26, created on 2023-02-19 07:09:31
         compiled from policeviewfound.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             <th> Name</th>
                                             <th>Address</th>
                                             <th>Contact</th>
                                             <th>Aadhar no</th>
                                             <th>Found details</th>
                                             <th>Found date</th>
                                             
                                          </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                             <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['contactno']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['aadharno']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['founddetails']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['foundeddate']; ?>
</td>
                                             
                                     <!-- <td><a href="missingpersonedit.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">EDIT</a></td>
                                    <td><a href="missingpersondelete.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">DELETE</a></td></tr> -->
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </body>
                                             </html>