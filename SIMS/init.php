
$allid=conn("SELECT allot_id FROM allot WHERE sub_code='$subj1' AND fac_code=$_SESSION[facode]");
$allotid=mysql_result($allid,0);
$_SESSION[allotid]=$allotid;


//Academics init
$inst =("INSERT INTO academic( stu_reg,stu_roll,allot_id )
SELECT student.stu_reg,student.stu_roll,$allotid
FROM allot, student
WHERE allot.allot_id =$allotid
AND allot.stu_sem = student.stu_sem
AND allot.sub_code = '$subj1'
AND allot.stu_sec = student.stu_sec;");
$ed=conn($inst);
