<?php
include "session.php";
include "conn.php";
include "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Time Table</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform" action="table_check.php" method="POST">
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

echo "Please enter the class timings strictly in format(For example 8-9 or 10.30-11.30) <br>";
echo "***Leave the field blank wherever not applicable***<br>"; 
$retrieve = conn("SELECT fac_code,sub_code,stu_sem,stu_sec FROM allot WHERE  sub_br='$_SESSION[branch]' AND sess_id =(SELECT sess_id FROM session WHERE sess_begin='$_SESSION[begindate]' AND sess_end='$_SESSION[enddate]')");


	print("<TABLE border='6' >\n");

	
		print("<TR>");

               
                 print("<TH>Faculty Code</TH>");
                 print("<TH>Subject Code</TH>");
 print("<TH>Semester</TH>");
 print("<TH>Section</TH>");
       
     print("<TH>Mon</TH>");
     print("<TH>Tue</TH>");
     print("<TH>Wed</TH>");
     print("<TH>Thu</TH>");
     print("<TH>Fri</TH>");
     print("<TH>Sat</TH>");

          
		print("</TR>\n");


      
	// print the body of the table
while($row=mysql_fetch_row($retrieve)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < 5;$column_num++) {
                   
                        if($column_num<4){
                     print("<TD>$row[$column_num]</TD>\n");}else{

for($i=5;$i<11;$i++){
$allid=conn("SELECT allot_id FROM allot WHERE fac_code='$row[0]' AND sub_code='$row[1]'");
$allotid=mysql_result($allid,0);?>
<TD><input type=text size="3" name="<? echo $allotid."[]"; ?>"></TD><?

}}
}
      


		print("</TR>\n");   
	}
	print("</TABLE>\n"); 
echo "<tr>";
print("<td align = 'center'><input type = 'Submit' name = 'select' value = 'submit'></td>");

echo "</tr>";
print("<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>");
include "footer.php";

?>






