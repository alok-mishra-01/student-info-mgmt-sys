<?php
include "DB_connection.php";
include "session.php";
include("conn.php");
include "header.php";
//form check
$errmsg = ""; 
if (!isset($_POST['date1']) || empty($_POST['date1'])) $errmsg .= "<p>You forgot to enter the date!<p>"; 
if (!isset($_POST['subj3']) || empty($_POST['subj3'])) $errmsg .= "<p>Please select the subject!<p>"; 
$date=$_SESSION['date1']=$_POST['date1'];
$subj=$_SESSION['sub3']=$_POST['subj3'];
if($errmsg != ""){
echo $errmsg; 
echo "<a href=\"javascript:history.back();\">Please go back and fill out the missing fields</a>";}

  else{ 
echo 'Date: ';
print date("d-m-Y",strtotime("$date"));
echo '<br> Subject Code: ',$subj;
$query_string = "SELECT stu_name,stu_reg,stu_roll,attend FROM att WHERE att_dt='$date' and sub_code='$subj' ORDER BY stu_roll";
$result = conn($query_string);
$column_count = mysql_num_fields($result)
	or die("display_db_query:" . mysql_error());

	print("<TABLE border='6' >\n");


		print("<TR>");

               
                 print("<th>Names Of Students</th>");
                 print("<th>Registration No</th>");
                 print("<th>Roll No</th>");
          
                 print("<th>Attendance</th>");
		print("</TR>\n");


      
	// print the body of the table
while($row=mysql_fetch_row($result)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < $column_count;$column_num++) {
                           //print("<TD>$each</TD>\n");
                          if($row[3]=='A'){ 
                                  print("<TD bgcolor='Tomato'>$row[$column_num]</TD>\n");}
                     else{

                     print("<TD>$row[$column_num]</TD>\n");}
      

                               }
 
                        



		print("</TR>\n");   
	}
	print("</TABLE>\n"); }

print("<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>");

include "footer.php";

?>
        
