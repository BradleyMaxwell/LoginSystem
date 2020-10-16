<?php
// initialising variables to connect to phpMyAdmin database

$servername = "localhost";
$db = "login";
$dbUser = "root";
$dbPassword = "";

// getting the username and password from my HTML form

$username = $_POST['username'];
$password = $_POST['password'];

// attempting to connecting to my database, and displaying an error in case of failure to connect

$conn = mysqli_connect("$servername",$dbUser,$dbPassword,$db) or die("Bad Connect:".mysqli_connect_error());

 ?>
