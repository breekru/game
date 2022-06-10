<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: welcome.php");
    exit;
}

// Include config file
require_once "config.php";






?>

<html>
<head>
<title>Globo Custom Games LLC</title>
</head>
<body>
    <img src="/img/cgg_logo.png"/>
<p>What category do you want to start in</p>
<ul>
<li>Sports</li>
<li>Technology</li>
<li>History</li>
<li>Pop Culture</li>
<li>Music</li>
<li>Art</li>
<li>Movies</li>

</ul>
</body>
</html>



