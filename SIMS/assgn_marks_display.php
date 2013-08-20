<?php
include "DB_connection.php";
include("conn.php");
include "header.php";
include "session.php";
require "check.php";


$allid=conn("SELECT allot_id FROM allot WHERE sub_code='$_SESSION[subj2]' AND fac_code=$_SESSION[facode]");
$allotid=mysql_result($allid,0);
$_SESSION[allotid1]=$allotid;

$query_string = "SELECT sims.allot.sub_code, sims.student.stu_name, sims.student.stu_reg, sims.academic.stu_roll,assgn1,assgn2,assgn3,assgn4,assgn5,assgn_marks 
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
                 print("<TH colspan='6'>Assignments");
                 print("<TR><TH>1st<TH>2nd<TH>3rd<TH>4th<TH>5th<TH>Marks");
                
        
		print("</TR>\n");


	// print the body of the table
while($row=mysql_fetch_row($result)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < $column_count;$column_num++) {
                                  

                   print("<TD>$row[$column_num]</TD>\n");

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
