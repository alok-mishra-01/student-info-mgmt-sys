<?
include "session.php";
include "header1.html";

if (isset($_POST['submitted'])) {
$_SESSION['subject']=$_POST['subj1'];}
?>
<h2>What do you want to check?</h2><p>
<a href="attendance.php">Attendance</a><p>
<a href="assignment.php">Assignment and Marks</a><p>
<a href="subjects.php">Subject Info</a><p>
<a href="info.php">My Info</a><p>
<a href="logout.php">Logout</a>

 <p>&nbsp; </p>
	</div></div><br /><div id="footer">
				<p>
					Designed by <a href="http://www.aloktherocker.blogspot.com/">Alok Mishra</a><br />For MIT,Manipal.
				</p>
			</div>
		</div>
	</body></html>
