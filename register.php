<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style/regis.css">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet" />
</head>
<body>
    <div class="wrapper">
    <form action="process_register.php" method="POST">
    <h1>Login</h1>
            <div class="input-box">
                <input type="text" name="username" placeholder="Username" required />
                <i class="bx bxs-user"></i>
            </div>
            <div class="input-box">
                <input type="email" name="email" placeholder="email" required />
                <i class="bx bxs-envelope"></i>
            </div>
            <div class="input-box">
                <input type="password" name="password" placeholder="Password" required />
                <i class="bx bxs-lock"></i>
            </div>

            <button type="submit" class="btn">Login</button>
    </form>
    <p>Already have an account? <a href="login.php">Login here</a>.</p>
    </div>
</body>
</html>

<!-- <form action="register_process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Register">
    </form> -->