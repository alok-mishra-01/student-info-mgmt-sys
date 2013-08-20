<?php
include "conn.php";
if (isset($_POST['select'])) {


foreach($_POST as $ar)
{

 foreach($ar as $e)
  {
echo $e,"<br>";
//$det=conn("INSERT INTO timetable (allot_id,mon,tue,wed,thu,fri,sat) VALUES ('$a','$e[0]','$e[1]','$e[2]','$e[3]','$e[4]','$e[5]')");
  }
}
}
?>
