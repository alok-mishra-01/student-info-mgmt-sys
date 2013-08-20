<?
include '/opt/lampp/htdocs/session.php';
include '/opt/lampp/htdocs/check.php';
include '/opt/lampp/htdocs/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
		
		<title>Administrators</title><meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Alok Mishra" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<link rel="stylesheet" title="Normal" type="text/css" media="screen" href="./styles/screen.css" /></head>

	<body>
      
		<div id="main">
 <form name="myform" action="marks_check.php" method="POST">
			<div id="header">
				<h1>Administrator Area</h1>
			</div>
			<div id="menu">
				<ul>
					<li ><a href="admin.php">Home</a></li>
                                        <li class="selected"><a href="acads.php">Academics</a></li>
					<li><a href="att_edit.php">Attendance</a></li>
                                        <li><a href="table_edit.php">Time-Table</a></li>
					<li><a href="subject.php">Subjects</a></li>
                                        <li><a href="student.php">Students</a></li>
					<li><a href="/logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				<div class="article">
					<h2>Academics</h2> 
<?php
echo "<br><font size='3'>Select the subject for which you want to modify marks:</font><br><br>";
$sql =("SELECT sims.subject.sub_code,sims.subject.sub_name
FROM sims.subject WHERE sub_br='E&E'");
$ed = conn($sql);
while($row = mysql_fetch_array($ed,MYSQL_ASSOC)) $row1[]=$row;
foreach ($row1 as $c)
{
  echo "<h3 style='font-family:verdana'>";
  echo '<input type="radio" name="subj1" value="'.$c['sub_code'].'"> ';
  echo $c['sub_name'];
  echo "</h3><br>";
}
?>
<p>
<font size='3'>Select the Semester and Sessional number:</font>
<p>
<td><select name="sems">
<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
<option value="5">5th</option>
<option value="6">6th</option>
<option value="7">7th</option>
<option value="8">8th</option>
</select></td></tr>
<br><p>
<h3>1st Sessional: 
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
