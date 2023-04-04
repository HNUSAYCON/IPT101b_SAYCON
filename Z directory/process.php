<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Count the number of characters in the password
    $password_length = strlen($password);

    // Check if the password and confirm password match
    $password_match = ($password == $confirm_password);

    // Output the user's information
    echo "First Name: " . $firstname . "<br>";
    echo "Last Name: " . $lastname . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Password Length: " . $password_length . "<br>";

    if ($password_match) {
        echo "Password and Confirm Password match.<br>";
    } else {
        echo "Password and Confirm Password do not match.<br>";
    }
} else {
    echo "No data received.";
}
?>
