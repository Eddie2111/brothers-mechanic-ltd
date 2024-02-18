<?php
// local db connection here

$server = "localhost";
$username = "root";
$password = "";
$dbname = "apache";

$conn = mysqli_connect($server, $username, $password, $dbname); //db connection function call
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>