<?php

//variables corresponding to database access. May need to change depending on where files are hosted
$servername = "localhost";
$dBUsername = "root";
$dBPassword = ""; 
$dBName = "demo";

//function to start database access within the site
$conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);


//checks for an error when opening/writing to the db
if (!$conn){
    die("Connection failed: ".mysqli_connect_error());
} 
