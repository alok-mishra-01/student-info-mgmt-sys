<?php
/* Program: Auth.php
 * Desc:    Program that prompts for a user name and 
 *          password from the user using HTTP authentication.
 *          The program then tests tests whether the user
 *          name and password match a user name and password 
 *          pair stored in a MySQL database.
 */

 //Testing whether the user has been prompted for a user name
 if(!isset($_SERVER['PHP_AUTH_USER']))                    #10
 {
    header('WWW-Authenticate: Basic realm="Attendance Entry"');
    header('HTTP/1.0 401 Unauthorized');                  #13
    exit("This page requires authentication!");           #14
 }                                                        #15

 // Testing the user name and password entered by the user
 else                                                     #18
 {
    include("Vars.inc");                                  #20
    $fac_code = trim($_SERVER['PHP_AUTH_USER']);         #21
    $fac_password = trim($_SERVER['PHP_AUTH_PW']);
    $connection = mysqli_connect($host,$user,$passwd)
               or die ("Couldn't connect to server.");    #24
    $db = mysqli_select_db($connection,$database)
               or die ("Couldn't select database.");
    $sql = "SELECT fac_code FROM users 
                WHERE fac_code = '$fac_code'
                AND fac_password =md5('$fac_password')";
  
    $result = mysqli_query($connection,$sql)
                  or die("Couldn't execute query.");      #31
    $num = mysqli_num_rows($result);                      #32
    //if ($num < 1)  // user name/password not found        #33
    //{
      // exit("The User Name or password you entered 
                 //   is not valid.<br>");
   // }                                                     #37
 }                                                        #38
 // Web page content.                                     #39
 include("att_entry1.php");                                  #40
?>
