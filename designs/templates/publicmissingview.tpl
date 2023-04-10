<html>
<head>
<title></title></head>
<body>
<table class="table-bordered">
 <tr>
                                             <th>Missing person name</th>
                                             <th>Address</th>
                                             <th>Pincode</th>
                                             <th>District</th>
                                             <th>City</th>
                                             <th>Gender</th>
                                             <th>Age</th>
                                             <th>Height</th>
                                             <th>Weight</th>
                                             <th>Bloodgroup</th>
                                             <th>Identification mark</th>
                                             <th>Missing place</th>
                                             <th>Photo</th>
                                             <th>Otherdetails</th>
                                          </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                             <td>{$d.missingpersonname}</td>
                                             <td>{$d.address}</td>
                                             <td>{$d.pincode}</td>
                                             <td>{$d.district}</td>
                                             <td>{$d.city}</td>
                                             <td>{$d.gender}</td>
                                             <td>{$d.age}</td>
                                             <td>{$d.height}</td>
                                             <td>{$d.weight}</td>
                                             <td>{$d.bloodgroup}</td>
                                             <td>{$d.identificationmark}</td>
                                             <td>{$d.missingplace}</td>
                                             <td>
                                             <img src="uploads/{$d.photo}" height="100" width="100">
                                             </td>
                                             <td>{$d.otherdetails}</td>
                                     <td><a href="missingpersonedit.php?a={$d.mkey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="missingpersondelete.php?a={$d.mkey}" class="btn btn-success">DELETE</a></td></tr>
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>