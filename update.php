<?php
session_start();
require '_includes/db.php';

if (isset($_SESSION['is_login'])) :
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Ubah Profil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <form action="proses-update.php" method="POST">
                    <h1 class="h1">Ubah Profil</h1>

                    <input type="hidden" name="email" id="input-email" class="form-control" value=<?= $_SESSION['email'];?>>
                    <div class="mb-3">
                        <label for="input-npm" class="form-label">NPM:</label>
                        <input type="text" name="npm" id="input-email" class="form-control" required="required" value=<?= $_SESSION['npm'];?>>
                    </div>

                    <div class="mb-3">
                        <label for="input-nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" id="input-nama" class="form-control" required="required" value=<?= $_SESSION['nama'];?>>
                    </div>

                    <input type="submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>

</body>

</html>

<?php else : ?>
    <!-- karena belum login, arahkan ke halaman login -->
    <?php header('Location: login.php'); ?>
<?php endif; ?>