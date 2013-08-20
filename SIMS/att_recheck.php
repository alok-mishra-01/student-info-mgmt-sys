<?
//This file was a stupid idea,the att_check.php file could have been reused if not for date and subj.
include("conn.php");
include "session.php";

$query_string = "SELECT * FROM att";
$result = conn($query_string);
$column_count = mysql_num_fields($result)
	or die("display_db_query:" . mysql_error());

while($row=mysql_fetch_row($result)) {


if (isset($_POST['select'])) {
                              for($b=0;$b<$column_count;$b++){$sel= array($_POST["$row[4]"]);}
                                 reset($sel);
                                 foreach($sel as &$selected_radio){
$date=$_SESSION['date'];
$subj=$_SESSION['sub'];
                                  
                                    $sqlI =("UPDATE att SET attend='$selected_radio' WHERE stu_roll='$row[4]' AND att_dt='$date' and sub_code='$subj'");
                                   $re=conn($sqlI);   
$_SESSION['error']=$re; } 
                             
                                                           }

}

print "<script>";
       print " self.location='display.php';"; 
          print "</script>";




?>
