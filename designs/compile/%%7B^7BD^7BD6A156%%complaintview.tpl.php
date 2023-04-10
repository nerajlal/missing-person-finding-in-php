<?php /* Smarty version 2.6.26, created on 2023-02-19 07:22:00
         compiled from complaintview.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>complaint subject</th>
                                             <th>complaint </th>
                                             
                                             </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                             <td><?php echo $this->_tpl_vars['d']['subject']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['complaint']; ?>
</td>
                                             
                                             
                                     <td><a href="complaintedit.php?a=<?php echo $this->_tpl_vars['d']['complaintkey']; ?>
" class="btn btn-success">EDIT</a></td>
                                    <td><a href="complaintdelete.php?a=<?php echo $this->_tpl_vars['d']['complaintkey']; ?>
" class="btn btn-success">DELETE</a></td>
                                    <td><a href="replyviewpublic.php?a=<?php echo $this->_tpl_vars['d']['complaintkey']; ?>
" class="btn btn-success">VIEW REPLY</a></td></tr>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </center>
                                             </body>
                                             </html>