<?
//Attendance Subject Selection

include "DB_connection.php";
include "session.php";
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Attendance</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform1" action="att_entry1.php" method="POST">
		<div class="conteneur">	
			<div class="header">
			<a href ='/welcome.php' span class="title">SIMS Intranet Portal</a></span><br />
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
<?php

echo "<font size='4'>Select the subject you want to take attendance for:</font><br><br>";require "check.php";
//Nothing unusual here,just a sql to extract the subjects and display it with radio buttons which carry the value
//of corresponding 'subject codes' which thus becomes a form element
//P.S : I swear by radio buttons wherever possible,textboxes are dangerous. Never ever trust a user!
$sql =("SELECT sims.allot.sub_code,sims.subject.sub_name
FROM sims.allot, sims.subject
WHERE allot.fac_code =$_SESSION[facode]
AND sims.subject.sub_code=sims.allot.sub_code
 AND sims.subject.sess_id=$_SESSION[semesterid]");
$ed = mysql_query($sql);
while($row = mysql_fetch_array($ed,MYSQL_ASSOC)) $row1[]=$row;
foreach ($row1 as $c)
{
  echo "<h1 style='font-family:verdana'>";
  echo '<input type="radio" name="subj" value="'.$c['sub_code'].'"> ';
  echo $c['sub_name'];
  echo "</h1><br>";
}

?>

<!--Below is the javascript that i borrowed from tiagra to display a calendar to select the date on which...  -->
<!-- ..attendance is taken.Using the var name cal9 has a special meaning as it will output in mysql date format      -->
<!--   If this format needs to be changed,change the var name,refer the lovely documentation by tiagra on their site   -->
<!--    Also keep in mind not to remove the files calendar3.js and calendar.html  -->
<!--  P.S:try to fix the ugly problem with this js due to which this wont run on IE,if you get time  -->


<script language="JavaScript" src="calendar3.js"></script>
</form>

<tr bgcolor='#f1f1f1'><td ><font face='Verdana' size='2' >&nbsp;Attendance for Date (yyyy-mm-dd) : </td>
<td  ><input type=text name=date value=''></td></tr>
<a href="javascript:cal9.popup();"><img src="img/cal.gif" width="16" height="16" border="0" alt="Click Here to Pick up the date"></a><br>
<script language="JavaScript">
			

				var cal9 = new calendar3(document.forms['myform1'].elements['date']);
				cal9.year_scroll = false;
				cal9.time_comp = false;
				
			
			</script>
<br><br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
		  </div>
  <div class="pied"> Design by <a href="http://aloktherocker.blogspot.com" target="_BLANK">Alok Mishra</a> <br />

<!--This page should only be edited by administrators-->
For  <a href="http://www.manipal.edu" target="_blank">MIT Manipal</a><a href="http://www.manipal.edu" target="_blank"><img src="spacer.gif" width="5" height="5" border="0"/></a> </div>
		</div>
	</body>
</html>
