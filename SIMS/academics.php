<?
//Sessionals
include "DB_connection.php";
include "session.php";
include("conn.php");
include "header.php";
echo "<h1><u>Academics Section</u></h1><br><br>";
echo "<font size='4'>Please select the appropriate option:</font><br><br>";require "check.php";
?>
<ul>
<h1><a href='academic_enter.php'><li>Enter/Edit Sessional Marks</a></h1></li>
               <p>&nbsp; </p>
<h1><a href='academic_view.php'><li>View previous sessional entries</a></h1></li>
</ul>
<? include "footer.php"; ?>
