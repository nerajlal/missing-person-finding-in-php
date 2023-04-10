<html>
<head>
<title></title></head>
<body>
<center>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>criminal name</th>
                                             <th>address</th>
                                             <th>age</th>
                                             <th>gender</th>
                                             <th>other details</th>
                                             
                                             </tr>
                                       {foreach from=$data item="d"}
                                          <tr>
                                            <td>{$d.criminalname}</td>
                                             <td>{$d.address}</td>
                                             <td>{$d.age}</td>
                                             <td>{$d.gender}</td>
                                             <td>{$d.otherdetails}</td>
                                            {if $d.crimehistory==null}
                                     <td><a href="editcrimehistory.php?a={$d.crimekey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="crimehistorydelete.php?a={$d.crimekey}" class="btn btn-success">DELETE</a></td>
                                    {else}
                                      <td><a href="{$b.path}"target="_blank" download="download" class="btn btn-info">download crimehistory</a></td>
                                     {/if}
                                           <!-- <td><a href="replyview.php?a={$d.ekey}" class="btn btn-success">View reply</a></td></tr> -->
                                          
                                          <!-- <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                             {/foreach}
                                             </table>
                                             </center>
                                             </body>
                                             </html>