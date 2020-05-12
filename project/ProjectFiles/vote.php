<?php 
       
    session_start();
    mysql_connect("localhost", "root", "");
mysql_select_db("user");        
$password = $_SESSION['pass'];

$result = mysql_query("select Vote from details where Voter_ID= '$password'") or die("Failed to connect".mysql_error());
       $row = mysql_fetch_array($result);
       $vote = $row['Vote'];
            if(empty ($vote)){
                echo "<script>location.href='page3.php'</script>";
                
            }
            else{
                 $message = "YOUR VOTE IS COUNTED";
  echo "<script type='text/javascript'>alert('$message');</script>";
    echo "<script>location.href='page2.php'</script>";
            }
        
        ?>
        