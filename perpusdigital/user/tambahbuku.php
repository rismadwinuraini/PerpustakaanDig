

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
  <div class="form-container">
    <div class="content">
        <div class="row">
            <div class="col">
                <h1>Tambah Buku</h1>
                <form action="../user/databuku.php" method="POST">
                    <label for="judul">Judul:</label>
                    <input type="text" name="judul" id="judul" required>
                    <label for="penulis">Penulis:</label>
                    <input type="text" name="penulis" id="penulis" required>
                    <label for="penerbit">Penerbit:</label>
                    <input type="text" name="penerbit" id="penerbit" required>
                    <label for="tahun_terbit">Tahun Terbit:</label>
                    <input type="number" name="tahun_terbit" id="tahun_terbit" required>
                    <button type="submit">Tambah</button>
                </form>
                <a href="databuku.php">Kembali</a>
            </body>
            </html>
