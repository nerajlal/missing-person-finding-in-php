<?php /* Smarty version 2.6.26, created on 2023-02-19 07:09:46
         compiled from crimehistoryview.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>criminal name</th>
                                             <th>address</th>
                                             <th>age</th>
                                             <th>gender</th>
                                             <th>other details</th>
                                             
                                             </tr>
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                            <td><?php echo $this->_tpl_vars['d']['criminalname']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['age']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['otherdetails']; ?>
</td>
                                            <?php if ($this->_tpl_vars['d']['crimehistory'] == null): ?>
                                     <td><a href="editcrimehistory.php?a=<?php echo $this->_tpl_vars['d']['crimekey']; ?>
" class="btn btn-success">EDIT</a></td>
                                    <td><a href="crimehistorydelete.php?a=<?php echo $this->_tpl_vars['d']['crimekey']; ?>
" class="btn btn-success">DELETE</a></td>
                                    <?php else: ?>
                                      <td><a href="<?php echo $this->_tpl_vars['b']['path']; ?>
"target="_blank" download="download" class="btn btn-info">download crimehistory</a></td>
                                     <?php endif; ?>
                                           <!-- <td><a href="replyview.php?a=<?php echo $this->_tpl_vars['d']['ekey']; ?>
" class="btn btn-success">View reply</a></td></tr> -->
                                          
                                          <!-- <td><a href="remove.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </center>
                                             </body>
                                             </html>