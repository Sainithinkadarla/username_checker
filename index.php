<?php
include_once("config.php");
?>
<table>
<tr>
<th width="24%"  height="46" scope="row">Email Id :</th>
<td width="71%" ><input type="email" name="email" id="emailid" onBlur="checkemailAvailability()" value="" class="form-control" required /></td>
</tr>
<tr>
<th width="24%"  scope="row"></th>
<td >   <span id="email-availability-status"></span> </td>
</tr>
<tr>
<th height="42" scope="row">User Name</th>
<td><input type="text" name="username" id="username" value="" onBlur="checkusernameAvailability()" class="form-control" required /></td>
</tr>
<tr>
<th width="24%"  scope="row"></th>
<td >   <span id="username-availability-status"></span> </td>
</tr>
</table>