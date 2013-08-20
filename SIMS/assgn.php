<?php
include "session.php";
include "conn.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Assignment</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform1" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
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
echo "<font size='4'>Please Select any of the subjects below:</font><br><br>";require "check.php";
$ed =conn("SELECT sims.allot.sub_code,sims.subject.sub_name
FROM sims.allot, sims.subject
WHERE allot.fac_code =$_SESSION[facode] 
AND sims.subject.sub_code=sims.allot.sub_code");

while($row = mysql_fetch_array($ed,MYSQL_ASSOC)) $row1[]=$row;
foreach ($row1 as $c)
{
  echo "<h1 style='font-family:verdana'>";
  echo '<input type="radio" name="subj2" value="'.$c['sub_code'].'"> ';
  echo $c['sub_name'];
  echo "</h1><br>";
}
?>
<h2><u>What do you want to do ?</u></h2>
<br><ul>
<li>Upload Assignment Question: &nbsp;&nbsp;&nbsp;&nbsp;
<input type="radio" name="choice" value="1"></li>
<br>
<li>Enter Assignment Submissions: &nbsp;
<input type="radio" name="choice" value="2"></li
<br>
<li>Enter Final Marks for Assignment: 
<input type="radio" name="choice" value="3"></li>
<br>
<br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted2" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
<?
/*
if (!isset($_POST['subj2']) || empty($_POST['subj2'])) $errmsg .= "<p>Please select the subject!<p>";
if (!isset($_POST['choice']) || empty($_POST['choice'])) $errmsg .= "<p>Please select your option <p>"; 
if($errmsg != ""){
echo $errmsg; 
echo "<a href=\"javascript:history.back();\">Please go back and fill out the missing fields</a>";}

else{*/

		  
if (isset($_POST['submitted2'])) 
{
$_SESSION['subj2']=$_POST['subj2'];
$choice=$_POST['choice'];
if($choice=='1'){print "<script>";
       print " self.location='upload.php';"; 
          print "</script>";}
if($choice=='2'){print "<script>";
       print " self.location='assgn_enter.php';"; 
          print "</script>";}
if($choice=='3'){print "<script>";
       print " self.location='assgn_marks.php';"; 
          print "</script>";}
if($choice==''){
       print "<h1>Please select atleast one option!</h1>"; 
        }
if (!isset($_POST['subj2']) || empty($_POST['subj2'])){
       print "<h1>Please select a subject!</h1>"; }

}

include "footer.php"; 

?>


