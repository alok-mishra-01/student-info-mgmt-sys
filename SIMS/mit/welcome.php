<?
include "session.php";
include "DB_connection.php";
include "header1.html";

		    echo "Welcome $_SESSION[userid]...."; 

?>
			
			
                <p>Now you can select any of the options from the menu.</p>
                <p>If there is any problem in using this portal,you can use the <a href="help.php">help</a> section. </p>
<a href="displays.php">Attendance,Academics and Assignments</a><p>
<a href="timetable.php">Time-Table</a><p>
<a href="info.php">My Info</a><p>
<a href="logout.php">Logout</a>
                <?
// To update session status for login table to get who is online
if(isset($_SESSION['id'])){
$tm=date("Y-m-d H:i:s");
$q=mysql_query("update login set status='ON',tm='$tm' where id='$_SESSION[id]'");
echo "<center><font face='Verdana' size='2' > | &nbsp; <a href=change_password.php>Change Password</a> &nbsp;| &nbsp; <a href=update_profile.php>Update Profile</a> &nbsp;| &nbsp;<a href=logout.php>Logout</a> &nbsp;<br></center></font>";
echo mysql_error();}

?>
