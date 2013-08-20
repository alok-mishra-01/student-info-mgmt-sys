<?php
include "session.php";
include "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Students</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
<script type="text/javascript" src="numbersOnly.js"></script>
	</head>

	<body>
<form name="myform" action="student_display.php" method="POST">
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
<h2>Please Enter the registration number of the student whose records you want to access : </h2>
<p>
<input type=text size="10" name="reg"  maxlength="10" onkeypress="return numbersonly(this, event)">
<p><p>
Or 
<h2>Select the group of students whose details you want to view:</h2>
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
<br><p>Enter the section:
<input type="text" size="2" name="section">
<br><p>
<tr>
<td align = 'center'><input type = 'Submit' name = 'select' value = 'submit'></td>
</tr>
<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>

<? include "footer.php" ?>

