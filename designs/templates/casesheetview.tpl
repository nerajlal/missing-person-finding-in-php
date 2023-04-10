<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Patientname</th>
                                             <th>Address</th>
                                             <th>pincode</th>
                                             <th>gender</th>
                                             <th>age</th>
                                             <th>bloodgroup</th>
                                             <th>photo</th>
                                             <th>otherdetails</th>
                                             <th>admitteddate</th>
                                          </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                            
                                             <td>{$d.patientname}</td>
                                             <td>{$d.address}</td>
                                             <td>{$d.pincode}</td>
                                             <td>{$d.gender}</td>
                                             <td>{$d.age}</td>
                                             <td>{$d.bloodgroup}</td>
                                             <td>{$d.photo}</td>
                                             <td>{$d.otherdetails}</td>
                                             <td>{$d.admitteddate}</td>
                                     <td><a href="casesheetedit.php?a={$d.ckey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="casesheetdelete.php?a={$d.ckey}" class="btn btn-danger">DELETE</a></td>
                                    <td><a href="postmortem.php?a={$d.ckey}" class="btn btn-success">Upload Postmortem</a></td>
                                          
                                          <!-- <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>