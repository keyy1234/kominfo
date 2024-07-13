<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visi Misi - Club Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .main-content {
            margin-left: 220px; /* Adjust this value based on sidebar width */
            padding: 20px;
        }
        .visi-misi-content {
            margin-top: 30px;
        }
        .visi-misi-content p {
            text-align: justify;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid mt-5 pt-4">
        <!-- <div class="row"> -->
            <?php include 'sidebar.php'; ?>
            <div class="col-md-10 main-content">
                <h2>Visi Misi</h2>
                <div class="visi-misi-content">
                    <h3>Visi</h3>
                    <p>Menjadi komunitas sepeda motor terkemuka yang memberikan inspirasi dan kebanggaan bagi anggotanya.</p>
                    
                    <h3>Misi</h3>
                    <ul>
                        <li>Menggalang solidaritas di antara anggota.</li>
                        <li>Menyediakan layanan bengkel dan teknis yang berkualitas.</li>
                        <li>Mengadakan acara dan kegiatan yang bermanfaat bagi anggota dan masyarakat umum.</li>
                        <li>Mendorong kesadaran akan keselamatan berkendara.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
