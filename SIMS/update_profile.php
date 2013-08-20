<?
include "session.php";
include "DB_connection.php";
include "header.php";
// check the login details of the user 
require "check.php";

// Collects all data of the user
$row=mysql_fetch_object(mysql_query("select * from signup where userid='$_SESSION[userid]'"));



// One form with a hidden field is prepared with default values taken from field. 
echo "<form action='update_profile_check.php' method=post>
<input type=hidden name=todo value=update_profile>

<table border='0' cellspacing='0' cellpadding='0' align=center width='30%'>
 <tr bgcolor='#ffffff' > <td colspan='2' align='center'>
<font face='verdana, arial, helvetica' size='2' align='center'>&nbsp;<b>Update Profile</b> 
</font></td> </tr>

<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Email</td>
<td  ><input type=text name=email value='$row->email'></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='2' >Name</td>
<td ><font face='Verdana' size='2'><input type=text name=name value='$row->name'></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='2' >Faculty Code</td>
<td ><font face='Verdana' size='2'><input type=text name=fac value='$row->fac_code'></td></tr>


<tr bgcolor='#ffffff'><td align=center colspan=2><input type=submit value=Update></td></tr>";


echo "</table>";
require "bottom.php";
include "footer.php";
?>