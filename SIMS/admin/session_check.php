<? 
include "/opt/lampp/htdocs/session.php";
require "/opt/lampp/htdocs/check.php";
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
			<div id="header">
				<h1>Administrator Area</h1>
			</div>
                         <div id="menu">
				<ul>
					<li ><a href="admin.php">Home</a></li>
                                        <li class="selected"><a href="allot.php">Subject Allotment</a></li>
                                        <li><a href="table_edit.php">Time-Table</a></li>
					<li><a href="subject.php">Subjects</a></li>
                                        <li><a href="student.php">Students</a></li>
					<li><a href="/logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				<div class="article">
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
<?
if (isset($_POST['submitted'])) {
                               
$_SESSION['begindate']=$_POST['begindate'];
$_SESSION['enddate']=$_POST['enddate'];
$_SESSION['evenodd']=$_POST['evenodd'];

$ses=explode("-",$_SESSION['begindate']);
$_SESSION['sessionid']= $ses[0].$_SESSION[evenodd];
}
?>
<h2>Welcome to the new semester intialisation process for .</h2><p>
<h3>Now please click on subject allotment at the top to get started</h3>

</p>
			</div>	</div>
			<br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			
		
	</body></html>

