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
<form name="myform" action="allot-original.php" method="POST">
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

/*
$sess= conn("INSERT INTO session(sess_id,sess_begin,sess_end,evenorodd) VALUES('$sessionid','$_SESSION[begindate]','$_SESSION[enddate]','$_SESSION[evenodd]')");
*/
echo '******Subject Allotments******<p>';
echo 'Please select the semester that will be alloted now :<br>(The corresponding subjects will be displayed on next page)<p>';
if($_SESSION['evenodd']=='even'){

echo '<td><select name="sem">';
echo '<option value="2">2nd</option>';
echo '<option value="4">4th</option>';
echo '<option value="6">6th</option>';
echo '<option value="8">8th</option>';
echo '</select></td></tr>';
}else{
echo '<td><select name="sem">';
echo '<option value="1">1st</option>';
echo '<option value="3">3rd</option>';
echo '<option value="5">5th</option>';
echo '<option value="7">7th</option>';
echo '</select></td></tr>';}

echo '<br><p>Select the branch:';
echo '<td><select name="branch">';
echo '<option value="E&E">E&E</option>';
echo '<option value="E&C">E&C</option>';
echo '<option value="CSE">CSE</option>';
echo '<option value="PMT">PMT</option>';
echo '<option value="ICT">ICT</option>';
echo '<option value="I&C">I&C</option>';
echo '<option value="BIOMED">BIOMED</option>';
echo '<option value="MECH">MECH</option>';
echo '<option value="IP">IP</option>';
echo '<option value="CHEM">CHEM</option>';
echo '<option value="CIVIL">CIVIL</option>';
echo '</select></td></tr>';

echo '<br><p>Enter the number of sections:';
print("<input type=\"text\" size=\"2\" name=\"sections\">");


?>



<br><p><br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted2" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p></form>
</p>
				
			<br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>

