<?

include "session.php";
include "DB_connection.php";
include("conn.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Attendance Sheet</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
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
<?

$subj=$_SESSION['sub'];
$date=$_SESSION['date'];
$roll=$_SESSION['roll'];
echo "<h2>Attendance entered!</h2> <br>\n";
function display_db1_query($query_string, $conn, $header_bool, $table_params) {

$result = conn($query_string);
//For each student

/*$que = conn("SELECT COUNT(attend) FROM att WHERE stu_reg='$roll' AND sub_code='$subj AND attend= 'P' OR 'A' ORDER BY stu_roll");
$each=mysql_result($que);*/
	// find out the number of columns in result
	$column_count = mysql_num_fields($result)
	or die("display_db_query:" . mysql_error());
	// Here the table attributes from the $table_params variable are added
	print("<TABLE $table_params >\n");
	// optionally print a bold header at top of table
	if($header_bool) {
		print("<TR>");

               
                 print("<th>Names Of Students</th>");
                 print("<th>Registration No</th>");
                 print("<th>Roll No</th>");
          
                 print("<th>Attendance</th>");
		print("</TR>\n");
	}

      
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


$query_string = "SELECT stu_name,stu_reg,stu_roll,attend FROM att WHERE att_dt='$date' and sub_code='$subj' ORDER BY stu_roll";


//To find name of the subject
$subn=conn("SELECT sub_name FROM subject where sub_code='$subj'");
$subname=mysql_result($subn,0);
//To find attendance percentage
$total=conn("SELECT COUNT(sub_code) FROM att WHERE  sub_code='$subj' AND stu_reg='$roll'");

$num=mysql_result($total,0);
echo "<br><p>Subject: '$subname'<p>";
echo "<p>Subject Code : '$subj'<p>";
echo "<p>Entered on: ";
echo $date; 
echo"<p>Total number of classes till today is $num<p>";
/*
$attended=conn("SELECT
COUNT(attend) 
FROM
att
WHERE
stu_reg='$roll'
AND
sub_code='$subj' AND attend= 'P'");
$num2=mysql_result($attended,0);
echo"$num2<br>";

$percent=($num2/$num)*100;
echo"$percent<p>";

echo $roll;*/
display_db1_query($query_string, $conn,
	TRUE, "border='6'");
?>
<p><h2>If you want to change any of the above entries,please click <a href="edit_att.php">here</a></h2><p>
<p>OR<p>

<a href=lock.php><p><h1>Please save these entries.Click here<p></h1></a>
<b><FONT COLOR="red">(It cannot be edited later)</FONT></b><br>

                <p>&nbsp; </p>
		  </div>
  <div class="pied"> Design by <a href="http://aloktherocker.blogspot.com" target="_BLANK">Alok Mishra</a> <br />
    
<!--This page should only be edited by administrators-->
For  <a href="http://www.manipal.edu" target="_blank">MIT Manipal</a><a href="http://www.manipal.edu" target="_blank"><img src="spacer.gif" width="5" height="5" border="0"/></a> </div>
		</div>
	</body>
</html>
