<?php
// Periksa apakah pengguna telah login
session_start();
if (!isset($_SESSION['username'])) {
    // Jika pengguna belum login, redirect ke halaman login
    header("Location: index.html");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Platform E-learning Interaktif - Halaman Utama</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <h1>Selamat datang di halaman utama, <?php echo $_SESSION['username']; ?>!</h1>
  
  <h2>Pelajaran:</h2>
  <ul>
    <li><a href="lesson1.php">Pelajaran 1</a></li>
    <li><a href="lesson2.php">Pelajaran 2</a></li>
  </ul>
  
  <a href="logout.php">Logout</a>
  
  <script src="script.js"></script>
</body>
</html>