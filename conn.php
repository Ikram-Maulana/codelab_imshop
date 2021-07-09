<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "codelab_imshop";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
if (!$connection){
        die("Connection Failed:".mysqli_connect_error());
    }
?>