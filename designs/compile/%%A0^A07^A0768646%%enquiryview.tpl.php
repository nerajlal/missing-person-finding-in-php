<?php /* Smarty version 2.6.26, created on 2023-02-19 07:19:58
         compiled from enquiryview.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<center>
<table  class="table table-bordered">
 <tr>
                                             
                                             
                                             <th>enquiry</th>
                                             <th>current date</th>
                                             <th>name</th>
                                             <th>contact no</th>
                                             
                                          </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                            
                                             
                                             <td><?php echo $this->_tpl_vars['d']['enquiry']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['currentdate']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['fullname']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['contactno']; ?>
</td>
                                            
                                     <!-- <td><a href="casesheetedit.php?a=<?php echo $this->_tpl_vars['d']['ekey']; ?>
" class="btn btn-success">EDIT</a></td> -->
                                    <!-- <td><a href="casesheetdelete.php?a=<?php echo $this->_tpl_vars['d']['ekey']; ?>
" class="btn btn-success">DELETE</a></td></tr> -->
                                    
                                           
                                            <!--  <td><a href="passtopublic.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">passtopublic</a></td>
                                          
                                          <td><a href="remove.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </center>
                                             </body>
                                             </html>