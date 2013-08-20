<?
include "session.php";
include "conn.php";
include "header1.html";
?>
 <form name="myform" action="list.php" method="POST">
		
<?php
$semi=conn("SELECT stu_sem,stu_br FROM student WHERE stu_reg='$_SESSION[reg]'");
$semss=mysql_fetch_array($semi);

echo "<br><font size='3'>Select the subject:</font><br><br>";
$sql =("SELECT sims.subject.sub_code,sims.subject.sub_name
FROM sims.subject WHERE sub_br='$semss[1]' AND sub_sem='$semss[0]'");
$ed = conn($sql);
while($row = mysql_fetch_array($ed,MYSQL_ASSOC)) $row1[]=$row;
foreach ($row1 as $c)
{
  echo "<h3 style='font-family:verdana'>";
  echo '<input type="radio" name="subj1" value="'.$c['sub_code'].'"> ';
  echo $c['sub_name'];
  echo "</h3><br>";
}
?>

<br>
<tr>
<td align = "center"><input type = "Submit" name = "submitted" value = "submit"></td>
</tr>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
	</div></div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>


