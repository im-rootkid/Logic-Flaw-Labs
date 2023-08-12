<?php
$password = $_POST['password'];

// Simulating a login scenario
$stored_password = '0e12345';
$is_authenticated = false;

// Check if the password is correct
if ($password == $stored_password) {
    $is_authenticated = true;
}

// Redirect to appropriate pages based on the authentication status
if ($is_authenticated) {
    header("Location: welcome.html");
    exit();
} else {
    header("Location: authentication_failed.html");
    exit();
}
?>

