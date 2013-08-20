<?
include "session.php";
include "DB_connection.php";
include "header.php";
?>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<h1>Please Login below : </h1>
<form action='login_check.php' method=post>
<table border='0' cellspacing='0' cellpadding='0' align=center>
  <tr id='cat'>
  <tr> <td bgcolor='#f1f1f1' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;Login ID  &nbsp; &nbsp;
</font></td> <td bgcolor='#f1f1f1' align='center'><font face='verdana, arial, helvetica' size='2' >
<input type ='text' class='bginput' name='userid' ></font></td></tr>

<tr> <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;<br>Password  
</font></td> <td bgcolor='#ffffff' align='center'><font face='verdana, arial, helvetica' size='2' ><br>
<input type ='password' class='bginput' name='password' ></font></td></tr>


<tr> <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;<br>Faculty  

<input type ='radio' class='bginput' name='choice' value='faculty' checked></font></td>
 <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;<br>H.O.D  

<input type ='radio' class='bginput' name='choice' value='hod'></font></td>
 <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'>  &nbsp;<br>Administrator  
</font></td> <td bgcolor='#ffffff' align='center'><font face='verdana, arial, helvetica' size='2' ><br>
<input type ='radio' class='bginput' name='choice' value='admin'></font></td></tr></font></td> <td bgcolor='#ffffff'><font face='verdana, arial, helvetica' size='2' ></font></td> <td bgcolor='#ffffff'><font face='verdana, arial, helvetica' size='2' >

<tr> <td bgcolor='#f1f1f1' colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'><br>  
<input type='submit' value='Submit'> <input type='reset' value='Reset'>
</font></td> </tr>


<tr> <td bgcolor='#ffffff' ><font face='verdana, arial, helvetica' size='2' align='center'> &nbsp;<a href='sign.php'>New Member Sign UP</a></font></td> <td bgcolor='#ffffff' align='center'><font face='verdana, arial, helvetica' size='2' ><a href=forgot_password.php>
Forgot Password</a> ?</font></td></tr>

<tr> <td bgcolor='#f1f1f1' colspan='2' align='center'><font face='verdana, arial, helvetica' size='2' align='center'>  
&nbsp;</font></td> </tr>


</table></center></form>
<?
include "footer.php";
?>
