<? 
include "session.php";
require "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Allotments</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform" action="session_check.php" method="POST">
		<div class="conteneur">	
			<div class="header">
				<a href ='/' span class="title">SIMS Intranet Portal</a></span><br />
				<span class="sub-title">The complete information tool</span>
			</div>
			<div class="menu">
				<ul class="menu-list">
					<li><a href="aaa.php">Attendance</a></li> 
					<li><a href="academics.php">Academics</a></li> 
					<li><a href="student.php">Student Records</a></li>
					<li><a href="table.php">Time Table </a></li> 
					<li><a href="assgn.php">Assignment</a></li> 
					<li><a href="result.php">Results</a></li> 
					<li><a href="logout.php">Logout </a></li> 
				</ul>
			</div>
		  <div class="centre">
		    <p>&nbsp;</p>

<script language="JavaScript" src="calendar3.js"></script>


<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Select the beginning date of the session (yyyy-mm-dd) : </td>
<td  ><input type=text name=begindate value=''></td></tr>
<a href="javascript:cal9.popup();"><img src="img/cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the date"></a><br><br><br>
<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Select the end date of the session (yyyy-mm-dd) : </td>
<td  ><input type=text name=enddate value=''></td></tr>
<a href="javascript:cal10.popup();"><img src="img/cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the date"></a><br><br><br>
<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Select if its an even or odd semester: </td>
<td  ><select name="evenodd">
<option value="even">Even</option>
<option value="odd">Odd</option>
</select></td></tr>
</form>
<script language="JavaScript">
			

				var cal9 = new calendar3(document.forms['myform'].elements['begindate']);
				cal9.year_scroll = true;
				cal9.time_comp = false;
                               
                                var cal10 = new calendar3(document.forms['myform'].elements['enddate']);
				cal9.year_scroll = true;
				cal9.time_comp = false;
				
			
			</script>

<br><br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
<? include "footer.php"; ?>
      





