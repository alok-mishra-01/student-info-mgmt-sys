<?

include "session.php";
include "DB_connection.php";
include("conn.php");
include "header.php";


echo "<h2>Marks for Sessional No. '$_SESSION[sess]' entered!</h2> <br>\n";
$int=conn("SELECT sess1,sess2,sess3 FROM academic WHERE allot_id='$_SESSION[allotid]' ORDER BY stu_roll");

$reg=conn("SELECT stu_reg FROM academic WHERE allot_id='$_SESSION[allotid]' ORDER BY stu_roll");
$ret=0;
while($rt=mysql_fetch_row($int))
{
$rw=mysql_fetch_row($reg);
rsort($rt);

  for($i=0;$i<2;$i++)
  {
   $ret=$ret+$rt[$i];
   
   }

$updt=conn("UPDATE academic set internal='$ret' WHERE stu_reg='$rw[0]' AND allot_id='$_SESSION[allotid]'");

$ret=0;
}
              

$query_string = "SELECT sims.student.stu_name, sims.student.stu_reg, sims.academic.stu_roll,sims.academic.sess1,sims.academic.sess2,sims.academic.sess3,academic.internal 
FROM sims.allot,sims.student,sims.academic 
WHERE allot.allot_id ='$_SESSION[allotid]'
AND student.stu_reg = academic.stu_reg
AND allot.stu_sem = student.stu_sem
AND sims.allot.sub_code = '$_SESSION[sub1]'
AND allot.stu_sec = student.stu_sec ORDER BY academic.stu_roll";

$result = conn($query_string);

	// find out the number of columns in result
	$column_count = mysql_num_fields($result)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE border='6' >\n");
	// print a bold header at top of table
	
		print("<TR>");

               
                 print("<TH rowspan='2'>Names Of Students</th>");
                 print("<TH rowspan='2'>Registration No</th>");
                 print("<TH rowspan='2'>Roll No</th>");
          
                 print("<TH><TH colspan='4'>Sessionals</th>");
                 print("<TR><TH>1st<TH>2nd<TH>3rd");
                  print("<TH rowspan='1'>Out of 40</th>");
		print("</TR>\n");


      
	// print the body of the table
while($row=mysql_fetch_row($result)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < $column_count;$column_num++) {
                     
                        
                     print("<TD>$row[$column_num]</TD>\n");}
      


		print("</TR>\n");   
	}
	print("</TABLE>\n"); 


?>
<p><h2>If you want to change any of the above entries,please click <a href="edit_mark.php">here</a></h2><p>
<p>OR<p>

<a href=lock.php><p><h1>Click here to lock these entries<p></h1></a>
(Only the administrator can edit it later)<br>

                <p>&nbsp; </p>
<? include "footer.php"; ?>
