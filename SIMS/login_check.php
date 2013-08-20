<?

include "session.php";
include "DB_connection.php";


$userid=$_POST['userid'];
$password=$_POST['password'];
$choice=$_POST['choice'];
?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Login</title>

</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?
//The next two lines keep off hackers who try SQL injections
$userid=mysql_real_escape_string($userid);
$password=mysql_real_escape_string($password);

if($rec=mysql_fetch_array(mysql_query("SELECT * FROM signup WHERE userid='$userid' AND password = '$password'"))){
	if(($rec['userid']==$userid)&&($rec['password']==$password)){
	 include "newsession.php";


$tm=date("Y-m-d H:i:s");


$ip=$_SERVER['REMOTE_ADDR'];

$rt=mysql_query("insert into login(id,userid,ip,tm) values('$_SESSION[id]','$_SESSION[userid]','$ip','$tm')");

echo mysql_error();
            echo "<p class=data> <center>Successfully,Logged in<br><br><a href='logout.php'> Log OUT </a><br><br><a href=welcome.php>Click here if your browser doesnt redirect automatically </a><br></center>";
if($choice=='faculty'){     

print "<script>";
       print " self.location='fillsession.php';"; 
          print "</script>";}
if($choice=='admin'){
print "<script>";
       print " self.location='/admin/administrator.php';"; 
          print "</script>";}
if($choice=='hod'){
print "<script>";
       print " self.location='hod.php';"; 
          print "</script>";}

				} 
		}	
	else {

		session_unset();
echo "<font face='Verdana' size='2' color=red>Wrong Login. Use your correct  Userid and Password and Try <br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
		
	}
?>

</body>

</html>
