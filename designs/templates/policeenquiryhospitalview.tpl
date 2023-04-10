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
                                       {foreach from=$data item="d"}
                                          <tr>
                                            <td>{$d.stationid}</td>
                                             <td>{$d.addline1}</td>
                                             <td>{$d.enquiry}</td>
                                            
                                     <td><a href="reply.php?a={$d.ekey}" class="btn btn-success">REPLY</a></td>
                                    <!-- <td><a href="enquirydelete.php?a={$d.ekey}" class="btn btn-success">DELETE</a></td></tr>
                                     -->
                                           
                                            <!--  <td><a href="passtopublic.php?a={$d.mkey}" class="btn btn-success">passtopublic</a></td>
                                          
                                          <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>