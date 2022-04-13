<?php
include '_includes/db.php';
$db = PWE_DB::connect();

$nama = $_POST['nama'];
$npm = $_POST['npm'];
$email = $_POST['email'];
$password = md5($_POST['password']);

$query = $db->prepare('INSERT INTO `anggota` (`id`, `nama`, `npm`, `email`, `password`)
    VALUES (NULL, ?, ?, ?, ?)');
    $insert = $query->execute([$nama, $npm, $email, $password]);

if ($insert){
    header('Location: '.'berhasil-daftar.php');
} else {
    echo '<script>alert("Pendaftaran gagal!");</script>';
    echo '<script>window.location.href = "daftar.php";</script>';
}
