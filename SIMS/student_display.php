<?
include "conn.php";
include "session.php";
include "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Time Table</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>

		<div class="conteneur">	
			<div class="header">
				<a href ='/welcome.php' span class="title">SIMS Intranet Portal</a></span><br />
				<span class="sub-title">The complete information tool</span>
			</div>
<div class="centre">
		    <p>&nbsp;</p>
<?

if (isset($_POST['select'])) {
                       

function display_db_query($query_string, $conn, $header_bool, $table_params) {

$result = conn($query_string);

	// find out the number of columns in result
	$column_count = mysql_num_fields($result)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE $table_params >\n");
	// Print a bold header at top of table
	if($header_bool) {
		print("<TR>");

                 print("<th>Name</th>");
                 print("<th>Branch</th>");
                 print("<th>Reg No</th>");
                 print("<th>Roll No</th>");
                 print("<th>Semester</th>");
                 print("<th>Section</th>");
                 print("<TH>Att percentage</TH>");
                 print("<th>CGPA</th>");
		print("</TR>\n");
	}

      
	// print the body of the table
while($row=mysql_fetch_row($result)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($column_num = 0;$column_num < 9;$column_num++) {
                                  
                                          print("<TD>$row[$column_num]</TD>\n");


            
 

                               }
 




		print("</TR>\n");   
	}
	print("</TABLE>\n"); 
}
if (isset($_POST['select'])) {

if(isset($_POST['reg']) && $_POST['sems']=='1'){
$query_string = "SELECT stu_name,stu_br,stu_reg,stu_roll,stu_sem,stu_sec,stu_att_per,stu_cgpa FROM student WHERE stu_reg='$_POST[reg]'";
}else{
if(isset($_POST['section'])){
$query_string = "SELECT stu_name,stu_br,stu_reg,stu_roll,stu_sem,stu_sec,stu_att_per,stu_cgpa FROM student WHERE stu_sem='$_POST[sems]' AND stu_sec='$_POST[section]' ORDER BY stu_roll";
}
}
}
display_db_query($query_string, $conn,
	TRUE, "border='2'");



 }

echo "</tr>";
print("<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>");
include "footer.php";

?>
