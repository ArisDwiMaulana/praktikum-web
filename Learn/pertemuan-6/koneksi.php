<?php
$conn = new mysqli("db", "root", "", "db_mahasiswa");

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
} else {
    echo "<h3>Koneksi Berhasil! 🎉</h3>";
    echo "Aplikasi PHP berhasil terhubung ke MySQL di dalam jaringan Docker.";
}
?>
