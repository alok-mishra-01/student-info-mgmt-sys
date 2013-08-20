<?
include "session.php";
include "DB_connection.php";
include "header.php";

require "check.php";
//Collect the form data 

$todo=$_POST['todo'];
$password=$_POST['password'];
$password2=$_POST['password2'];


if(isset($todo) and $todo=="change_password"){
$password=mysql_real_escape_string($password);

//Setting flags for checking
$status = "OK";
$msg="";

			


if ( strlen($password) < 3 or strlen($password) > 8 ){
$msg=$msg."Password must be more than 3 characters and maximum 8 char length<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$msg=$msg."Both passwords are not matching<BR>";
$status= "NOTOK";}					



if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$msg</font><br><center><input type='button' value='Retry' onClick='history.go(-1)'></center>";
}else{ // if all validations are passed.
if(mysql_query("update signup set password='$password' where userid='$_SESSION[userid]'")){
echo "<font face='Verdana' size='2' ><center>Thanks <br> Your password changed successfully. Please keep changing your password frequently</font></center>";
}else{echo "<font face='Verdana' size='2' color=red><center>Sorry <br> Failed to change password Contact Admin</font></center>";
}
}
}
require "bottom.php";
include "footer.php";
?>

              