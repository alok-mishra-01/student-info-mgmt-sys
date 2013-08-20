<?
include "session.php";

include "DB_connection.php";


/*
while (list ($key,$val) = each ($_POST)) {
$$key = $val;
}
*/

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Update Profile</title>

</head>

<body bgcolor="#ffffff" text="#000000" link="#0000ff" vlink="#800080" alink="#ff0000">
<?
$todo=$_POST['todo'];
$name=$_POST['name'];
$email=$_POST['email'];
$fac=$_POST['fac'];
// check the login details of the user and stop execution if not logged in
require "check.php";

if(isset($todo) and $todo=="update_profile"){

// set the flags for validation and messages
$status = "OK";
$msg="";

// if name is less than 5 char then status is not ok
if (strlen($name) < 5) {
$msg=$msg."Your name  must be more than 5 char length<BR>";
$status= "NOTOK";}	

// Can also add email validation here 


if($status<>"OK"){ // if validation failed
echo "<font face='Verdana' size='2' color=red>$msg</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
}else{ // if all validations are passed.
if(mysql_query("update signup set email='$email',name='$name',fac_code='$fac' where userid='$_SESSION[userid]'")){
echo "<font face='Verdana' size='2' color=green>You have successfully updated your profile<br></font>";
}else{echo "<font face='Verdana' size='2' color=red>There is some problem in updating your profile. Please contact site admin<br></font>";}
}}

require "bottom.php";
?>

</body>

</html>
