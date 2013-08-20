<?
include("conn.php");
include "session.php";
$query_string = "SELECT stu_reg,stu_roll,allot_id FROM academic";
$result = conn($query_string);
$column_count = mysql_num_fields($result)
	or die("column_count: " . mysql_error());

while($row=mysql_fetch_row($result)) {


if (isset($_POST['select'])) {
                                  
                        
                                
                              for($b=0;$b<$column_count;$b++){$sel= array($_POST["$row[0]"]);}
                                 reset($sel);
                            
                                 foreach($sel as &$entered_mark){
                                    // if($entered_mark>20){
                                     //  echo "You have entered an number greater than 20 for the student $row[0]<br>";
//break;}
//else{
                             $er= $_SESSION['sess'];
                                $dot='sess'.$er;
$sqlI =("UPDATE academic SET $dot='$entered_mark' WHERE allot_id='$_SESSION[allotid]'  AND  stu_reg='$row[0]' AND stu_roll='$row[1]'");

                                   $re=conn($sqlI); // }
                                                                   } 
                             }
                             }

         
print "<script>";
       print " self.location='display_marks.php';"; 
          print "</script>";



?>
