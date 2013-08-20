<?php
include "session.php";
include "conn.php";
include "header1.html";

$total=conn("SELECT COUNT(attend) FROM att WHERE stu_reg='$_SESSION[reg]' AND sub_code='$_SESSION[subject]' AND attend= 'P' OR 'A'"); 
$num=mysql_result($total,0);
$attended=conn("SELECT COUNT(attend) FROM att WHERE stu_reg='$_SESSION[reg]' AND sub_code='$_SESSION[subject]' AND  attend='P' OR 'L'");
$num2=mysql_result($attended,0);

$percent=($num2/$num)*100;

echo "<h2>Total Number of classes till now = $num<p>";
echo "Number of classes attended by you = $num2<p>";
echo "Your attendance percentage for this subject till now is $percent %</h2>"; 

?>
 <input type="button" name="goBack" value="Go Back" onclick="history.back(1)">
                <p>&nbsp; </p>
	</div></div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>
