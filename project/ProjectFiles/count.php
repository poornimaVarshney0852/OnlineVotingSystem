<?php 
       
    session_start();
    mysql_connect("localhost", "root", "");
mysql_select_db("user");        
$password = $_SESSION['pass'];

$result = mysql_query("UPDATE `details` SET `Vote` = '1' where Voter_ID= '$password'") or die("Failed to connect".mysql_error());
 echo "<script>location.href='page7.php'</script>";

?>
