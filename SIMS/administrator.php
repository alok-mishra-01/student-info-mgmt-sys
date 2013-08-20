<?php
//Uses the other style of login for admin,although it doesnt do much work!
//Gives a feel good feeling to the administrator ;)
 if(!isset($_SERVER['PHP_AUTH_USER']))                    
 {
    header('WWW-Authenticate: Basic realm="Admin Area"');
    header('HTTP/1.0 401 Unauthorized');                 
    exit("You need authentication! (Restart your browser and login again)");           
 }                                                        

 // Testing the user name and password
 else                                                     
 {  include("session.php");
    include("DB_connection.php");                           
    $admin_id = trim($_SERVER['PHP_AUTH_USER']);         
    $admin_password = trim($_SERVER['PHP_AUTH_PW']);
   
    $sql = "SELECT userid FROM signup 
                WHERE userid = '$admin_id'
                AND password ='$admin_password'";
  
    $result = mysql_query($sql,$link)
                  or die("Couldn't execute query.");    
    $num = mysql_num_rows($result); 
$_SESSION[userid]=$admin_id; 
if ($num < 1)  
    {
       exit("The User Name or password you entered 
                   is not valid.<br>");                   
                                               }    }            
 // Web page content.                                     
 include("admin_welcome.php");                                  
?>
