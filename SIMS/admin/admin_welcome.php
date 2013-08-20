<?
include "session.php";
require "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Admin Area</title>
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
					<li><a href="notavailable.php">Attendance</a></li> 
					<li><a href="notavailable.php">Academics</a></li> 
					<li><a href="notavailable.php">Students</a></li> 
					<li><a href="notavailable.php">Time Table </a></li> 
					<li><a href="notavailable.php">Assignment</a></li> 
					<li><a href="notavailable.php">Results</a></li> 
					<li><a href="logout.php">Logout </a></li> 
				</ul>
			</div>
		  <div class="centre">
		    <p>&nbsp;</p>
<?php

echo '<h1>******Welcome to the administrator area******</h1> <br>';
echo '<br> Please note that for any uneven changes to the current session/semester may <br>';
echo 'damage the entire existing system <br><br>';
?>
<p>To start a new session/semester click <a href= "semester_begin.php">here</a><p>
<p>To edit data for the current ongoing session click <a href= "admin_edit.php">here</a><p>
<? include 'footer.php'; ?>






