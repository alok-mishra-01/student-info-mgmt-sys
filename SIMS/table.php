<?php
include "session.php";
include("conn.php");
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

echo "Time table for Faculty Code : ",$_SESSION[facode];
$alloid=conn("SELECT allot_id FROM allot WHERE fac_code=$_SESSION[facode]");
for($r=0;$r<mysql_num_rows($alloid);$r++){
$allotmid[]=mysql_result($alloid,$r);} 
$res=array('8-9','9-10','10.30-11.30','11.30-12.30','2-3','3-4','4-5');
/*
foreach($res as $j){
$m[]=mysql_result(conn("SELECT sub_name FROM subject WHERE sub_code=(SELECT sub_code FROM allot WHERE allot_id=(SELECT allot_id FROM  timetable WHERE mon='$j' AND (allot_id=$allotmid[0] OR allot_id=$allotmid[1] OR allot_id=$allotmid[2])))"),0);



$t[]=mysql_result(conn("SELECT sub_name FROM subject WHERE sub_code=(SELECT sub_code FROM allot WHERE allot_id=(SELECT allot_id FROM  timetable WHERE tue='$j' AND allot_id=($allotmid[0] OR $allotmid[1] OR $allotmid[2])))"),0);

$w[]=mysql_result(conn("SELECT sub_name FROM subject WHERE sub_code=(SELECT sub_code FROM allot WHERE allot_id=(SELECT allot_id FROM  timetable WHERE wed='$j' AND allot_id=($allotmid[0] OR $allotmid[1] OR $allotmid[2])))"),0);

$th[]=mysql_result(conn("SELECT sub_name FROM subject WHERE sub_code=(SELECT sub_code FROM allot WHERE allot_id=(SELECT allot_id FROM  timetable WHERE thu='$j' AND allot_id=($allotmid[0] OR $allotmid[1] OR $allotmid[2])))"),0);

$f[]=mysql_result(conn("SELECT sub_name FROM subject WHERE sub_code=(SELECT sub_code FROM allot WHERE allot_id=(SELECT allot_id FROM  timetable WHERE fri='$j' AND allot_id=($allotmid[0] OR $allotmid[1] OR $allotmid[2])))"),0);

$s[]=mysql_result(conn("SELECT sub_name FROM subject WHERE sub_code=(SELECT sub_code FROM allot WHERE allot_id=(SELECT allot_id FROM  timetable WHERE sat='$j' AND allot_id=($allotmid[0] OR $allotmid[1] OR $allotmid[2])))"),0);

}
*/
?>

<html>
<body>

<table style="text-align: left; height: 331px; width: 680px;"
 border="3" bgcolor="FloralWhite " >
  <tbody>
    <tr>
      <td>Time-Table</td>
      <td>&nbsp;8-9</td>
      <td>&nbsp; 9-10</td>
      <td>&nbsp;10.30-11.30</td>
      <td>&nbsp;11.30-12.30</td>
      <td>&nbsp;2-3</td>
      <td>&nbsp;3-4</td>
      <td>&nbsp;4-5</td>
    </tr>
    <tr>
      <td>Monday</td>
      <? //foreach($m as $d){
// print("<td>$d</td>");}?>

      <td>Basic Electrical Technology</td>
      <td></td>
      <td></td>
      <td></td>
      <td>Switchgears And Protection</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Tuesday</td>
      <td></td>
      <td></td>
      <td>Switchgears And Protection</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Wednesday</td>
      <td>Power System Analysis</td>
      <td></td>
      <td></td>
      <td>Basic Electrical Technology</td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Thursday</td>
      <td>Basic Electrical Technology</td>
      <td>Switchgears And Protection</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Friday</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Power System Analysis</td>
      <td></td>
      <td></td>
    </tr>
    <tr>
      <td>Saturday</td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>Basic Electrical Technology</td>
      <td></td>
    </tr>
  </tbody>
</table>



<? 
echo "</tr>";
print("<input type='button' name='goBack' value='Go Back' onclick='history.back(1)'>");


include "footer.php"; ?>

