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
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                          <td>{$d.subject}</td>
                                          <td>{$d.complaint}</td>
                                             <td>{$d.reply}</td>
<!--                                              <td>{$d.complaint}</td>
 -->



                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>