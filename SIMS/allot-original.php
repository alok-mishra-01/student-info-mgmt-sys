<?
include "session.php";
include "conn.php";
require "check.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<title>Allotments</title>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-15" />
		<link rel="stylesheet" href="styles.css" />
	</head>

	<body>
<form name="myform" action="allot_check.php" method="POST">
		<div class="conteneur">	
			<div class="header">
				<a href ='/' span class="title">SIMS Intranet Portal</a></span><br />
				<span class="sub-title">The complete information tool</span>
			</div>
			
		  <div class="centre">
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
include "footer.php";
?>
