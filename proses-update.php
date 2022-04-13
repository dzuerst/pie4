<?php

session_start();

include '_includes/db.php';
$db = PWE_DB::connect();

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$email = $_POST['email'];

$query = $db->prepare("UPDATE anggota SET nama = '$nama', npm = '$npm' WHERE email = '$email'");
    $update = $query->execute();

if ($update){

    // Update data pada session untuk ditampilkan kembali pada dashboard dan update
    // Data yang ditampilkan masih diambil dari session bukan db
    $_SESSION['nama'] = $nama;
    $_SESSION['npm'] = $npm;

    // alihkan kembali ke dasbor.php
    header('Location: '.'dasbor.php');
} else {
    echo '<script>alert("Perubahan gagal!");</script>';
    echo '<script>window.location.href = "daftar.php";</script>';
}
