<?
include '/opt/lampp/htdocs/session.php';
include '/opt/lampp/htdocs/check.php';
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
			<div id="header">
				<h1>Administrator Area</h1>
			</div>
			<div id="menu">
				<ul>
					<li ><a href="admin.php">Home</a></li>
                                        <li><a href="acads.php">Academics</a></li>
					<li><a href="att_edit.php">Attendance</a></li>
                                        <li><a href="table_edit.php">Time-Table</a></li>
					<li><a href="subject.php">Subjects</a></li>
                                        <li class="selected"><a href="student.php">Students</a></li>
					<li><a href="/logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				<div class="article">
					
<h2>Select the group of students whose details you want to change:</h2>
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

<h3>Or</h3>
<h2>Enter the registration number of the student whose records you want to modify: </h2>
<p>
<input type=text size="10" name="reg"  maxlength="10" onkeypress="return numbersonly(this, event)">
<p><p>
<td align = 'center'><input type = 'Submit' name = 'select' value = 'submit'></td>
</tr>
<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>
<p>&nbsp; </p>
	</div></div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>

