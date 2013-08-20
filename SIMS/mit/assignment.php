<?php
include "session.php";
include "conn.php";
include "header1.html";

$sql=conn("SELECT assgn1,assgn2,assgn3,assgn4,assgn5,sess1,sess2,sess3,internal,assgn_marks FROM academic WHERE stu_reg='$_SESSION[reg]' AND allot_id=(SELECT allot_id FROM allot WHERE sub_code='$_SESSION[subject]' AND stu_sec=(SELECT stu_sec FROM student WHERE stu_reg='$_SESSION[reg]') AND stu_sem=(SELECT stu_sem FROM student WHERE stu_reg='$_SESSION[reg]'))");
$column_count = mysql_num_fields($sql)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE border='3' >\n");
	// print a bold header at top of table
	
		print("<TR>");

               
                 print("<TH>Assign 1</th>");
                print("<TH>Assign 2</th>");
		print("<TH>Assign 3</th>");
		print("<TH>Assign 4</th>");
		print("<TH>Assign 5</th>");
                 print("<TH>Sess 1</th>");
                 print("<TH>Sess 2</th>");
                 print("<TH>Sess 3</th>");
                  print("<TH>Out of 40</th>");
                  print("<TH>Assgn marks</th>");
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
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
	</div></div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>
