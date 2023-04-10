<html>
<head>
<title></title></head>
<body><center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Station id</th>
                                             <th>Message</th>
                                             <th>Message date</th>
                                             <!-- <th>gender</th>
                                             <th>age</th>
                                             <th>bloodgroup</th>
                                             <th>photo</th>
                                             <th>otherdetails</th>
                                             <th>admitteddate</th> -->
                                          </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                            
                                             <td>{$d.stationid}</td>
                                             <td>{$d.message}</td>
                                             <td>{$d.currentdate}</td>
                                             <!-- <td>{$d.gender}</td>
                                             <td>{$d.age}</td>
                                             <td>{$d.bloodgroup}</td>
                                             <td>{$d.photo}</td>
                                             <td>{$d.otherdetails}</td>
                                             <td>{$d.admitteddate}</td> -->
                                     <td><a href="replymessage.php?a={$d.senderid}" class="btn btn-success">REPLY</a></td>
                                    <!-- <td><a href="casesheetdelete.php?a={$d.ckey}" class="btn btn-danger">DELETE</a></td>
                                    <td><a href="postmortem.php?a={$d.ckey}" class="btn btn-success">Upload Postmortem</a></td> -->
                                          
                                          <!-- <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>