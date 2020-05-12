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
                <img src="image/BJP.jpg" class="bjp">
                <h1>Devendra Gangadharrao Fadnavis</h1>
                <p>Devendra Gangadharrao Fadnavis (born 22 July 1970) is an Indian politician. A member of Bharatiya Janata Party and the Rashtriya Swayamsevak Sangh, at the age of 44, he became the second youngest Chief Minister of Maharashtra after Sharad Pawar. Fadnavis represents the Nagpur South West constituency in Maharashtra Legislative Assembly.</p>

                <h2>Early life and education</h2><p>
Fadnavis received his initial schooling from Indira Convent, named after then Prime Minister Indira Gandhi.
After completing his 12th standard, he enrolled at Government Law College, Nagpur, for a five-year integrated law degree, and graduated in 1992.
Fadnavis also has a post-graduate degree in Business Management and a diploma in Methods and Techniques of Project Management from DSE (German Foundation for International Development), Berlin.</p>


                    <h2>Political career</h2>
<p>His political career began in the mid-nineties. His personal ideology is that ‘Politics is an instrument for socio economic change’ and his political career of 25 years so far reflects the same.
He has essayed multiple leadership roles for both his political party as well as an elected representative of the people of Nagpur, Maharashtra. As a college student, Fadnavis was an active member of ABVP.</p>

                    <h2>Controversies</h2>
<p>In April 2016, whilst addressing a rally in Nashik, Fadnavis said that, every Indian will have to chant 'Bharat Mata ki Jai' and those who refuse to chant the slogan should not live in the country instead go to Pakistan or China. Day after he said that all Indians to chant 'Bharat Mata ki Jai', Maharashtra Chief Minister Devendra Fadnavis issued clarification after he found himself embroiled in a controversy over the issue.

                </p>
            </div>
        </body>
    </head>
</html>