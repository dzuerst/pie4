<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pendafaran UKM XYZ</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-8 mx-auto">
                <form action="proses-daftar.php" method="POST">
                    <h1 class="h1">Form Pendaftaran UKM XYZ</h1>

                    <div class="mb-3">
                        <label for="input-nama" class="form-label">Nama:</label>
                        <input type="text" name="nama" id="input-nama" class="form-control" required="required">
                    </div>

                    <div class="mb-3">
                        <label for="input-npm" class="form-label">NPM:</label>
                        <input type="text" name="npm" id="input-npm" class="form-control" required="required">
                    </div>

                    <div class="mb-3">
                        <label for="input-email" class="form-label">Email:</label>
                        <input type="text" name="email" id="input-email" class="form-control" required="required">
                    </div>

                    <div class="mb-3">
                        <label for="input-password" class="form-label">Password:</label>
                        <input type="password" name="password" id="input-password" class="form-control" required="required">
                    </div>

                    <input type="submit" name="daftar" value="Daftar" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
</body>

</html>