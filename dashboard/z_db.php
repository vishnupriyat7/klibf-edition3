<?php
$con = new mysqli("127.0.0.1", "root", "K!@inte6n@t0nl@b00k5e5t", "klibf2");
if ($con->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

//Your Website URL Goes Here
// $url = "http://localhost/kla-bookfest";


//Set Blog Activation Bonus Here (It must be only Number)
$blog_bonus = "10";
//Set Article Activation Bonus Here (It must be only Number)
$art_bonus = "10";
//Set Daily Login Bonus Here (It must be only Number)
$login_bonus = "10";
//Set Currency Symbol for daily login bonus Here
$money = "$";
