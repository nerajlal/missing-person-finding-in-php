<html>
<head>
<title></title></head>
<body>
<center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>complaint subject</th>
                                             <th>complaint </th>
                                             
                                             </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                             <td>{$d.subject}</td>
                                             <td>{$d.complaint}</td>
                                             
                                             
                                     <td><a href="complaintedit.php?a={$d.complaintkey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="complaintdelete.php?a={$d.complaintkey}" class="btn btn-success">DELETE</a></td>
                                    <td><a href="replyviewpublic.php?a={$d.complaintkey}" class="btn btn-success">VIEW REPLY</a></td></tr>
                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>