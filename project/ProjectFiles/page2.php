<html>
 <head>
     <title>Home Page</title>
     <meta charset="UTF-8">
     <meta viewport="content" width="device-width initial-scale=1">
     <link rel="stylesheet" type="text/css" href="pg1.css">
     <link rel="stylesheet" type="text/css" href="pg2.css">
    

     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      
    
<?php
        
        session_start();
        if (empty($_SESSION['pass'])) {
 header('Location: page1.php');
 exit;
}
        

mysql_connect("localhost", "root", "");
mysql_select_db("user");
      
$password = $_SESSION['pass'];

$result = mysql_query("select * from details where Voter_ID= '$password'") or die("Failed to connect".mysql_error());
while($row = mysql_fetch_array($result))
{
    $name = $row['Name'];
    $voter =$row['Voter_ID'];
    $date = $row['Date_Of_Birth'];
    $gender =$row['Gender'];
    $place = $row['Place'];
    $vote = $row['Vote'];
    
}
      

?>

        <body>
        <div class="menu" >
            <div class="btn"><a href="page2.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
            <div class="btn"><a href="vote.php"><i class="fa fa-inbox" aria-hidden="true"></i>Vote</a></div>
            
            <div class="btn"><a href="page1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
        </div>
            <?php
            include 'time.html';
            ?>
         <div class="loginbox box">
             
             <img src="image/images.jpg" class="Gujarat-INDIA">
            <h1>User Details</h1>
                <form method="GET">
                    
                    <p>Electrol's Name:</p>
                        <input type="text" name="name" placeholder=""readonly value= "<?php echo $name; ?>"><br>
                    <p>Voter_ID:</p>
                        <input type="text" name="voter" placeholder=""readonly value= "<?php echo $voter; ?>"><br>
                    <p>Date Of Birth:</p>
                        <input type="text" name="date" placeholder=""readonly value= "<?php echo $date; ?>"><br>
                    <p>Gender:</p>
                        <input type="text" name="gender" placeholder=""readonly value= "<?php echo $gender; ?>"><br>
                    <p>Place:</p>
                        <input type="text" name="place" placeholder=""readonly value= "<?php echo $place; ?>"><br>
                    
            </form>      
             </div>
        
    </body>
    </head>
</html>