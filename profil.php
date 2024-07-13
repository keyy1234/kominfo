<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .about-section {
            padding: 20px 0;
        }
        .about-avatar img {
            width: 100%;
            border-radius: 50%;
        }
        .about-text {
            margin-top: 30px;
        }
        .about-list .media {
            margin-bottom: 10px;
        }
        .about-list .media label {
            font-weight: bold;
        }
        .count-data {
            margin-top: 30px;
        }
        .count-data h6 {
            font-size: 2em;
            margin: 0;
        }
        .count-data p {
            margin: 0;
            font-weight: 600;
        }
        .container-fluid {
            padding-top: 0px; /* Adjust based on the height of your navbar */
        }
        
        .sidebar {
            width: 200px; /* Sesuaikan lebar sidebar */
            background-color: #f8f9fa; /* Warna latar belakang sidebar */
            padding: 20px; /* Padding di dalam sidebar */
            height: 100vh; /* Membuat sidebar penuh tinggi */
            margin-top: 0px; /* Jarak dari atas */
            position: absolute; /* Membuat sidebar tetap di tempat */
           
            border-right: 1px solid #ccc;
        }

        .list-group-custom a {
            display: block; /* Menjadikan link sebagai blok */
            padding: 10px 15px; /* Padding di dalam link */
            margin-bottom: 5px; /* Jarak antar link */
            text-decoration: none; /* Menghilangkan garis bawah pada link */
            color: #000; /* Warna teks */
            border-radius: 4px; /* Memberikan sedikit radius pada sudut */
            transition: background-color 0.3s; /* Transisi untuk latar belakang */
        }

        .list-group-custom a:hover {
            background-color: #e9ecef; /* Warna latar belakang saat di-hover */
        }

        .list-group-custom a.active {
            background-color: #007bff; /* Warna latar belakang untuk link aktif */
            color: #fff; /* Warna teks untuk link aktif */
        }

        .main-content {
            margin-left: 220px; /* Margin kiri lebih besar dari lebar sidebar */
            padding: 20px;
        }

        .main-content h2 {
            margin-top: 20px; /* Adjust this value as needed */
        }

        .img-small {
            max-width: 200px;
            margin-top: 20px;
        }
    </style>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
</head>
<body>
    <?php
    session_start();
    include 'navbar.php';
    ?>
    <div class="sidebar">
        <div class="list-group-custom">
            <a href="dashboard.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">Dashboard</a>
            <a href="profil.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'profil.php' ? 'active' : ''; ?>">Profile</a>
            <a href="member.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'member.php' ? 'active' : ''; ?>">Klien Kami</a>
            <a href="events.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'events.php' ? 'active' : ''; ?>">Events</a>
            <a href="gallery.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>">Gallery</a>
            <a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <div class="main-content">
        <section class="section about-section gray-bg" id="about">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-lg-6">
                        <div class="about-text go-to">
                            <h3 class="dark-color">Profile</h3>
                            <h6 class="theme-color lead">A leading motorcycle club</h6>
                            <p><strong>Didirikan pada tahun 2020:</strong> Club Motor telah berpengalaman dalam mengadakan berbagai kegiatan dan event sejak tahun pendiriannya.</p>
        <p><strong>Rutinitas Acara Berkala:</strong> Kami secara rutin mengadakan acara seperti tur bersama, pertemuan komunitas, serta acara amal yang melibatkan anggota dan masyarakat umum.</p>
        <p><strong>Jaringan Anggota yang Luas:</strong> Dengan lebih dari 1000 anggota aktif, Club Motor menjangkau penggemar sepeda motor dari berbagai latar belakang dan daerah.</p>
        <p><strong>Dukungan Teknis Profesional:</strong> Kami menyediakan layanan bengkel dan teknis yang terpercaya untuk membantu anggota.</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="about-avatar">
                            <img src="gambar/profil.jpg" alt="Club Motor">
                        </div>
                    </div>
                </div>
                <div class="counter">
                    <div class="row">
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="500" data-speed="500">500</h6>
                                <p class="m-0px font-w-600">Happy Clients</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="150" data-speed="150">150</h6>
                                <p class="m-0px font-w-600">Project Completed</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="850" data-speed="850">850</h6>
                                <p class="m-0px font-w-600">Photo Capture</p>
                            </div>
                        </div>
                        <div class="col-6 col-lg-3">
                            <div class="count-data text-center">
                                <h6 class="count h2" data-to="190" data-speed="190">190</h6>
                                <p class="m-0px font-w-600">Telephonic Talk</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
