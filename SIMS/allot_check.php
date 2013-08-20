<?php
//This file inserts the admin-entered subject allotments
//This would be nightmare for someone not used to submitting all dynamic elements in a form.
//But everything went well,this now works like a charm.
include 'session.php';
include 'conn.php';


$result = conn("SELECT sub_code FROM subject WHERE sub_sem='$_SESSION[sem]' AND sub_br='$_SESSION[branch]' AND sub_type='T;C'");
$column_count = mysql_num_fields($result)
	or die("column_count: " . mysql_error());



//The hack was to split the $_POST array into smaller arrays of 2 using array_chunk()
//Each smaller array contains values of fac_code and stu_sec. Not that easy as it looks
//Wasnt easy to coordinate all those values with the sub_code values.
if (isset($_POST['select'])) {   
  foreach($_POST as $ret=>$val){
     $m[]=array_chunk($val, 2);
                               }
while($row=mysql_fetch_row($result)) {
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
