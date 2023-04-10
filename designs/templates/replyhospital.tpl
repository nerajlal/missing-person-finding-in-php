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
                                       {foreach from=$data item="d"}
                                          <tr>
                                            <td>{$d.hospitalname}</td>
                                              <td>{$d.message}</td>
                                             <td>{$d.reply}</td>
                
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>