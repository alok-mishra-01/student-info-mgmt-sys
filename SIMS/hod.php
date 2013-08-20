<?php

 if(!isset($_SERVER['PHP_AUTH_USER']))                    
 {
    header('WWW-Authenticate: Basic realm="Admin Area"');
    header('HTTP/1.0 401 Unauthorized');                 
    exit("You need authentication! (Restart your browser and login again)");           
 }                                                        

 // Testing the user name and password
 else                                                     
 {  include("/opt/lampp/htdocs/session.php");
    include("/opt/lampp/htdocs/DB_connection.php");                           
    $admin_id = trim($_SERVER['PHP_AUTH_USER']);         
    $admin_password = trim($_SERVER['PHP_AUTH_PW']);
   
    $sql = "SELECT userid FROM signup 
                WHERE userid = '$admin_id'
                AND password ='$admin_password'";
  
    $result = mysql_query($sql,$link)
                  or die("Couldn't execute query.");  
    $name=mysql_result($result,0);
  
    $num = mysql_num_rows($result); 
if($name=='hod_eee')
{
$_SESSION[userid]=$admin_id; 
if ($num < 1)  
    {
       exit("The User Name or password you entered 
                   is not valid.<br>");                   
                                               }    }            
 // Web page content.   
print "<script>";
       print " self.location='/admin/admin.php';"; 
          print "</script>";                                  
 
}                               
?>
