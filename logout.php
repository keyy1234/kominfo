<?php
session_start();
$_SESSION = []; // Mengosongkan atau mengatur ulang variabel $_SESSION
session_unset();
session_destroy();
header("Location: dashboard.php");
exit;
?>
