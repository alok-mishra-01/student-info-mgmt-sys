<?php
//The attendance entry sheet,the very first file that was written in this project 
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
<form name="myform" action="att_check.php" method="POST">
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
//Normal form check
$errmsg = ""; 
if (!isset($_POST['date']) || empty($_POST['date'])) $errmsg .= "<p>You forgot to enter the date!<p>"; 
if (!isset($_POST['subj']) || empty($_POST['subj'])) $errmsg .= "<p>Please select the subject!<p>"; 
$date=$_SESSION['date']=$_POST['date'];
$subj=$_SESSION['sub']=$_POST['subj'];
if($errmsg != ""){
echo $errmsg; 
echo "<a href=\"javascript:history.back();\">Please go back and fill out the missing fields</a>";}

  else{

//Ok a silly concept used here.First we extract the students as per the needs and then give them a attendance
//attend='D'(my shortform for default).This way we know these are the entries which were put just now.
//The line below this first removes any previous 'D' which creep in some cases like he might have hit the back button
        $delete = conn("DELETE FROM sims.att WHERE attend='D' AND sims.att.sess_id=$_SESSION[semesterid]");
//Here we try to find if the selected date already exists
        $check = conn("SELECT * FROM sims.att,sims.allot WHERE sims.att.att_dt ='$date' AND sims.allot.sub_code = '$subj' AND sims.allot.fac_code =$_SESSION[facode] AND sims.att.sess_id=$_SESSION[semesterid]");
        $num_rows = mysql_num_rows($check);
       if($num_rows!=0 ){
                          echo "<p>Sorry the entries for $date have already been locked.<p>";
                          echo "<a href=\"javascript:history.back();\">Please click here to enter another date";
          
                         }
             else{
//All checks done,proceed to process the $_post array
if (isset($_POST['submitted'])) {
$inst =("INSERT INTO sims.att(fac_code,sub_code,stu_name,stu_reg,stu_roll,attend,sess_id)
SELECT $_SESSION[facode], sims.allot.sub_code, sims.student.stu_name, sims.student.stu_reg, sims.student.stu_roll,'D',$_SESSION[semesterid] 
FROM sims.allot,sims.student 
WHERE allot.fac_code =$_SESSION[facode]
AND allot.sub_br = student.stu_br 
AND allot.stu_sem = student.stu_sem 
AND sims.allot.sub_code = '$subj'
AND allot.stu_sec = student.stu_sec;");
$ed=conn($inst);
//This is a classic example of bad coding with less time! What is happening here is that we're taking the 
//registration number of the first student in our result set and setting it a session variable to be used to calculate 
//attendance percentage in the file display.php.Though this concept works,a better solution can definetely be there.
   
$que = conn("SELECT stu_reg FROM sims.allot,sims.student,sims.subject WHERE allot.fac_code ='$_SESSION[facode]' 
AND subject.sub_br = student.stu_br
AND subject.sub_sem = student.stu_sem
AND allot.stu_sem = student.stu_sem
AND sims.allot.sub_code = '$subj'");  
$roll=mysql_result($que,0);
$_SESSION['roll']= $roll;

                            

//edited on 10th May 08 by Alok
 $my=("UPDATE sims.att SET att_dt='$date' WHERE attend='D' AND sub_code='$subj'");
                                   $res=conn($my);

                     print date("d-m-Y",strtotime("$date")); 
                                                           }



 



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
                                  

                     if($column_num<5){print("<TD>$row[$column_num]</TD>\n");}
      else{
           //These are 3 conditions for P,A and L. stu_roll has index 4 in the query,hence $row[4]
           for($k=6;$k<9;$k++)
                             {
       if($k==6){
            echo '<td><td>';
	    echo '<INPUT TYPE="radio"';
            print("NAME=$row[4] ");
            echo 'VALUE="P" CHECKED>';
            echo'</td>';
              }
       if($k == 7){
           echo '<td>';
	   echo '<INPUT TYPE="radio"';
           print("NAME=$row[4] ");
           echo 'VALUE="A">';
           echo'</td>';
              }
       if($k == 8){
        echo '<td>';
	echo '<INPUT TYPE="radio"';
        print("NAME=$row[4] ");
        echo 'VALUE="L">';
        echo'</td>';
              }

                              } 
                                   
                          
                                                              




              }

            
 

                               }
 




		print("</TR>\n");   
	}
	print("</TABLE>\n"); }

$query_string = "SELECT * FROM att WHERE attend='D' AND att_dt='$date' ORDER BY stu_roll";
display_db_query($query_string, $conn,
	TRUE, "border='4'");
echo "<tr>";
print("<td align = 'center'><input type = 'Submit' name = 'select' value = 'submit'></td>");

echo "</tr>";
print("<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>");

}
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
