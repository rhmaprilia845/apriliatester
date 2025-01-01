<?php
// Pastikan file ini ada dan berfungsi

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php"); // Pastikan file login.php ada
    exit(); // Selalu tambahkan exit setelah header
}
?>