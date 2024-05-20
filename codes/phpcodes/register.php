<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nickname = $_POST["nickname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Here, you would typically process the registration
    // For this example, let's assume successful registration

    // Redirect to login page after successful registration
    header("Location: login.html");
    exit;
} else {
    // Redirect to register page if accessed directly without form submission
    header("Location: register.html");
    exit;
}
?>
