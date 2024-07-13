<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</head>
<body class="body-style">
    <?php include 'navbar.php'; ?>
    <!-- Main Content -->
    <div class="container-fluid mt-5 pt-4">
   
            <?php include 'sidebar.php'; ?>
            <div class="col-md-9 py-3 main-content">
                <h1>Selamat Datang, <?php echo isset($_SESSION['nama']) ? $_SESSION['nama'] : 'Pengguna'; ?></h1>
                <p>Website resmi Club Motor.</p>
                <img src="gambar/motor.jpg" alt="Gambar Club Motor" class="img-fluid img-small" style="max-width: 400px;">
            </div>
        </div>
    </div>

    <!-- Login Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="loginModalLabel">Login</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="process_login.php" method="POST">
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Login</button>
                    </form>
                    <p class="mt-3">Belum punya akun? <a href="#" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Sign Up</a></p>
                    <div id="registerPrompt" class="alert alert-warning d-none" role="alert">
                        Email belum terdaftar. Silakan registrasi terlebih dahulu.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Register Modal -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="registerModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerModalLabel">Sign Up</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="process_register.php" method="POST">
                        <div class="mb-3">
                            <label for="reg-email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="reg-email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="reg-password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="reg-password" name="password" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Pop-up for not registered users -->
    <div class="modal fade" id="registerPromptModal" tabindex="-1" aria-labelledby="registerPromptModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="registerPromptModalLabel">Email Not Registered</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    Email belum terdaftar. Silakan registrasi terlebih dahulu.
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#registerModal" data-bs-dismiss="modal">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('login')) {
                if (urlParams.get('login') === 'failed') {
                    var myModal = new bootstrap.Modal(document.getElementById('loginModal'), {
                        keyboard: false
                    });
                    myModal.show();
                } else if (urlParams.get('login') === 'not_registered') {
                    var registerPromptModal = new bootstrap.Modal(document.getElementById('registerPromptModal'), {
                        keyboard: false
                    });
                    registerPromptModal.show();
                }
            } else if (urlParams.has('register')) {
                if (urlParams.get('register') === 'success') {
                    var myModal = new bootstrap.Modal(document.getElementById('loginModal'), {
                        keyboard: false
                    });
                    myModal.show();
                } else if (urlParams.get('register') === 'failed') {
                    alert('Registration failed. Please try again.');
                }
            }
        });
    </script>

    <?php include 'footer.php'; ?>
</body>
</html>
