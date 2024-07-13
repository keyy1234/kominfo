<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Query to check if the email already exists
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Email already exists
            header("Location: dashboard.php?register=failed");
            exit();
        } else {
            // Insert new user
            $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
            if ($conn->query($sql) === TRUE) {
                // Registration successful, redirect to dashboard
                header("Location: dashboard.php?register=success");
                exit();
            } else {
                // Registration failed
                header("Location: dashboard.php?register=failed");
                exit();
            }
        }
    } else {
        // Missing email or password
        header("Location: dashboard.php?register=failed");
        exit();
    }
} else {
    // Not a POST request
    header("Location: dashboard.php");
    exit();
}

$conn->close();
?>
