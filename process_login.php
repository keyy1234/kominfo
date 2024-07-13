<?php
include 'db_connect.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email']) && isset($_POST['password'])) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        // Query to check if the email exists
        $sql = "SELECT * FROM users WHERE email='$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Verify password
            if (password_verify($password, $row['password'])) {
                // Password is correct, redirect to dashboard
                header("Location: dashboard.php?login=success");
                exit();
            } else {
                // Incorrect password
                header("Location: dashboard.php?login=failed");
                exit();
            }
        } else {
            // Email not found
            header("Location: dashboard.php?login=not_registered");
            exit();
        }
    } else {
        // Email or password not set
        header("Location: dashboard.php?login=failed");
        exit();
    }
}
$conn->close();
?>
