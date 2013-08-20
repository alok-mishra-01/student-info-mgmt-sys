<?php
include "session.php";
echo "<html><head>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=ISO-8859-15\" />";
echo "<style type=\"text/css\">@import \"styles.css\";</style>";
echo "<title>SIMS intranet portal</title></head>";

?>
<body>
<form enctype="multipart/form-data" action="uploader.php" method="POST">
		<div class="conteneur">	
			<div class="header">
				<a href ='/sims' span class="title">SIMS Intranet Portal</a></span><br />
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

<input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
<input type="submit" value="Upload File" />
</form>
<? include 'footer.php'; ?>
