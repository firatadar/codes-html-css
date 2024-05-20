<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Here, you would typically perform authentication
    // For this example, let's assume a hardcoded email and password
    $valid_email = "example@example.com";
    $valid_password = "password123";

    // Check if email and password match the valid credentials
    if ($email == $valid_email && $password == $valid_password) {
        // Authentication successful, redirect to 1.html
        header("Location: 1.html");
        exit;
    } else {
        // Authentication failed, redirect back to login page with error message
        header("Location: login.html?error=1");
        exit;
    }
} else {
    // Redirect to login page if accessed directly without form submission
    header("Location: login.html");
    exit;
}
?>
