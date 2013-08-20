<?php
//This file helps select the subject and sessional no for which marks are to be entered
include "session.php";
include "DB_connection.php";
include "conn.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Academics</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform1" action="marks_entry.php" method="POST">
		<div class="conteneur">	
			<div class="header">
				<a href ='/welcome.php' span class="title">SIMS Intranet Portal</a></span><br />
				<span class="sub-title">The complete information tool</span>
			</div>
			<div class="menu">
				<ul class="menu-list">
					<li><a href="aaa.php">Attendance</a></li> 
					<li><a href="academics.php">Academics</a></li> 
					<li><a href="student.php">Students</a></li>
					<li><a href="table.php">Time Table </a></li> 
					<li><a href="assgn.php">Assignment</a></li> 
					<li><a href="result.php">Results</a></li> 
					<li><a href="logout.php">Logout </a></li> 
				</ul>
			</div>
		  <div class="centre">
		    <p>&nbsp;</p>
<?php
echo "<font size='4'>Select the subject for which you want to enter marks:</font><br><br>";require "check.php";
$sql =("SELECT sims.allot.sub_code,sims.subject.sub_name
FROM sims.allot, sims.subject
WHERE allot.fac_code =$_SESSION[facode] 
AND sims.subject.sub_code=sims.allot.sub_code");
$ed = mysql_query($sql);
while($row = mysql_fetch_array($ed,MYSQL_ASSOC)) $row1[]=$row;
foreach ($row1 as $c)
{
  echo "<h1 style='font-family:verdana'>";
  echo '<input type="radio" name="subj1" value="'.$c['sub_code'].'"> ';
  echo $c['sub_name'];
  echo "</h1><br>";
}
?>

<br>
1st Sessional: 
<input type="radio" name="sess" value="1">
<br>
2nd Sessional: 
<input type="radio" name="sess" value="2">
<br>
3rd Sessional: 
<input type="radio" name="sess" value="3">
<br>

<br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted1" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
		  
<? include "footer.php"; ?>


