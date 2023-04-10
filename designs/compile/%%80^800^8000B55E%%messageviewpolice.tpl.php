<?php /* Smarty version 2.6.26, created on 2023-02-19 07:11:44
         compiled from messageviewpolice.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Station id</th>
                                             <th>Station addressline 1</th>
                                             <th>Message</th>
                                             <th>Message date</th>
                                             
                                          </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                            
                                             <td><?php echo $this->_tpl_vars['d']['stationid']; ?>
</td>
                                             <th><?php echo $this->_tpl_vars['d']['addline1']; ?>
</th>
                                             <td><?php echo $this->_tpl_vars['d']['message']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['currentdate']; ?>
</td>
                                        <?php if ($this->_tpl_vars['d']['viewstatus'] == 0): ?>      
                                     <td><a href="messagedelete.php?a=<?php echo $this->_tpl_vars['d']['msgkey']; ?>
" class="btn btn-success">DELETE</a></td>
                                    
                                    <!-- <td><a href="casesheetdelete.php?a=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-danger">DELETE</a></td>
                                    <td><a href="postmortem.php?a=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-success">Upload Postmortem</a></td> -->
                                          
                                          <!-- <td><a href="remove.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                            <?php endif; ?>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </body>
                                             </html>