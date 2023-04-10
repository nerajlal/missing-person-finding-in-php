<?php /* Smarty version 2.6.26, created on 2023-02-19 07:20:02
         compiled from postmortemrqstview.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Patient name</th>
                                             <th>Address</th>
                                             <th>Pincode</th>
                                             <th>Death date</th>
                                             <th>Age</th>
                                             <th>Gender</th>
                                             <th>Requested date</th>
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
                                             <td><?php echo $this->_tpl_vars['d']['deathdate']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['age']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['gender']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['currentdate']; ?>
</td>
                                            
                                     <td><a href="postmortemupload.php?a=<?php echo $this->_tpl_vars['d']['pmkey']; ?>
" class="btn btn-success">Select Postmortem</a></td>
                                    <td><a href="replytoqueries.php?a=<?php echo $this->_tpl_vars['d']['pmkey']; ?>
" class="btn btn-success">Reply to Queries</a></td>
                                    
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