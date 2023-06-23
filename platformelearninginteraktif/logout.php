<?php
// Hapus sesi pengguna saat logout
session_start();
session_destroy();

// Redirect ke halaman login setelah logout sukses
header("Location: index.html");
exit();
?>