<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             <th> Name</th>
                                             <th>Address</th>
                                             <th>Contact</th>
                                             <th>Aadhar no</th>
                                             <th>Found details</th>
                                             <th>Found date</th>
                                             
                                          </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                             <td>{$d.name}</td>
                                             <td>{$d.address}</td>
                                             <td>{$d.contactno}</td>
                                             <td>{$d.aadharno}</td>
                                             <td>{$d.founddetails}</td>
                                             <td>{$d.foundeddate}</td>
                                             
                                     <!-- <td><a href="missingpersonedit.php?a={$d.mkey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="missingpersondelete.php?a={$d.mkey}" class="btn btn-success">DELETE</a></td></tr> -->
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>