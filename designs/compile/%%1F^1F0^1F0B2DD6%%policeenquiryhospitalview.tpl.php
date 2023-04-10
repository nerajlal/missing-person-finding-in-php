<?php /* Smarty version 2.6.26, created on 2023-02-19 07:20:00
         compiled from policeenquiryhospitalview.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<center>
<table  class="table table-bordered">
 <tr>
                                             <th>station id</th>
                                             <th>station name</th>
                                             <th>Enquiry</th>
                                             </tr>
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                            <td><?php echo $this->_tpl_vars['d']['stationid']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['addline1']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['enquiry']; ?>
</td>
                                            
                                     <td><a href="reply.php?a=<?php echo $this->_tpl_vars['d']['ekey']; ?>
" class="btn btn-success">REPLY</a></td>
                                    <!-- <td><a href="enquirydelete.php?a=<?php echo $this->_tpl_vars['d']['ekey']; ?>
" class="btn btn-success">DELETE</a></td></tr>
                                     -->
                                           
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