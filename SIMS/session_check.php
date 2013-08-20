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
<form name="myform" action="allot-original.php" method="POST">
		<div class="conteneur">	
			<div class="header">
				<a href ='/' span class="title">SIMS Intranet Portal</a></span><br />
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
if (isset($_POST['submitted'])) {
                               
$_SESSION['begindate']=$_POST['begindate'];
$_SESSION['enddate']=$_POST['enddate'];
$_SESSION['evenodd']=$_POST['evenodd'];

$ses=explode("-",$_SESSION['begindate']);
$_SESSION['sessionid']= $ses[0].$_SESSION[evenodd];

$sess= conn("INSERT INTO session(sess_id,sess_begin,sess_end,evenorodd) VALUES('$sessionid','$_SESSION[begindate]','$_SESSION[enddate]','$_SESSION[evenodd]')");

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
}

?>



<br><p><br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted2" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p></form>
<? include "footer.php"; ?>
