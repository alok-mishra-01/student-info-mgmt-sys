<?

include "DB_connection.php";// database connection 
// Collect the data from posted form 
$userid=$_POST['userid'];
$password=$_POST['password'];
$password2=$_POST['password2'];
$todo=$_POST['todo'];
$email=$_POST['email'];
$name=$_POST['name'];
$fac=$_POST['fac'];

?>
<!doctype html public "-//w3c//dtd html 3.2//en">

<html>

<head>
<title>Welcome <?echo $name;?></title>
</head>

<body >
<?
if(isset($todo) and $todo=="post"){

$status = "OK";
$message="";

// if userid is less than 3 char then status is not ok
if(!isset($userid) or !preg_match('/^[a-z\d_]{4,10}$/i', $userid)){
$message=$message."User id should be 4 to 10 characters<BR>";
$status= "NOTOK";}					
				


if(mysql_num_rows(mysql_query("SELECT userid FROM signup WHERE userid = '$userid'"))){
$message=$message."Userid already exists. Please try another one<BR>";
$status= "NOTOK";}					


if ( strlen($password) < 3 ){
$message=$message."Password must be more than 3 characters<BR>";
$status= "NOTOK";}					

if ( $password <> $password2 ){
$message=$message."Both passwords are not matching<BR>";
$status= "NOTOK";}						

if($status<>"OK"){ 
echo "<font face='Verdana' size='2' color=red>$message</font><br><input type='button' value='Retry' onClick='history.go(-1)'>";
}else{ // if all validations are passed.
$query=mysql_query("insert into signup(userid,password,email,name,fac_code) values('$userid','$password','$email','$name',$fac)");
echo "<font face='Verdana' size='2' color=green>Sign-up completed. You can login now<br><br><a href=index.php>Click here to login</a><br></font>";
}
}
?>


</body>

</html>
