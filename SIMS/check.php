<?
//Just a check to see if user is still logged in
if(!isset($_SESSION['userid'])){
echo "<center><font face='Verdana' size='2' color=red>Sorry, Please login and use this page </font></center>";
exit;
}
?>