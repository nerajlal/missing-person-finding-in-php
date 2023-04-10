<?php /* Smarty version 2.6.26, created on 2022-03-08 16:35:36
         compiled from policeviewadminupload.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<center>
<table border="1">
 <tr>
                                             
                                             <th>Crime History</th>
                                             <!-- <th>Address</th>
                                             <th>Pincode</th>
                                             <th>Death date</th>
                                             <th>Age</th>
                                             <th>Gender</th>
                                             <th>Requested date</th> -->
                                             </tr>
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                            <td><?php echo $this->_tpl_vars['d']['crimehistory']; ?>
</td>
                                             <!-- <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['deathdate']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['age']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['currentdate']; ?>
</td> -->
                                            
                                     <td><a href=".php?a=<?php echo $this->_tpl_vars['d']['pmkey']; ?>
" class="btn btn-success">downld </a></td>
                                    <!-- <td><a href=".php?a=<?php echo $this->_tpl_vars['d']['ekey']; ?>
" class="btn btn-success">DELETE</a></td>
                                     -->
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