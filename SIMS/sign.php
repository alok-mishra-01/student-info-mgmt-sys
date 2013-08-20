<?
include "header.php";
?>
				<h1>Sign up here : </h1>

<table border='0' width='50%' cellspacing='0' cellpadding='0' align=center><td width="57%"><form name=form1 method=post action=signup_check.php onsubmit='return validate(this)'><input type=hidden name=todo value=post>

<tr bgcolor='#f1f1f1'><td align=center colspan=2><font face='Verdana' size='2' ><b>Signup</b></td></tr>
<tr >
  <td >&nbsp;<font face='Verdana' size='2' >User ID</td><td width="43%" ><font face='Verdana' size='2'>
  <input type=text name=userid></td></tr>

<tr bgcolor='#f1f1f1'><td >&nbsp;<font face='Verdana' size='2' >Password</td><td ><font face='Verdana' size='2'><input type=password name=password></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='2' >Re-enter Password</td><td ><font face='Verdana' size='2'><input type=password name=password2></td></tr>


<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Email</td><td  ><input type=text name=email></td></tr>
<tr ><td >&nbsp;<font face='Verdana' size='2' >Name</td><td ><font face='Verdana' size='2'><input type=text name=name></td></tr>

<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Faculty Code</td><td  ><input type=text name=fac></td></tr>

<tr bgcolor='#f1f1f1'><td align=center colspan=2><input type=submit value=Signup></td></tr>
</table>

			
<?
include "footer.php";
?>
