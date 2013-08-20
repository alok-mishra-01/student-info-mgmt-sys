<?
include "session.php";
include "conn.php";
include "header1.html";

$sql=conn("SELECT sub_code,sub_name,sub_cre,sub_br,sub_sem,sub_type FROM subject WHERE sub_code='$_SESSION[subject]'");
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
                     
                        
                     print("<TD>$row[$column_num]</TD>\n");}
      


		print("</TR>\n");   
	}
	print("</TABLE>\n"); 

?>

<br>

 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
	</div></div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>

