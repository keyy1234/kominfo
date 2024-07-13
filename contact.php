<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Club Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> <!-- Jika ada file style khusus untuk halaman ini -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    
    <style>
        .card {
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid mt-5 pt-4">
        <div class="row">
            <?php include 'sidebar.php'; ?>
            <div class="col-md-3 offset-md-3 py-3 main-content">
            <h2 class="mt-5 mb-4 text-left">Kontak</h2>
                 <div class="card mb-3" style="width: 700px;">
                   
                    <div class="contact-info">
                        <p><strong>Alamat:</strong> Jl. Contoh No. 123, Kota Anda</p>
                        <p><strong>No Telepon:</strong> (021) 123-4567</p>
                        <p><strong>Email:</strong> info@clubmotor.com</p>
                        <p><strong>Fax:</strong> (021) 987-6543</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

<?php include 'footer.php'; ?>
</html>

