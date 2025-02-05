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
                <button class="btn btn-primary" type="submit" a href="editpeminjam.php">Edit</a></button>
                <button class="btn btn-primary" type="submit">Hapus</a></button>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
