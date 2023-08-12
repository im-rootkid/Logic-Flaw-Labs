<?php
// Start the session
session_start();

// Check if the user is logged in
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] === true) {
    // Check if the OTP is submitted
    if (isset($_POST['otp'])) {
        $submittedOTP = $_POST['otp'];

        // Check if the submitted OTP is correct
        if ($submittedOTP === '889900') {
            // OTP is correct, redirect to the dashboard
            header('Location: dashboard.html');
            exit();
        } else {
            // Invalid OTP, redirect back to the OTP verification page with an error message
            header('Location: otp.html?error=1');
            exit();
        }
    } else {
        // No OTP submitted, redirect to the dashboard
        header('Location: dashboard.html');
        exit();
    }
} else {
    // User is not logged in, redirect back to the login page
    header('Location: index.html');
    exit();
}
?>
