<?
// To update session status for login table to get who is online
if(isset($_SESSION['id'])){
$tm=date("Y-m-d H:i:s");
$q=mysql_query("update login set status='ON',tm='$tm' where id='$_SESSION[id]'");
echo "<center><font face='Verdana' size='2' ><br>|  <a href=change_password.php>Change Password</a> &nbsp;| <a href=update_profile.php>Update Profile</a> &nbsp;| &nbsp;<a href=logout.php>Logout</a> &nbsp;<br></center></font>";
echo mysql_error();}
else{
echo "<center><font face='Verdana' size='2' ><a href=index.php>Already registered, please Login</a> </center></font>";

}

// End of updating login status for who is online 

// Find out who is online 
$gap=10; // change this to change the time in minutes, This is the time for which active users are collected. 
$tm=date ("Y-m-d H:i:s", mktime (date("H"),date("i")-$gap,date("s"),date("m"),date("d"),date("Y")));
// To set the status to OFF 
//for the users who have not interacted with 
//pages in last 10 minutes ( set by $gap variable above ) 

$ut=mysql_query("update login set status='OFF' where tm < '$tm'");
echo mysql_error();
/*
// To collect the userids from table who are online 
$qt=mysql_query("select userid from login where tm > '$tm' and status='ON'");
echo mysql_error();

while($nt=mysql_fetch_array($qt)){
echo "$nt[userid],";
}*/



?>
