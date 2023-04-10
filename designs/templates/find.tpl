{literal}
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
    {/literal}
<br>
      {if $view!=null}

     <p class="blink">Data Match Found</p> <br>
     {foreach from=$view item="d"}
      {if $d.path!=null}
      
       <center><img src="{$d.path}" height="100px" width="100px" align="center"></center>
       {else}
       <p class="blink1">Photo not found / matched..!</p>
      {/if}
     {/foreach}<br>
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
			{foreach from=$view item="d"}
			<tr>
			
<td>{$d.patientname}</td>


<td>{$d.address}</td>
<td>{$d.age}</td>

<td>{$d.otherdetails}</td>
<td>{$d.hospitalname}</td>
<td>{$d.contactno}</td>
<td>{$d.address}</td>
				</tr>
			{/foreach}
			</table>
			{else}
			<p class="blink">No Matches Found</p> <br>
			{/if}
		</body>
		</html>
		


