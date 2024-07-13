<?php 
session_start();

require 'db_connect.php';

if (isset($_SESSION['login'])) {
    header("Location: dashboard.php");
    exit;
}

$messages = '';

if (isset($_POST['login'])) {
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $password = $_POST['password'];

    $cek = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
    if ($cek && mysqli_num_rows($cek) > 0) {
        $data = mysqli_fetch_assoc($cek);

        if (password_verify($password, $data['password'])) {

            $_SESSION['login'] = true;
            header("Location: dashboard.php");
            exit;
        } else {
            $messages .= "<div class='alert-danger'>Username atau Password Salah!</div>";
        }
    } else {
        $messages .= "<div class='alert-danger'>Username atau Password Salah!</div>";
    }
}

if (isset($_SESSION['success_message'])) {
    $messages .= "<div class='alert-success'>{$_SESSION['success_message']}</div>";
    unset($_SESSION['success_message']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    
    <div class="wrapper">
    <form action="index.php" method="POST">
    <h1>Login</h1>
    <?php $messages; ?>
            <div class="input-box">
                <input type="text" name="email" placeholder="Email" required />
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required />
                <i class="bx bxs-lock"></i>
            </div>

            <button type="submit" name='login' class="btn">Login</button>
    </form>
    <p>Don't have an account? <a href="register.php">Register here</a>.</p>
    </div>
</body>
</html>
