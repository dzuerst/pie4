//proses-login.php
<?php
session_start();
include '_includes/db.php';

if (isset($_POST['login'])) {
    $db = PWE_DB::connect();

    $email = $_POST['email'];
    $password = $_POST['password'];

    $password = md5($password);

    $query = $db->prepare('SELECT * FROM `anggota` WHERE `email` = ? AND `password` = ?');
    $query->execute([$email, $password]);

    if ($query->rowCount() > 0) {
        $data = $query->fetch(PDO::FETCH_ASSOC);

        $_SESSION['is_login'] = true;
        $_SESSION['id'] = $data['id'];
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['npm'] = $data['npm'];
        $_SESSION['email'] = $data['email'];

        header('Location: dasbor.php');
    } else {
        echo 'Email atau password salah';
    }
}