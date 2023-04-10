<html>
<head>
<title></title></head>
<body>
<table border="1">
 <tr>
                                             
                                             <th>District</th>
                                             <th>City</th>
                                             <th>street</th>
                                             <th>pincode</th>
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
                                             <td>
                                             <img src="uploads/{$d.photo}" height="100" width="100">
                                             </td>
                                     <td><a href="accidentcaseedit.php?a={$d.akey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="accidentcasedelete.php?a={$d.akey}" class="btn btn-success">DELETE</a></td></tr>
                                    
                                           
                                            <!--  <td><a href="passtopublic.php?a={$d.mkey}" class="btn btn-success">passtopublic</a></td>
                                          
                                          <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>