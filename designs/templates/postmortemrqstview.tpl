<html>
<head>
<title></title></head>
<body>
<center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Patient name</th>
                                             <th>Address</th>
                                             <th>Pincode</th>
                                             <th>Death date</th>
                                             <th>Age</th>
                                             <th>Gender</th>
                                             <th>Requested date</th>
                                             </tr>
                                       {foreach from=$data item="d"}
                                          <tr>
                                            <td>{$d.patientname}</td>
                                             <td>{$d.address}</td>
                                             <td>{$d.pincode}</td>
                                             <td>{$d.deathdate}</td>
                                             <td>{$d.age}</td>
                                             <td>{$d.gender}</td>
                                             <td>{$d.currentdate}</td>
                                            
                                     <td><a href="postmortemupload.php?a={$d.pmkey}" class="btn btn-success">Select Postmortem</a></td>
                                    <td><a href="replytoqueries.php?a={$d.pmkey}" class="btn btn-success">Reply to Queries</a></td>
                                    
                                           <!-- <td><a href="replyview.php?a={$d.ekey}" class="btn btn-success">View reply</a></td></tr> -->
                                          
                                          <!-- <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>