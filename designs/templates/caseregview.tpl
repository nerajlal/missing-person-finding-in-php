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
                                             
                                     <td><a href="caseregedit.php?a={$d.casekey}" class="btn btn-success">EDIT</a></td>
                                    <td><a href="deletecase.php?a={$d.casekey}" class="btn btn-success">DELETE</a></td></tr>
                                             {/foreach}
                                             </table>
                                             </body>
                                             </html>