<?php
    
        session_start();
        if (empty($_SESSION['pass'])) {
 header('Location: page1.php');
 exit;
        }
$_SESSION['pass']=NULL;
        
?>

<html>
    <head>
        <title> Thank You Page</title>
        <link rel="stylesheet" type="text/css" href="pg6.css">
        <body>
            <img src="image/thankyou-msg.png" class="ab" onload="function()">
        </body>
    </head>
          <script>
window.location.hash="no-back-button";
window.location.hash="Again-No-back-button";
window.onhashchange=function(){window.location.hash="no-back-button";}
</script>   
    
</html>