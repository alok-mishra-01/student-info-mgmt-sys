<?include "session.php";
include "DB_connection.php"; 
include "header.php";
while (list ($key,$val) = each ($_POST)) {
$$key = $val;
}

$email=mysql_real_escape_string($email);
$status = "OK";
$msg="";
//error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);
if (!stristr($email,"@") OR !stristr($email,".")) {
$msg="Your email address is not correct<BR>"; 
$status= "NOTOK";}


echo "<br><br>";
if($status=="OK"){  $query="SELECT email,userid,password FROM signup WHERE signup.email = '$email'";
$st=mysql_query($query);
 $recs=mysql_num_rows($st);
$row=mysql_fetch_object($st);
$em=$row->email;// email is stored to a variable
 if ($recs == 0) {  echo "<center><font face='Verdana' size='2' color=red><b>No Password</b><br> Sorry Your address is not there in our database . You have to signup and then login<BR><BR><a href='signup.php'> Sign UP </a> </center>"; exit;}

        $headers4="hod_eee@manipal.edu";         // Admin address 
$headers.="Reply-to: $headers4\n";
$headers .= "From: $headers4\n"; 
$headers .= "Errors-to: $headers4\n"; 
//$headers = "Content-Type: text/html; charset=iso-8859-1\n".$headers;// for html mail 

 if(mail("$em","Your Request for login details","This is in response to your request for login details at SIMS \n \nLogin ID: $row->userid \n Password: $row->password \n\n Thank You \n \n siteadmin","$headers")){echo "<center><font face='Verdana' size='2' ><b>THANK YOU</b> <br>Your password is posted to your email address . Please check your mail after some time. </center>";}
else{ echo " <center><font face='Verdana' size='2' color=red >There is some server problem in sending the mail to your address. <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}


	} 

	else {echo "<center><font face='Verdana' size='2' color=red >$msg <br><br><input type='button' value='Retry' onClick='history.go(-1)'></center></font>";}
include "footer.php";
?>
                