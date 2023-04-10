<html>
<head>
<title></title></head>
<body>
<center>
<table border="1">
 <tr>
                                             
                                             <th>Crime History</th>
                                             <!-- <th>Address</th>
                                             <th>Pincode</th>
                                             <th>Death date</th>
                                             <th>Age</th>
                                             <th>Gender</th>
                                             <th>Requested date</th> -->
                                             </tr>
                                       {foreach from=$data item="d"}
                                          <tr>
                                            <td>{$d.crimehistory}</td>
                                             <!-- <td>{$d.address}</td>
                                             <td>{$d.pincode}</td>
                                             <td>{$d.deathdate}</td>
                                             <td>{$d.age}</td>
                                             <td>{$d.gender}</td>
                                             <td>{$d.currentdate}</td> -->
                                            
                                     <td><a href=".php?a={$d.crimekeykey}" class="btn btn-success">downld </a></td>
                                    <!-- <td><a href=".php?a={$d.ekey}" class="btn btn-success">DELETE</a></td>
                                     -->
                                           <!-- <td><a href="replyview.php?a={$d.ekey}" class="btn btn-success">View reply</a></td></tr> -->
                                          
                                          <!-- <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>