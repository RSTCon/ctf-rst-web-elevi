<?php
session_start();
?>
<html>
    <head>
        <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
         <title>FC Cojasca</title>
    <body style="background-color:LightGreen;">
        <div class="menu">
            <a href="index.php">Acasa</a>
            <a href="index.php?view=about-us.html">Despre</a>
            <a href="index.php?view=contact-us.html">Contact</a>
            <a href="index.php?view=media.html">Media</a/>
        </div>
<?php

if(!isset($_GET['view']) || ($_GET['view']=="index.php")) {
    echo" <p><b>Bine ati venit!</b><br><br>Urmeaza...</br></p>
    <img src=''>";
}
else {
        echo "<p>";
        include("/var/www/html/" .$_GET['view']);
        echo "</p>";
}
?>
    </body>
</html>

