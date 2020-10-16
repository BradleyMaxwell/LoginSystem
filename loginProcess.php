<?php

include 'connect.php';

// SQL statement to query the database to find the record for that user

$sql = "SELECT password FROM users WHERE username='$username'";
$result = $conn->query($sql);

// the return rows will only be 0 or 1, because username is a unique field

if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    if ($password === $row["password"]) { // checks that the user entered the correct password before logging in
      echo "<p>Logged in as " . $username . ".</php>";
    }
    else {
      echo "Incorrect Password.";
    }
  }
}
else {
  echo "User not found.";
}
?>
