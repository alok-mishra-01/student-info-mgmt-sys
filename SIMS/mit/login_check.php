<?

include "session.php";
include "DB_connection.php";


$userid=$_POST['userid'];
$password=$_POST['password'];
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Login</title>

</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?
$userid=mysql_real_escape_string($userid);
$password=mysql_real_escape_string($password);

if($rec=mysql_fetch_array(mysql_query("SELECT * FROM signup WHERE userid='$userid' AND password = '$password'"))){
	if(($rec['userid']==$userid)&&($rec['password']==$password)){
	 include "newsession.php";


$tm=date("Y-m-d H:i:s");
$fac=mysql_query("SELECT fac_code FROM signup WHERE userid='$userid'");
$reg=mysql_result($fac,0);
$_SESSION[reg]=$reg;

$ip=$_SERVER['REMOTE_ADDR'];

echo $ip;
$rt=mysql_query("insert into login(id,userid,ip,tm) values('$_SESSION[id]','$_SESSION[userid]','$ip','$tm')");
$_SESSION[userid]=$userid;
echo mysql_error();
            echo "<p class=data> <center>Successfully,Logged in<br><br><a href='logout.php'> Log OUT </a><br><br><a href=welcome.php>Click here if your browser doesnt redirect automatically </a><br></center>";
     print "<script>";
       print " self.location='welcome.php';"; 
          print "</script>";


				} 
		}	
	else {

		session_unset();
echo "<font face='Verdana' size='2' color=red>Wrong Login. Use your correct  Userid and Password and Try <br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
		
	}
?>

</body>

</html>
