<?php
include "/opt/lampp/htdocs/session.php";
require "/opt/lampp/htdocs/check.php";
include '/opt/lampp/htdocs/conn.php';

$result = conn("SELECT sub_code FROM subject WHERE sub_sem='$_SESSION[sem]' AND sub_br='$_SESSION[branch]' AND sub_type='T;C'");
$column_count = mysql_num_fields($result)
	or die("column_count: " . mysql_error());




if (isset($_POST['select'])) {   
  foreach($_POST as $ret=>$val){
     $m[]=array_chunk($val, 2);
                               }
print_r($m);while($row=mysql_fetch_row($result)) {
      foreach($m as $index=>$value){
             foreach($value as $ind=>$var){
                   
$sqlI =("INSERT INTO allot(fac_code,sub_code,sub_br,stu_sem,stu_sec,sess_id)VALUES('$var[0]','$row[0]','$_SESSION[branch]','$_SESSION[sem]','$var[1]','$_SESSION[sessionid]')");
                                  $re=conn($sqlI);   
                                           }
                                    }
                                  
                                 
                                
                                    
                                                                   
                             
                             }

                                     }

print "<script>";
       print " self.location='notify.php';"; 
          print "</script>";




?>
