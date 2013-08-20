<?

include "session.php";
include "DB_connection.php"; 
$q=mysql_query("update login set status='OFF' where id='$_SESSION[id]'");

session_unset();
session_destroy();

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Thank You</title>


</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?

echo "<center><font face='Verdana' size='2' >Successfully logged out. Please close this page for security reasons. <br><br> </font></center>";

?>


</body>

</html>
