<?
include "session.php";
include "DB_connection.php";
include "conn.php";
include "header1.html";


$sql=conn("SELECT stu_name,stu_br,stu_roll,stu_reg,stu_sem,stu_sec,stu_yr_add,stu_cgpa FROM student WHERE stu_reg='$_SESSION[reg]'");
// find out the number of columns in result
	$column_count = mysql_num_fields($sql)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE border='3' >\n");
	// print a bold header at top of table
	
		print("<TR>");

               
                 print("<TH>Name</th>");
                 print("<TH>Branch</th>");
                 print("<TH>Roll No</th>");
                 print("<TH>Reg No</th>");
                  print("<TH>Semester</th>");
                  print("<TH>Section</th>");
                 print("<TH>Year Of Admission</th>");
		print("<TH>CGPA</th>");
                  print("</TR>\n");


      
	// print the body of the table
while($row=mysql_fetch_row($sql)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < $column_count;$column_num++) {
                     
                        
                     print("<TD>$row[$column_num]</TD>\n");}
      


		print("</TR>\n");   
	}
	print("</TABLE>\n"); 


?>


<br>
<h2>In case of any error in this information,please contact the system administrator</h2><p>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>

	</body></html>


