<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstname = $_POST["firstname"];
  $lastname = $_POST["lastname"];
  $email = $_POST["email"];
  $password = $_POST["password"];
  $confirm_password = $_POST["confirm_password"];

  echo "First Name: $firstname<br>";
  echo "Last Name: $lastname<br>";
  echo "Email: $email<br>";
  echo "Password Length: " . strlen($password) . "<br>";

  if ($password == $confirm_password) {
    echo "Password and Confirm Password match<br>";
  } else {
    echo "Password and Confirm Password do not match<br>";
  }
} else {
  echo "Invalid request method. Form data not processed.";
}

?>
