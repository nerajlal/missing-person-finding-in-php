<html>
<head>
<title></title></head>
<body>
<center>
<table border="1">
 <tr>
                                             
                                             <th>Hospital name</th>
                                             <th>Enquiry</th>
                                             </tr>
                                       {foreach from=$data item="d"}
                                          <tr>
                                            <td>{$d.hospitalname}</td>
                                             <td>{$d.enquiry}</td>
                                            
                                     <td><a href="enquirypublicviewedit.php?a={$d.ekey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="enquirydelete.php?a={$d.ekey}" class="btn btn-success">DELETE</a></td>
                                    
                                           <td><a href="replyview.php?a={$d.ekey}" class="btn btn-success">View reply</a></td></tr>
                                          
                                          <!-- <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>