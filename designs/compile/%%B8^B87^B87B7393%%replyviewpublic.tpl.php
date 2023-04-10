<?php /* Smarty version 2.6.26, created on 2022-03-11 07:45:04
         compiled from replyviewpublic.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<center>
<table border="1">
 <tr>
                                             <th>complaint Subject </th>
                                             <th>complaint </th>
                                             <th>Reply </th>
                                             
                                             </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                          <td><?php echo $this->_tpl_vars['d']['subject']; ?>
</td>
                                          <td><?php echo $this->_tpl_vars['d']['complaint']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['reply']; ?>
</td>
<!--                                              <td><?php echo $this->_tpl_vars['d']['complaint']; ?>
</td>
 -->



                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </center>
                                             </body>
                                             </html>