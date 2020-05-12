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
             <div class="menu">
             <div class="btn"><a href="page2.php"><i class="fa fa-home" aria-hidden="true"></i>Home</a></div>
                <div class="btn"><a href="page3.php"><i class="fa fa-inbox" aria-hidden="true"></i>Vote</a></div>
                
                 <div class="btn"><a href="page1.php"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></div>
         
        </div>
            <?php
            include 'time.html';
            ?>
            <div class "page">
                <img src="image/Nitish_Kumar_(cropped).JPG" class="bjp">
                <h1>Nitish Kumar</h1>
                <p>Nitish Kumar (born 1 March 1951) is an Indian politician. who has been the Chief Minister of Bihar, a state in eastern India, since 2017. Previously he served as the Chief Minister of Bihar from 2005 to 2014 and from 2015 to 2017; he also served as a minister in the Union Government of India. He belongs to the Janata Dal (United) political party.</p>

                <h2>Early life</h2>
                <p>Nitish Kumar was born in Harnaut (Kalyan Bigaha ), Nalanda district of Bihar in a Kurmi family to Kabiraj Ram Lakhan Singh and Parmeshwari Devi. His father was a freedom fighter and was close to the great Gandhian Bihar Vibhuti Anugrah Narayan Sinha, one of the founders of modern Bihar. His father, who was also an Ayurvedic Vaidyaraj</p>

                <h2>Political career</h2>
                <p>Nitish Kumar belongs to a socialist class of politicians. He learnt the lessons of politics under the tutelage of stalwarts Jayaprakash Narayan, Ram Manohar Lohia, S. N. Sinha, Karpuri Thakur and V. P. Singh.</p>

                <h2>Personal life</h2>
<p>On 22 February 1973, Nitish Kumar married Manju Kumari Sinha, a teacher by profession. They have a son, Nishant (born 20 July 1975), who is a graduate in engineering from BIT-Mesra. Manju Sinha died in 2007 at the age of 53. Nitish's nickname is Munna.
Biographies
•	Sankarshan Thakur authored a book based on his life titled Single Man: The Life and Times of Nitish Kumar of Bihar.
    •	Arun Sinha has authored a book titled Nitish Kumar and The Rise of Bihar.</p>


            </div>
        </body>
    </head>
</html>