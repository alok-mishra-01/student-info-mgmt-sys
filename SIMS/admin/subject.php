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
 <form name="myform" action="sub_edit.php" method="POST">
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
					<li class="selected"><a href="subject.php">Subjects</a></li>
                                        <li><a href="student.php">Students</a></li>
					<li><a href="/logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				<div class="article">
					<h2>Subject Changes</h2>
<?php
echo "<br><font size='3'>Select the subject which you want to modify:</font><br><br>";
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

<br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
	</div></div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>

