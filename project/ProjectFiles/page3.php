<?php
    
        session_start();
        if (empty($_SESSION['pass'])) {
 header('Location: page1.php');
 exit;
}
?>

<html>
 <head>
     <title>Home Page</title>
     <link rel="stylesheet" type="text/css" href="pg3.css">
     <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
    <body>
        <div class="menu">
            <div class="btn"><a href="page2.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
                <div class="btn"><a href="page3.php"><i class="fa fa-inbox" aria-hidden="true"></i>Vote</a></div>
                <div class="btn"><a href="page1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
        </div>
        <?php
            include 'time.html';
            ?>
        <div class="myclass">
            <div class="myimg"><a href="page4.php"><img src="image/BJP.jpg" class="BJP" id="bjp"></a></div>
            <div class="myimg"><img src="image/download.jpg" class="BJP1" onclick="myFunction1()"></div>
        </div>
        
        
        <div class="HomePage">
            <div class="myimg"><a href="page5.php"><img src="image/congress.jpg" class="BJP" id="con"></a></div>
            <div class="myimg"><img src="image/conlogo.jpg" class="BJP1" onclick="myFunction2()"></div>
             </div>
        <div class="HomePage1">
            <div class="myimg"><a href="page6.php"><img src="image/Nitish_Kumar_(cropped).JPG" class="BJP" id="jnd"></a></div>
            <div class="myimg"><img src="image/jantadallogo.jpg" class="BJP1" onclick="myFunction3()"></div>
        </div>
           <div class="homepage2">
               <button><a onclick="myfunction4()">Submit</a></button>
             </div>
        <script>
            var i=0;
            var x=0,y=0,z=0;
            function myFunction1(){
                i++;
                x=1;
                y=0;
                z=0;
                 document.getElementById("bjp").style.borderColor = "green";
                 document.getElementById("con").style.borderColor = "#bc0d2e";
                document.getElementById("jnd").style.borderColor = "#bc0d2e";
            }
            function myFunction2(){
                i++;
                x=0;
                y=1;
                z=0;
                 document.getElementById("bjp").style.borderColor = "#bc0d2e";
                 document.getElementById("con").style.borderColor = "green";
                document.getElementById("jnd").style.borderColor = "#bc0d2e";
            }
            function myFunction3(){
                i++;
                x=0;
                y=0;
                z=1;
                 document.getElementById("bjp").style.borderColor = "#bc0d2e";
                 document.getElementById("con").style.borderColor = "#bc0d2e";
                document.getElementById("jnd").style.borderColor = "green";
            }
            function myfunction4()
            {
                if(i!=0)
                    {
                    if(x==1)
                            {
                                location.href='b.php';
                            }
                        else{
                            if(y==1){
                                location.href="cong.php";
                            }
                            else{
                                if(z==1){
                                    location.href="jd.php";
                                }
                            }
                        }
            }
                else{
                       alert('Please vote and then submit');
                        document.location='page3.php';
                     
                    
                }
            }
            
        </script>
    </body>
</html>