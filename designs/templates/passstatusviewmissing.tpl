<html>
<head>
<title></title></head>
<body>
<table border=1>
<!-- <table class="table-bordered"> -->
 <tr>
                                             <th>Name</th>
                                             <th>Address</th>
                                             <th>Pincode</th>
                                             <th>District</th>
                                             <th>City</th>
                                             <th>Gender</th>
                                             <th>Age</th>
                                             <th>Height</th>
                                             <th>Weight</th>
                                             <th>Bloodgroup</th>
                                             <th>Identificationmark</th>
                                             <th>Missing place</th>
                                             <th>Missing date</th>
                                             <th>Photo</th>
                                             <th>Otherdetails</th>
                                          </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                       {if $d.passstatus==1}
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
                                             <td>{$d.missingdate}</td>
                                             <td>{$d.photo}</td>
                                             <td>{$d.otherdetails}</td>

                                                 <td><a href="found.php?a={$d.mkey}" class="btn btn-success">FOUND</a></td>


                                              </tr>
                                              {/if}
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>
 