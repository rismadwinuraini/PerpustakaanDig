<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Data Peminjaman</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
  <div class="container">
    <h1>Data Peminjaman Perpustakaan</h1>
    <form action="editpeminjam.php" method="POST">

    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>ID Buku</th>
          <th>Tanggal Peminjaman</th>
          <th>Tanggal Pengembalian</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>001</td>
          <td>1</td>
          <td>12-12-2019</td>
          <td>17-12-2019</td>
          <td class="aksi">
            <div class="d-grid mt-2">
            <button type="submit">Simpan</button>
    </form>

    <a href="datapeminjam.php">Kembali</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
