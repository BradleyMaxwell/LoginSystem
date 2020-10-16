<?php

include 'connect.php';

$checkexists = "SELECT * FROM users WHERE username = '$username'";
$result_checkexists = $conn->query($checkexists);

if ($result_checkexists->num_rows > 0) {
  echo "Username Taken.";
}
else {
  $sql = "INSERT INTO users (username,password) VALUES ('$username','$password')";
  $conn->query($sql);
  echo "<p>Your account has been created, " . $username . ".</p>";
}

 ?>
