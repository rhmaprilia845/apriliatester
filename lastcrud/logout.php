<?php
// Pastikan file ini ada dan berfungsi

session_start();
session_destroy();
    header("Location: login.php"); // Pastikan file login.php ada

?>