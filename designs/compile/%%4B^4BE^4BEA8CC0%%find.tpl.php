<?php /* Smarty version 2.6.26, created on 2022-05-07 13:15:19
         compiled from find.tpl */ ?>
<?php echo '
<style>
      .blink {
        animation: blinker 0.6s linear infinite;
        color: green;
        font-size: 30px;
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
      }
      @keyframes blinker {
        50% {
          opacity: 0;
        }
      }
      .blink-one {
        animation: blinker-one 1s linear infinite;
      }
      @keyframes blinker-one {
        0% {
          opacity: 0;
        }
      }
      .blink-two {
        animation: blinker-two 1.4s linear infinite;
      }
      @keyframes blinker-two {
        100% {
          opacity: 0;
        }
      }

      .blink1 {
        animation: blinker 0.6s linear infinite;
        color: red;
        font-size: 25px;
        font-weight: bold;
        font-family: sans-serif;
        text-align: center;
      }





    </style>
    '; ?>

<br>
      <?php if ($this->_tpl_vars['view'] != null): ?>

     <p class="blink">Data Match Found</p> <br>
     <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
      <?php if ($this->_tpl_vars['d']['path'] != null): ?>
      
       <center><img src="<?php echo $this->_tpl_vars['d']['path']; ?>
" height="100px" width="100px" align="center"></center>
       <?php else: ?>
       <p class="blink1">Photo not found / matched..!</p>
      <?php endif; ?>
     <?php endforeach; endif; unset($_from); ?><br>
	<table class="table table-striped">
		<tr>
            

<th>Full name</th>
<th>Address</th>

<th>Age</th>



<th>Details</th>
<th>Hospital</th>
<th>Contact</th>
<th>Hospital Address</th>
		</tr>
			<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
			<tr>
			
<td><?php echo $this->_tpl_vars['d']['patientname']; ?>
</td>


<td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['age']; ?>
</td>

<td><?php echo $this->_tpl_vars['d']['otherdetails']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['hospitalname']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['contactno']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
				</tr>
			<?php endforeach; endif; unset($_from); ?>
			</table>
			<?php else: ?>
			<p class="blink">No Matches Found</p> <br>
			<?php endif; ?>
		</body>
		</html>
		

