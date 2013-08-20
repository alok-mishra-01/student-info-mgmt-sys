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
<form name="myform" action="admin.php" method="POST">
		<div id="main">
			<div id="header">
				<h1>Administrator Area</h1>
			</div>
		
			<div id="content">
				<div class="article">
					<h2><u>Welcome to the Administrator Area</u></h2><br /></div>
				<div class="article">
					<h3>Please Select the branch and continue</h3>
					<p>
<br>
<td><select name="branch">
<option value="E&E">E&E</option>
<option value="E&C">E&C</option>
<option value="CSE">CSE</option>
<option value="PMT">PMT</option>
<option value="ICT">ICT</option>
<option value="I&C">I&C</option>
<option value="BIOMED">BIOMED</option>
<option value="MECH">MECH</option>
<option value="IP">IP</option>
<option value="CHEM">CHEM</option>
<option value="CIVIL">CIVIL</option>
</select></td></tr><p>
<input type = "Submit" name = "submitted2" value = "Click here to Submit">
				</div>
			</div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>
