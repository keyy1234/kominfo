<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produk / Jasa - Club Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .main-content {
            margin-left: 220px; /* Adjust this value based on sidebar width */
            padding: 20px;
        }
        .produk-jasa-content {
            margin-top: 30px;
        }
        .produk-jasa-content h3 {
            margin-top: 30px;
            color: #333;
        }
        .produk-jasa-content ul {
            padding-left: 20px;
        }
        .produk-jasa-content ul li {
            list-style-type: none;
            margin-bottom: 10px;
        }
        .produk-jasa-content .icon {
            font-size: 24px;
            margin-right: 10px;
            vertical-align: middle;
        }
        .produk-jasa-content .produk-item {
            margin-bottom: 40px;
        }
        .produk-jasa-content .produk-item img {
            max-width: 100%;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease;
        }
        .produk-jasa-content .produk-item img:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid mt-5 pt-4">
        <!-- <div class="row"> -->
            <?php include 'sidebar.php'; ?>
            <div class="col-md-5 main-content">
                <h2>Produk / Jasa</h2>
                <div class="produk-jasa-content">
                    <div class="row produk-item">
                        <div class="col-md-6">
                            <img src="gambar/motor.jpg" alt="Motor" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h3><i class="fas fa-motorcycle icon"></i>Motor</h3>
                            <p>Berbagai jenis dan merk terkemuka untuk penggemar sepeda motor.</p>
                        </div>
                    </div>

                    <div class="row produk-item">
                        <div class="col-md-6">
                            <h3><i class="fas fa-tools icon"></i>Servis & Perawatan</h3>
                            <p>Layanan servis dan perawatan berkala serta perbaikan motor.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="gambar/servis.jpg" alt="Servis & Perawatan" class="img-fluid">
                        </div>
                    </div>

                    <div class="row produk-item">
                        <div class="col-md-6">
                            <img src="gambar/kasesoris.jpg" alt="Aksesori" class="img-fluid">
                        </div>
                        <div class="col-md-6">
                            <h3><i class="fas fa-shopping-bag icon"></i>Aksesori & Perlengkapan</h3>
                            <p>Perlengkapan berkendara, aksesori motor, dan pakaian keselamatan.</p>
                        </div>
                    </div>

                    <div class="row produk-item">
                        <div class="col-md-6">
                            <h3><i class="fas fa-users icon"></i>Konsultasi & Edukasi</h3>
                            <p>Konsultasi teknis dan pelatihan berkendara bagi anggota komunitas.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="gambar/edukasi.jpg" alt="Konsultasi & Edukasi" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</body>
</html>

