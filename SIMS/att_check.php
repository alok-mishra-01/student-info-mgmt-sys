<?
include("conn.php");
$query_string = "SELECT * FROM att";
$result = conn($query_string);
$column_count = mysql_num_fields($result)
	or die("column_count: " . mysql_error());

while($row=mysql_fetch_row($result)) {

//Loops are my favorites, i use them very frequently. Btw $row[4] refers to stu_roll in $query_string
if (isset($_POST['select'])) {
                              for($b=0;$b<$column_count;$b++){$sel= array($_POST["$row[4]"]);}
                                  reset($sel);
                                 foreach($sel as &$selected_radio){
                                  
                                    $sqlI =("UPDATE att SET attend='$selected_radio' WHERE stu_roll='$row[4]' AND attend='D'");
                                   $re=conn($sqlI);   
                                                                   } 
                             
                             }

                                      }
print "<script>";
       print " self.location='display.php';"; 
          print "</script>";




?>
