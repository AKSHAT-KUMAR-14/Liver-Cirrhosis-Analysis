<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Perform any necessary validation or processing here

    // For demonstration purposes, let's just display the submitted data
    echo "<h2>Form Data Received:</h2>";
    echo "<p><strong>Name:</strong> $name</p>";
    echo "<p><strong>Email:</strong> $email</p>";
    echo "<p><strong>Message:</strong> $message</p>";
} else {
    // If someone tries to access this page directly without submitting the form
    echo "Invalid request";
}
?>
