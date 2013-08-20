<?php
include "DB_connection.php";
include("conn.php");
include "session.php";
require "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Attendance Sheet</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform" action="att_recheck.php" method="POST">
		<div class="conteneur">	
			<div class="header">
				<a href ='/welcome.php' span class="title">SIMS Intranet Portal</a></span><br />
				<span class="sub-title">The complete information tool</span>
			</div>
			<div class="menu">
				<ul class="menu-list">
					<li><a href="aaa.php">Attendance</a></li> 
					<li><a href="academic.php">Academics</a></li> 
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
$date=$_SESSION['date'];
$subj=$_SESSION['sub'];

                                                    



//Displays in form of table


function display_db_query($query_string, $conn, $header_bool, $table_params) {

$result = conn($query_string);
//To find name of the subject
$su= $_SESSION['sub'];
$subn=conn("SELECT sub_name FROM subject where sub_code='$su'");
$subname=mysql_result($subn,0);

	// find out the number of columns in result
	$column_count = mysql_num_fields($result)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE $table_params >\n");
	// Print a bold header at top of table
	if($header_bool) {
       print("<CAPTION><EM>Attendance form for  <font size='5'>'$subname'</font></EM></CAPTION>");
		print("<TR>");
                 print("<TH rowspan='2'>Faculty Code");
                 print("<TH rowspan='2'>Subject Code");
                 print("<TH rowspan='2'>Names Of Students");
                 print("<TH rowspan='2'>Registration No");
                 print("<TH rowspan='2'>Roll No");
                 print("<TH rowspan='2'><TH colspan='3'>Attendance");
                 print("<TR><TH>Present<TH>Absent<TH>Late");
                
        
		print("</TR>\n");
	}

      
	// print the body of the table
while($row=mysql_fetch_row($result)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < 6;$column_num++) {
                                  

                     if($column_num<5){
                                        if($row[6]=='A'){ 
                                                      print("<TD bgcolor='Tomato'>$row[$column_num]</TD>\n");}
                                                     else{

                                                          print("<TD>$row[$column_num]</TD>\n");}}
                    else{
               
           
           for($k=6;$k<9;$k++)
                             {
       if($k==6){
            echo '<td><td>';
	    echo '<INPUT TYPE="radio"';
            print("NAME=$row[4] ");
  if($row[6] == 'P') echo ' checked="checked" ';
            echo 'VALUE="P">';
           echo '</td>';
              }
       if($k == 7){
           echo '<td>';
	   echo '<INPUT TYPE="radio"';
           print("NAME=$row[4] ");
 if($row[6] == 'A') echo 'checked="checked" ';
          echo 'VALUE="A">';
           echo '</td>';
              }
       if($k == 8){
        echo '<td>';
	echo '<INPUT TYPE="radio"';
   print("NAME=$row[4] ");
 if($row[6] == 'L') echo 'checked="checked" ';
        echo 'VALUE="L">';
           echo '</td>';
       
              }

                              } 
                                   
                          
                                                              




              }

            
 

                               }
 




		print("</TR>\n");   
	}
	print("</TABLE>\n"); }

$query_string = "SELECT * FROM att WHERE att_dt='$date' and sub_code='$subj' ORDER BY stu_roll";
display_db_query($query_string, $conn,
	TRUE, "border='4'");
echo "<tr>";
print("<td align = 'center'><input type = 'Submit' name = 'select' value = 'submit'></td>");

echo "</tr>";
print("<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>");



?>
		   

                <p>&nbsp; </p>
		  </div>
  <div class="pied"> Design by <a href="http://aloktherocker.blogspot.com" target="_BLANK">Alok Mishra</a> <br />
    
<!--This page should only be edited by administrators-->
For  <a href="http://www.manipal.edu" target="_blank">MIT Manipal</a><a href="http://www.manipal.edu" target="_blank"><img src="spacer.gif" width="5" height="5" border="0"/></a> </div>
		</div>
	</body>
</html>
