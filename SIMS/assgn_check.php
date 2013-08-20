<?
include "conn.php";
include "session.php";

$query_string = "SELECT sims.academic.stu_reg, sims.academic.stu_roll,assgn1,assgn2,assgn3,assgn4,assgn5 
FROM sims.allot,sims.student,sims.academic 
WHERE allot.allot_id =$_SESSION[allotid1]
AND student.stu_reg = academic.stu_reg
AND allot.stu_sem = student.stu_sem
AND sims.allot.sub_code = '$_SESSION[subj2]' 
AND allot.stu_sec = student.stu_sec ORDER BY stu_roll";
$result = conn($query_string);
$row_count = mysql_num_rows($result)
	or die("display_db_query:" . mysql_error());

while($row=mysql_fetch_row($result)) {


if (isset($_POST['select'])) {



             foreach($_POST as $rui => $set){
                             
                            foreach($set as $te => $tyu){
                                  ++$te;
                                  $do='assgn'.$te;
                                 
if($te<6){
 $sqlI =("UPDATE academic SET $do='$tyu' WHERE stu_roll='$rui'");
                                   $re=conn($sqlI);   
$_SESSION['error']=$re;}
  } 
                               }
               }
                                   
                             
                                                           }


print "<script>";
       print " self.location='assgn_display.php';"; 
          print "</script>";




?>
