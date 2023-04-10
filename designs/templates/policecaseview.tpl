<html>
<head>
<title></title></head>
<body>
<table class="table table-bordered">
 <tr>
                                             
                                             <th>case</th>
                                             <th>case details</th>
                                             <th>occurence day</th>
                                             <th>occurence date</th>
                                             <th>occurence time</th>
                                             <th>occurence place</th>
                                             </tr>
                                       
                              
                                       {foreach from=$data item="d"}
                                          <tr>
                                             <td>{$d.cases}</td>
                                             <td>{$d.casedetails}</td>
                                             <td>{$d.occurenceday}</td>
                                             <td>{$d.occurencedate}</td>
                                             <td>{$d.occurencetime}</td>
                                             <td>{$d.occurenceplace}</td>
                                              {
                                             if $d.cstatus==0
                                             }
                                             <td><a href="policeapprovecase.php?a={$d.casekey}" class="btn btn-success">approve</a></td>
                                             <td><a href="policerejectcase.php?r={$d.casekey}" class="btn btn-danger">reject</a></td> 
                                             {
                                             elseif $d.cstatus==1
                                             }
                                             <td><a href="firupload.php?a={$d.casekey}" class="btn btn-success">Upload FIR</a></td>
                                             <td><a href="firupload.php?r={$d.casekey}" class="btn btn-danger">reject</a></td> 
                                             {
                                             else
                                             }
                                             <td>rejected</td>
                                             <td><a href="policeapprovecase.php?a={$d.casekey}" class="btn btn-success">approve</a></td>
                                             {/if}
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>