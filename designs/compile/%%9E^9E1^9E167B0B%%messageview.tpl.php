<?php /* Smarty version 2.6.26, created on 2023-02-19 07:20:03
         compiled from messageview.tpl */ ?>
<html>
<head>
<title></title></head>
<body><center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Station id</th>
                                             <th>Message</th>
                                             <th>Message date</th>
                                             <!-- <th>gender</th>
                                             <th>age</th>
                                             <th>bloodgroup</th>
                                             <th>photo</th>
                                             <th>otherdetails</th>
                                             <th>admitteddate</th> -->
                                          </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                            
                                             <td><?php echo $this->_tpl_vars['d']['stationid']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['message']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['currentdate']; ?>
</td>
                                             <!-- <td><?php echo $this->_tpl_vars['d']['gender']; ?>
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
</td> -->
                                     <td><a href="replymessage.php?a=<?php echo $this->_tpl_vars['d']['senderid']; ?>
" class="btn btn-success">REPLY</a></td>
                                    <!-- <td><a href="casesheetdelete.php?a=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-danger">DELETE</a></td>
                                    <td><a href="postmortem.php?a=<?php echo $this->_tpl_vars['d']['ckey']; ?>
" class="btn btn-success">Upload Postmortem</a></td> -->
                                          
                                          <!-- <td><a href="remove.php?a=<?php echo $this->_tpl_vars['d']['mkey']; ?>
" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </center>
                                             </body>
                                             </html>