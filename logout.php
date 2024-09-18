<?php
// Mulai session
session_start();

// Hapus semua data sesi (logout)
session_destroy();

// Redirect pengguna kembali ke halaman utama
header("Location: ../index.php");
exit;
?>
