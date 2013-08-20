<?php
include "DB_connection.php";
include("conn.php");
include "session.php";
require "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Mark Entry Sheet</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform" action="marks_check.php" method="POST">
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
//form check
$errmsg = ""; 
if (!isset($_POST['subj1']) || empty($_POST['subj1'])) $errmsg .= "<p>Please select the subject!<p>"; 
if (!isset($_POST['sess']) || empty($_POST['sess'])) $errmsg .= "<p>Please select the sessional!<p>";
$subj1=$_SESSION['sub1']=$_POST['subj1'];
$_SESSION['sess']=$_POST['sess'];
if($errmsg != ""){
echo $errmsg; 
echo "<a href=\"javascript:history.back();\">Please go back and fill out the missing fields</a>";}

  else{ 
if (isset($_POST['submitted1'])) {
$allid=conn("SELECT allot_id FROM allot WHERE sub_code='$subj1' AND fac_code=$_SESSION[facode]");
$allotid=mysql_result($allid,0);
$_SESSION[allotid]=$allotid;

echo "Please leave the field blank if the student is absent or has scored 0<br>";

$query_string = "SELECT $_SESSION[facode], sims.allot.sub_code, sims.student.stu_name, sims.student.stu_reg, sims.academic.stu_roll 
FROM sims.allot,sims.student,sims.academic 
WHERE allot.allot_id =$allotid
AND student.stu_reg = academic.stu_reg
AND allot.stu_sem = student.stu_sem
AND sims.allot.sub_code = '$subj1'
AND allot.stu_sec = student.stu_sec ORDER BY stu_roll";
$result = conn($query_string);
//To find name of the subject
$su= $_SESSION['sub1'];
$subn=conn("SELECT sub_name FROM subject where sub_code='$su'");
$subname=mysql_result($subn,0);

	// find out the number of columns in result
	$column_count = mysql_num_fields($result)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE border='4' >\n");
	// Print a bold header at top of table
	
       print("<CAPTION><EM>Marks form for Sessional $_SESSION[sess], <font size='5'>'$subname'</font></EM></CAPTION>");
		print("<TR>");
                 print("<TH>Faculty Code");
                 print("<TH>Subject Code");
                 print("<TH>Names Of Students");
                 print("<TH>Registration No");
                 print("<TH>Roll No");
                 print("<TH>Mark for Sessional $_SESSION[sess]");
                
        
		print("</TR>\n");

      
	// print the body of the table
while($row=mysql_fetch_row($result)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < 6;$column_num++) {
                                  

                     if($column_num<5){print("<TD>$row[$column_num]</TD>\n");}
      
  else{
           
          
     
            echo '<td>';
	    echo '<INPUT TYPE="text"';
            print(" NAME=$row[3] ");
            echo 'size="4">';
            echo'</td>';
      
                              
                                   
                          
                                                           

              }

                               }
 




		print("</TR>\n");   
	}
	print("</TABLE>\n"); }

echo "<tr>";
print("<td align = 'center'><input type = 'Submit' name = 'select' value = 'submit'></td>");

echo "</tr>";
print("<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>");

}
?>
		   

                <p>&nbsp; </p>
		  </div>
  <div class="pied"> Design by <a href="http://aloktherocker.blogspot.com" target="_BLANK">Alok Mishra</a> <br />
    
<!--This page should only be edited by administrators-->
For  <a href="http://www.manipal.edu" target="_blank">MIT Manipal</a><a href="http://www.manipal.edu" target="_blank"><img src="spacer.gif" width="5" height="5" border="0"/></a> </div>
		</div>
	</body>
</html>
