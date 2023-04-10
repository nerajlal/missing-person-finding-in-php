<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>District</th>
                                             <th>City</th>
                                             <th>Street</th>
                                            
                                             <th>Pincode</th>
                                             <th>Accident details</th>
                                             <th>Photo</th>
                                          </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                             <td>{$d.district}</td>
                                             <td>{$d.city}</td>
                                             <td>{$d.street}</td>
                                             <td>{$d.pincode}</td>
                                             <td>{$d.accidentdetails}</td>
                                             <td>{$d.photo}</td>
                                             
                                    <!--  <td><a href="missingpersonedit.php?a={$d.mkey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="missingpersondelete.php?a={$d.mkey}" class="btn btn-success">DELETE</a></td></tr> -->
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>