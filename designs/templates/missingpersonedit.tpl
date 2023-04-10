<html>
<head><title>missing person</title>
</head>
<body>
   <center style="margin-top:5rem">
   <table>
   {foreach from=$data item="d"}
   <form method="POST" action="">
   <input type="hidden" name="hide" value="h">
   <tr><td>Missing person name</td><td><input type="text" name="missingpersonname" value="{$d.missingpersonname}" class="form-control"></td></tr>
   
   <tr><td>Address</td><td><textarea name="address" class="form-control" >{$d.address}</textarea></td></tr>
   <tr><td>Pincode</td><td><input type="text" name="pincode" value="{$d.pincode}" class="form-control"></td></tr>
   <tr><td>District</td><td><select name="district" class="form-control">
   <option>Kollam</option>
   <option>Trivandrum</option>
   <option>Alappuzha</option>
   <option>Pathanamthitta</option>
   <option>Kottayam</option>
   <option>Idukki</option>
   <option>Ernakulam</option>
   <option>Thrissur</option>
   <option>Palakkad</option>
   <option>Malappuram</option>
   <option>kozhikode</option>
   <option>Wayanad</option>
   <option>Kannur</option>
   <option>Kasaragod</option>{$d.district}
   </select></td></tr>
   <tr><td>City</td><td><input type="text" name="city" value="{$d.city}" class="form-control"></td></tr>
   <tr><td>Gender</td>

   {if $d.gender=='male'}

   <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male" checked>Male
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="female">Female</td>
   {else}
   
   <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="gender" value="male">Male
   <input type="radio" name="gender" value="female" checked>Female</td>
{/if}

   </tr>
   <tr><td>Age</td><td><input type="text" name="age" value="{$d.age}" class="form-control"></td></tr>
   <tr><td>Height</td><td><input type="text" name="height" value="{$d.height}" class="form-control"></td></tr>
   <tr><td>Weight</td><td><input type="text" name="weight" value="{$d.weight}" class="form-control"></td></tr>
   <tr><td>Blood group</td><td><input type="text" name="bloodgroup" value="{$d.bloodgroup}" class="form-control"></td></tr>
   <tr><td>Identification Mark</td><td><input type="text" name="identificationmark" value="{$d.identificationmark}" class="form-control"></td></tr>
   <tr><td>Missing place</td><td><input type="text" name="missingplace" value="{$d.missingplace}" class="form-control"></td></tr>
   <!-- <tr><td>Missing date</td><td><input type="text" name="missingdate"></td></tr> -->
   <tr><td>Photo</td><td><input type="file" name="photo" value="{$d.photo}" class="form-control"></td></tr>
   <tr><td>Other details</td><td><textarea name="otherdetails" class="form-control">{$d.otherdetails}</textarea></td></tr>
   <tr><td></td><td><input type="submit" value="Update" class="btn btn-primary"></td></tr> 
   </form>
   {/foreach}
   </table>
   </center>
</body>
</html>