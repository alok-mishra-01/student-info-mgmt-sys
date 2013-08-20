<?php
include "session.php";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Welcome</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
		<div class="conteneur">	
			<div class="header">
				<a href ='/welcome.php' span class="title">SIMS Intranet Portal</a></span><br />
				<span class="sub-title">The complete information tool</span>
			</div>
<div class="centre">
		    <p>&nbsp;</p>
<h1>Please select the session to continue: </h1>
<h2>(If in doubt,please select the current semester)</h2><br><p>
<td><select name="year">
<?
for($i=2008;$i<2038;$i++){
 echo "<option value=\"$i\">$i</option>";
}
?>
</select></td></tr>
<td  ><select name="evenodd">
<option value="even">Even</option>
<option value="odd">Odd</option>
</select></td></tr>
<p>
<tr>
<td align = 'center'><input type = 'Submit' name = 'select' value = 'submit'></td>

</tr>

<?
if (isset($_POST['select'])) 
{
 $_SESSION['semesterid']=$_POST['year'].$_POST['evenodd'];
  print "<script>";
       print " self.location='welcome.php';"; 
          print "</script>";
}

include "footer.php"
?>
