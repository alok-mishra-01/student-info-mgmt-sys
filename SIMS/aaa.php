<?
//Attendance
include "DB_connection.php";
include "session.php";
include("conn.php");
include "header.php";
echo "<h1><u>Attendance Section</u></h1><br><br>";
echo "<font size='4'>Please select the appropriate option:</font><br><br>";require "check.php";//To check if he's still logged in
?>
<ul>
<h1><a href='att.php'><li>Enter/Edit Attendance</a></h1></li>
               <p>&nbsp; </p>
<h1><a href='view_att.php'><li>View previous attendance entries</a></h1></li>
</ul>
<? include "footer.php"; ?>
