<?php
// Kode untuk memeriksa login dan mengatur sesi pengguna

// Periksa apakah username dan password sudah dikirimkan
if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if ($username === 'admin' && $password === 'password') {
        // Login berhasil
        // Set sesi pengguna
        session_start();
        $_SESSION['username'] = $username;
        
        // Redirect ke halaman utama setelah login sukses
        header("Location: home.php");
        exit();
    } else {
        // Login gagal
        echo "Username atau password salah.";
    }
}
?>