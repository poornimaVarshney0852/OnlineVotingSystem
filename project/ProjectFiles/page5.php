<?php
    
        session_start();
        if (empty($_SESSION['pass'])) {
 header('Location: page1.php');
 exit;
}
?>

<html>
    <head>
        <title>About candidates</title>
         <link rel="stylesheet" type="text/css" href="pg4.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <body>
            <div class "page">
                 <div class="menu">
             <div class="btn"><a href="page2.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
                <div class="btn"><a href="page3.php"><i class="fa fa-inbox" aria-hidden="true"></i>Vote</a></div>
                 
                 <div class="btn"><a href="page1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
     
        </div>
                <?php
            include 'time.html';
            ?>

                <img src="image/congress.jpg" class="bjp">
                <h1>Siddaramaiah</h1>
                <p>Siddaramaiah (born 12 August 1948) is an Indian politician and present Chief Minister of Karnataka since 2013. Currently a leader of the Indian National Congress party, Siddaramaiah was a member of various Janata Parivar factions for several years.Earlier, as a Janata Dal (Secular) leader, he was Deputy Chief Minister of Karnataka on two occasions. On 13 May 2013 he was sworn in as Chief Minister of Karnataka.</p>

                <h2>Early life</h2>
    <p>He was born to Siddarame Gowda and Boramma in a remote village called Siddaramanahundi in Varuna Hobli near to T.Narasipura of Mysore District in a farming family. He had no formal schooling until he was ten but went on to do his B.Sc and Bachelor of Law from Mysore University. He is a leader of the Kuruba Gowda community. He is the second amongst five siblings.</p>

    <h2>Career</h2>
    <p>Before 1978, he began political career when Nanjunda Swamy, a lawyer in Mysore, spotted him at the district courts as a law graduate. He was asked to contest and was elected to the Mysore Taluka.He contested on a Bharatiya Lok Dal ticket from Chamundeshwari constituency and entered the 7th Karnataka Legislative Assembly in 1983.</p>
    <p>Later he joined the ruling Janata Party and became the first president of the Kannada Surveillance Committee (Kannada Kavalu Samiti), set up to supervise the implementation of Kannada as an official language.</p>
                <h2>Personal life</h2>
                <p>Siddaramaiah is married to Parvathi and had two sons: late Rakesh, who did a few film roles and Yathindra, who is a doctor. Rakesh died in July 2016 in Belgium due to multiple organ failure As revealed by the Facebook profiles of some of his friends who were traveling with him, they were possibly attending ‘Tomorrowland’, one of the world’s biggest electronic dance music festivals, held annually in Belgium.</p>



            </div>
        </body>
    </head>
</html>