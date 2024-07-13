<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Club Motor</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .about-section {
            padding: 40px 20px;
            background-color: #f8f9fa;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .about-section h2 {
            margin-bottom: 20px;
        }
        .about-section p {
            line-height: 1.6;
        }
        .main-content {
            padding-left: 280px; /* Sesuaikan berdasarkan lebar sidebar */
        }
    </style>
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container-fluid mt-5 pt-4">
        
            <?php include 'sidebar.php'; ?>
            <div class="col-md-9 main-content">
                <div class="about-section">
                    <h2>Tentang Kami</h2>
                    <p>Club Motor adalah klub sepeda motor terkemuka yang didedikasikan untuk mengumpulkan para penggemar,<br>
                     profesional, dan hobiis yang memiliki minat dalam sepeda motor. Didirikan pada tahun 2020, <br>
                     klub kami telah tumbuh menjadi salah satu komunitas sepeda motor paling aktif dan dinamis. <br>
                     Kami mengadakan berbagai acara, perjalanan, dan pertemuan rutin untuk memperkuat <br>
                     persaudaraan di antara anggota kami.</p>
                    <p>Misi kami adalah menyediakan platform di mana para penggemar sepeda motor dapat terhubung,<br>
                     berbagi pengalaman, dan mengeksplorasi kegembiraan berkendara bersama. Kami bertujuan untuk <br>
                      menciptakan lingkungan yang mendukung untuk mempromosikan praktik berkendara yang aman dan <br>
                       meningkatkan keterampilan berkendara anggota kami.</p>
                    <p>Bergabunglah dengan kami hari ini dan menjadi bagian dari komunitas yang membagikan <br>
                    cinta Anda terhadap sepeda motor, petualangan, dan jalan terbuka.</p>
                </div>
            </div>
       
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
