<?php
include "DB_connection.php";
include("conn.php");
include "session.php";
require "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Assignment</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform" action="assgn_check.php" method="POST">
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
$allid=conn("SELECT allot_id FROM allot WHERE sub_code='$_SESSION[subj2]' AND fac_code=$_SESSION[facode]");
$allotid=mysql_result($allid,0);
$_SESSION[allotid1]=$allotid;
?>
<h2>Reference:</h2>
<ul>
<li>Y: Assignment submission in time</li><br>
<li>N: Assignment not submitted</li><br>
<li>L: Asssignment late submission</li><br>
<?
$query_string = "SELECT sims.allot.sub_code, sims.student.stu_name, sims.student.stu_reg, sims.academic.stu_roll,assgn1,assgn2,assgn3,assgn4,assgn5 
FROM sims.allot,sims.student,sims.academic 
WHERE allot.allot_id =$allotid
AND student.stu_reg = academic.stu_reg
AND allot.stu_sem = student.stu_sem
AND sims.allot.sub_code = '$_SESSION[subj2]' 
AND allot.stu_sec = student.stu_sec ORDER BY stu_roll";
$result = conn($query_string);
//To find name of the subject
$subn=conn("SELECT sub_name FROM subject where sub_code='$_SESSION[subj2]'");
$subname=mysql_result($subn,0);

	// find out the number of columns in result
	$column_count = mysql_num_fields($result)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE border='4' >\n");
	// Print a bold header at top of table
	
       print("<CAPTION><EM>Assignment Submissions for <font size='5'>'$subname'</font></EM></CAPTION>");
		print("<TR>");
          
                 print("<TH rowspan='2'>Subject Code");
                 print("<TH rowspan='2'>Names Of Students");
                 print("<TH rowspan='2'>Registration No");
                 print("<TH rowspan='2'>Roll No");
                 print("<TH colspan='5'>Assignments");
                 print("<TR><TH>1st<TH>2nd<TH>3rd<TH>4th<TH>5th");
                
        
		print("</TR>\n");


	// print the body of the table
while($row=mysql_fetch_row($result)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < 5;$column_num++) {
                                  

                     if($column_num<=3){print("<TD>$row[$column_num]</TD>\n");}
      
  else{
           
         for($k=4;$k<9;$k++)
                             {
       if($k==4){
            
           echo '<td>';
	    echo '<INPUT TYPE="text"';
            print(" NAME=$row[3][] ");
            print("value=\"$row[4]\"");
            echo 'size="4" >';
            echo'</td>';
               }
 if($k==5){
            
            echo '<td>';
	    echo '<INPUT TYPE="text"';
            print(" NAME=$row[3][] ");
            print("value=\"$row[5]\"");
            echo 'size="4" >';
            echo'</td>';
               }
 if($k==6){
            
            echo '<td>';
	    echo '<INPUT TYPE="text"';
            print(" NAME=$row[3][] ");
            print("value=\"$row[6]\"");
            echo 'size="4" >';
            echo'</td>';
               }



 if($k==7){
            
            echo '<td>';
	    echo '<INPUT TYPE="text"';
            
            print(" NAME=$row[3][] ");
            print("value=\"$row[7]\"");
            echo 'size="4" >';
            echo'</td>';
               }
 if($k==8){
            
            echo '<td>';
	    echo '<INPUT TYPE="text"';
            
            print(" NAME=$row[3][] ");
            print("value=\"$row[8]\"");
            echo 'size="4" >';
            echo'</td>';
               }
                           
                }                   
                          
                                                           

              }

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
