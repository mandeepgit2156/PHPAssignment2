<?php
session_start();

// Simulated user data (replace with your database queries)
$valid_username = "user";
$valid_password = password_hash("password123", PASSWORD_DEFAULT); // Hashed password

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username === $valid_username && password_verify($password, $valid_password)) {
        $_SESSION["username"] = $username;
        header("Location: ../loginsuccess.html");
        exit();
    } else {
        echo "Invalid username or password.";
    }
}
?>
