<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Petugas</title>
<div class="container pt-5">
    <div class="row justify-content-center">
        <div class="col-4">
            <div class="card">
                <div class="card-header">
                    Login Petugas
                </div>
                <card class="body">
                    <form action="index.php?aksi=loginsiswa" method="post">
                        <div class="form-group">
                            <input type="text" name="nisn" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="text" name="nis" class="form-control">
                        </div>
                        <button name="login" class="btn btn-primary" id="login">Login</button>
                    </form>
</div>
        </div>
    </div>
</div>
</head>
</html>