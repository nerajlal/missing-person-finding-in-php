<?php /* Smarty version 2.6.26, created on 2023-02-19 07:11:48
         compiled from replyhospital.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Hospital name</th>
                                             
                                             <th>Message</th>
                                             <th>Reply</th>
                                             </tr>
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                            <td><?php echo $this->_tpl_vars['d']['hospitalname']; ?>
</td>
                                              <td><?php echo $this->_tpl_vars['d']['message']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['reply']; ?>
</td>
                
                                         
                                            </tr>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </center>
                                             </body>
                                             </html>