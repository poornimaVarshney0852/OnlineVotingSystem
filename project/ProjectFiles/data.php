<?php
    
        session_start();
         mysql_connect("localhost", "root", "");
         mysql_select_db("user");        


$result = mysql_query("UPDATE `details` SET `Vote` = ''") or die("Failed to connect".mysql_error());
            $result = mysql_query("DELETE FROM count") or die ("Failed to connect".mysql_error());
 echo "<script>location.href='page1.php'</script>";
?>