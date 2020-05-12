<?php
    
        session_start();
         mysql_connect("localhost", "root", "");
         mysql_select_db("user");        
        if (empty($_SESSION['pass'])) {
 header('Location: page1.php');
 exit;
}

            
 $query = "SELECT COUNT(BJP) FROM count ";
$result = mysql_query($query);
$count = mysql_result($result, 0); 

$query = "SELECT COUNT(CONGRESS) FROM count ";
$result = mysql_query($query);
$count1 = mysql_result($result, 0); 

$query = "SELECT COUNT(JD) FROM count ";
$result = mysql_query($query);
$count2 = mysql_result($result, 0); 

$s = $count+$count1+$count2;
$b = ($count / $s)*100;
number_format((float)$b, 2, '.', '');
$c = ($count1 / $s)*100;
number_format((float)$c, 2, '.', '');
$j = ($count2 / $s)*100;
number_format((float)$j, 2, '.', '');

   
$_SESSION['pass']=NULL;
?>



<html>
<head>
     <title> ResultPage</title>
        <link rel="stylesheet" type="text/css" href="pg7.css">
    </head>
    <script type="text/javascript">
        function changeHashOnLoad() {
     window.location.href += "#";
     setTimeout("changeHashAgain()", "50"); 
}

function changeHashAgain() {
  window.location.href += "1";
}

var storedHash = window.location.hash;
window.setInterval(function () {
    if (window.location.hash != storedHash) {
         window.location.hash = storedHash;
    }
}, 50); 
</script>
<body onload="changeHashOnLoad();">
<div class='barcontainer' >
  <div class='barcontainerheader'>
      <h1> Results:</h1>
<?php
            include 'resulttime.html';
            ?>    
  </div>
  <div class='bar' style='height:<?php echo $b/1.5; ?>%'>
      <h2><?php echo $b; ?>%</h2>
    <div class='barlabel'>
      BJP
    </div>
  </div>
  <div class='bar' style='height:<?php echo $c/1.5; ?>%'>
      <h2><?php echo $c; ?>%</h2>
    <div class='barlabel'>
      CONGRESS
    </div>
  </div>
  <div class='bar' style='height:<?php echo $j/1.5; ?>%'>
      <h1><?php echo $j; ?>%</h1>
    <div class='barlabel' onload="function()">
      JANTA DALL PARTY
    </div>
  </div>
    </div>
    
    
</body>  
</html>