<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>Station id</th>
                                             <th>Station addressline 1</th>
                                             <th>Message</th>
                                             <th>Message date</th>
                                             
                                          </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                            
                                             <td>{$d.stationid}</td>
                                             <th>{$d.addline1}</th>
                                             <td>{$d.message}</td>
                                             <td>{$d.currentdate}</td>
                                        {if $d.viewstatus==0}      
                                     <td><a href="messagedelete.php?a={$d.msgkey}" class="btn btn-success">DELETE</a></td>
                                    
                                    <!-- <td><a href="casesheetdelete.php?a={$d.ckey}" class="btn btn-danger">DELETE</a></td>
                                    <td><a href="postmortem.php?a={$d.ckey}" class="btn btn-success">Upload Postmortem</a></td> -->
                                          
                                          <!-- <td><a href="remove.php?a={$d.mkey}" class="btn btn-success">Remove</a></td -->
                                         
                                            </tr>
                                            {/if}
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>