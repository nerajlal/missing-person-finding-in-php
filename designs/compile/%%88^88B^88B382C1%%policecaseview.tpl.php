<?php /* Smarty version 2.6.26, created on 2023-02-19 07:09:38
         compiled from policecaseview.tpl */ ?>
<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>case</th>
                                             <th>case details</th>
                                             <th>occurence day</th>
                                             <th>occurence date</th>
                                             <th>occurence time</th>
                                             <th>occurence place</th>
                                             </tr>
                                       
                              
                                       <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                                          <tr>
                                             <td><?php echo $this->_tpl_vars['d']['cases']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['casedetails']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['occurenceday']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['occurencedate']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['occurencetime']; ?>
</td>
                                             <td><?php echo $this->_tpl_vars['d']['occurenceplace']; ?>
</td>
                                              <?php if ($this->_tpl_vars['d']['cstatus'] == 0): ?>
                                             <td><a href="policeapprovecase.php?a=<?php echo $this->_tpl_vars['d']['casekey']; ?>
" class="btn btn-success">approve</a></td>
                                             <td><a href="policerejectcase.php?r=<?php echo $this->_tpl_vars['d']['casekey']; ?>
" class="btn btn-danger">reject</a></td> 
                                             <?php elseif ($this->_tpl_vars['d']['cstatus'] == 1): ?>
                                             <td><a href="firupload.php?a=<?php echo $this->_tpl_vars['d']['casekey']; ?>
" class="btn btn-success">Upload FIR</a></td>
                                             <td><a href="firupload.php?r=<?php echo $this->_tpl_vars['d']['casekey']; ?>
" class="btn btn-danger">reject</a></td> 
                                             <?php else: ?>
                                             <td>rejected</td>
                                             <td><a href="policeapprovecase.php?a=<?php echo $this->_tpl_vars['d']['casekey']; ?>
" class="btn btn-success">approve</a></td>
                                             <?php endif; ?>
                                             <?php endforeach; endif; unset($_from); ?>
                                             </table>
                                             </body>
                                             </html>