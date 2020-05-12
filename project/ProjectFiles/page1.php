<?php
session_start();
$_SESSION['pass']=NULL;
?>
<html>
    <head>
        <title> Login Page</title>
        <link rel="stylesheet" type="text/css" href="pg1.css">
        
        <body>
            <div class="loginbox">
            <img src="image/download.png" class="download">
                 
                <h1>Login Here</h1>
                <div id='frm'>
    <form action="process.php" method="POST">
        
                    <p>Username</p>
                    <input type="text" name="user" placeholder="Enter Username" required>
                    <p>Password</p>
                    <input type="password" name="pass" placeholder="Enter the password" required><br>
                    <input type="submit" name="submit"><br>
                    <a href="#">Lost your password!</a><br>
                    <a href="#">Don't have an account!</a>                  
                </form>
            
            </div>
            </div>
            
        </body>
    </head>
</html>