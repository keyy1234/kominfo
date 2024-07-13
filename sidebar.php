<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .sidebar {
            width: 200px; /* Sesuaikan lebar sidebar */
            background-color: #f8f9fa; /* Warna latar belakang sidebar */
            padding: 20px; /* Padding di dalam sidebar */
            height: 100vh; /* Membuat sidebar penuh tinggi */
            margin-top: -70px; /* Geser ke atas */
            position: sticky; /* Membuat sidebar tetap di tempat */
            top: 0;
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

        .main-content h2 {
            margin-top: 20px; /* Adjust this value as needed */
            margin-left: 300px; /* Geser ke kanan */
            transform: translateY(-10px); /* Geser ke atas */
        }

        .container-fluid {
            display: flex;
        }

        .col-md-10 {
            margin-left: 220px; /* Sesuaikan dengan lebar sidebar */
            padding: 20px;
        }

        .main-content {
            padding: 20px;
        }

        .img-small {
            max-width: 200px;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <div class="list-group-custom">
            <a href="dashboard.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'dashboard.php' ? 'active' : ''; ?>">Dashboard</a>
            <a href="profil.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'profil.php' ? 'active' : ''; ?>">Profile</a>
            <a href="member.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'member.php' ? 'active' : ''; ?>">Klien Kami</a>
            <a href="events.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'events.php' ? 'active' : ''; ?>">Events</a>
            <a href="gallery.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'gallery.php' ? 'active' : ''; ?>">Gallery</a>
            <a href="contact.php" class="<?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>">Contact</a>
            <!-- <a href="logout.php">logout</a> -->
        </div>
    </div>
</body>
</html>
