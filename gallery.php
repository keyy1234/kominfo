<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery - Club Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .gallery {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            margin-top: 20px; /* Adjust margin top */
        }

        .gallery img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.2s ease;
        }

        .gallery img:hover {
            transform: scale(1.05);
        }

        .main-content h2 {
            margin-top: 10px; /* Adjust this value as needed */
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid mt-5 pt-4">
        <!-- <div class="row"> -->
            <?php include 'sidebar.php'; ?>

            <div class="col-md-10 main-content" style="margin-left: auto; margin-right: auto; margin-top: 20px;">
                <h2 class="mb-4 mt-4 ">Gallery</h2>

                <div class="gallery">
                    <!-- Gambar 1 -->
                    <div class="col-md-4">
                        <img src="gambar/motor.jpg" alt="Gambar 1" class="img-fluid">
                    </div>
                    <!-- Gambar 2 -->
                    <div class="col-md-4">
                        <img src="gambar/motor2.jpg" alt="Gambar 2" class="img-fluid">
                    </div>
                    <!-- Gambar 3 -->
                    <div class="col-md-4">
                        <img src="gambar/club.webp" alt="Gambar 3" class="img-fluid">
                    </div>
                    <!-- Tambahkan gambar lain di sini -->
                    <div class="col-md-4">
                        <img src="gambar/motor4jpg.jpg" alt="Gambar 4" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="gambar/tukar.jpg" alt="Gambar 5" class="img-fluid">
                    </div>
                    <div class="col-md-4">
                        <img src="gambar/ganti.jpg" alt="Gambar 6" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
