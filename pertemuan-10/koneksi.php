<?php
$koneksi = mysqli_connect("localhost", "root", "Zanuaraldi0101", "prakwebdb");

if (mysqli_connect_errno()) {
    echo "Koneksi database gagal: " . mysqli_connect_error();
    exit();
}
?>