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
 <form name="myform" action="sub_check.php" method="POST">
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
if (isset($_POST['submitted'])) {
$sql=conn("SELECT sub_code,sub_name,sub_cre,sub_br,sub_sem,sub_type FROM subject WHERE sub_code='$_POST[subj1]'");
// find out the number of columns in result
	$column_count = mysql_num_fields($sql)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE border='3' >\n");
	// print a bold header at top of table
	
		print("<TR>");

               
                 print("<TH>Subject Code</th>");
                 print("<TH>Subject Name</th>");
                 print("<TH>Credits</th>");
                 print("<TH>Branch</th>");
                  print("<TH>Semester</th>");
                  print("<TH>Type</th>");
		print("</TR>\n");


      
	// print the body of the table
while($row=mysql_fetch_row($sql)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < $column_count;$column_num++) {
                     
                        
                     print("<TD><INPUT TYPE=\"text\"");
                      print(" NAME=\"sub\" ");
                    print("value=\"$row[$column_num]\"");
                    print("size=\"8\"></TD>\n");}
      


		print("</TR>\n");   
	}
	print("</TABLE>\n"); 
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

