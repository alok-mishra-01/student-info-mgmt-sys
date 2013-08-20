<?
include("conn.php");
include "session.php";
$query_string = "SELECT stu_reg,allot_id FROM academic";
$result = conn($query_string);
$column_count = mysql_num_fields($result)
	or die("column_count: " . mysql_error());

while($row=mysql_fetch_row($result)) {


if (isset($_POST['select'])) {
                              for($b=0;$b<$column_count;$b++){$sel= array($_POST["$row[0]"]);}
                                  reset($sel);
                                 foreach($sel as &$selected){
                                  
                                    $sqlI =("UPDATE academic SET assgn_marks='$selected' WHERE allot_id='$_SESSION[allotid]'  AND  stu_reg='$row[0]'");
                                   $re=conn($sqlI);   
                                                                   } 
                             
                             }

                                      }
print "<script>";
       print " self.location='assgn_marks_display.php';"; 
          print "</script>";




?>
