<? 
include "/opt/lampp/htdocs/session.php";
require "/opt/lampp/htdocs/check.php";
include '/opt/lampp/htdocs/conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
		
		<title>Administrators</title><meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="author" content="Alok Mishra" />
		<meta http-equiv="Content-Type" content="application/xhtml+xml; charset=utf-8" />
		<link rel="stylesheet" title="Normal" type="text/css" media="screen" href="./styles/screen.css" /></head>

	<body>
<form name="myform" action="allot_check.php" method="POST">
		<div id="main">
			<div id="header">
				<h1>Administrator Area</h1>
			</div>
                         <div id="menu">
				<ul>
					<li ><a href="admin.php">Home</a></li>
                                        <li class="selected"><a href="allot.php">Subject Allotment</a></li>
                                        <li><a href="table_edit.php">Time-Table</a></li>
					<li><a href="subject.php">Subjects</a></li>
                                        <li><a href="student.php">Students</a></li>
					<li><a href="/logout.php">Logout</a></li>
				</ul>
			</div>
			<div id="content">
				<div class="article">
		    <p>&nbsp;</p>
		    <p>&nbsp;</p>
<?
if (isset($_POST['submitted2'])) {
$_SESSION['sem']=$_POST['sem'];
$_SESSION['branch']=$_POST['branch'];
$_SESSION['sections']=$_POST['sections'];

$sql1=conn("SELECT sub_code FROM subject WHERE sub_sem='$_SESSION[sem]' AND sub_br='$_SESSION[branch]' AND sub_type='T;C'");

$column_count = mysql_num_fields($sql1);


print("<TABLE border='2' >\n");
	
	       print("<CAPTION><EM>Subject allotment for $_SESSION[sem]th semester</EM></CAPTION>");
		print("<TR>");
                 print("<TH>Subject Code");
for($i=0;$i<$_SESSION['sections'];$i++){
                 print("<TH>Faculty Code");
                 print("<TH>Section");}
                print("</TR>\n");
                
while($row=mysql_fetch_row($sql1)) {
		                      print("<TR ALIGN=CENTER VALIGN=TOP>");

                     for($c = 0;$c < $column_count;$c++) {
                            

                   print("<TD>$row[$c]</TD>\n");
   
for($i=0;$i<$_SESSION['sections'];$i++){
print("<TD><input type=text size=\"8\" name=\"$row[$c][]\"></TD>");

print("<TD><input type=text size=\"2\" name=\"$row[$c][]\"></TD>");
}


print("</TR>\n");   }
	}
	print("</TABLE>\n"); 
/*

echo "<select name=\"faculty\">";

    echo "<option selected>Select</option>";

    if(mysql_num_rows($sql_result))

    {

    while($row = mysql_fetch_assoc($sql_result))

    {

    echo "<option>$row[name]</option>";

    }



    } 
*/
}
echo "<tr>";
print("<td align = 'center'><input type = 'Submit' name = 'select' value = 'submit'></td>");

echo "</tr>";
print("<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>");
?>

			</div>	</div>
			<br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			
		
	</body></html>

