<?php
session_start();
$username = $_POST['user'];
    $password = $_POST['pass'];
   $_SESSION['pass'] = $password;
    
    $username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect("localhost", "root", "");
mysql_select_db("user");

$result = mysql_query("select * from details where Name= '$username' and Voter_ID = '$password' ") or die("Failed to connect".mysql_error());
$row = mysql_fetch_array($result);
if ($row['Name'] == $username && $row['Voter_ID'] == $password ){
echo "<script>location.href='page2.php'</script>";
 

}
else{
     $message = "Username and or Password incorrect ! Try again";
  echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>location.href='page1.php'</script>";

      
    
}

?>