<?php
// Get the submitted username and password
$username = $_POST['username'];
$password = $_POST['password'];

// Check if username and password are correct
if ($username === 'admin' && $password === 'admin') {
    // Start a session
    session_start();

    // Set a session variable to indicate successful login
    $_SESSION['loggedIn'] = true;

    // Redirect to the OTP verification page
    header('Location: otp.html');
    exit();
} else {
    // Invalid credentials, redirect back to the login page with an error message
    header('Location: index.html?error=1');
    exit();
}
?>
