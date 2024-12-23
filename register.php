<?php
// Include database connection file
include 'db_connect.php';

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['first-name'];
    $surname = $_POST['last-name'];
    $address = $_POST['address'];
    $number = $_POST['phone'];
    $email = $_POST['email'];
    $line_id = $_POST['line-id'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Validate that passwords match
    if ($password !== $confirm_password) {
        die("Passwords do not match.");
    }

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO Users (username, password, Name, Surname, Address, Number, Email, Line_ID) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    $hashed_password = password_hash($password, PASSWORD_DEFAULT); // Hash the password

    // Bind parameters
    $stmt->bind_param("ssssssss", $email, $hashed_password, $name, $surname, $address, $number, $email, $line_id);

    // Execute the statement
    if ($stmt->execute()) {
        echo "Registration successful.";
        header("Location: login.html"); // Redirect to the login page
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
}
?>
