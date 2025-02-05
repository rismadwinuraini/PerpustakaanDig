<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Buku</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="editbuku.php" method="POST">
        <input type="hidden" name="id" value="<?php ['id']; ?>">

        <label for="id">ID:</label>
        <input type="text" name="id" id="id" value="<?php  ['id']; ?>" required>

        <label for="judul">Judul:</label>
        <input type="text" name="judul" id="judul" value="<?php  ['judul']; ?>" required>

        <label for="penulis">Penulis:</label>
        <input type="text" name="penulis" id="penulis" value="<?php  ['penulis']; ?>" required>

        <label for="penerbit">Penerbit:</label>
        <input type="text" name="penerbit" id="penerbit" value="<?php  ['penerbit']; ?>" required>

        <label for="tahun_terbit">Tahun Terbit:</label>
        <input type="number" name="tahun_terbit" id="tahun_terbit" value="<?php  ['tahun_terbit']; ?>" required>

        <button type="submit">Simpan</button>
    </form>

    <a href="index.php">Kembali</a>
</body>
</html>
