<?php
      mysql_connect("localhost", "root", "");
mysql_select_db("user");
$result = mysql_query("INSERT INTO `count` (`BJP`) VALUES ('1')") or die("Failed to connect".mysql_error());
echo "<script>location.href='count.php'</script>";
?>