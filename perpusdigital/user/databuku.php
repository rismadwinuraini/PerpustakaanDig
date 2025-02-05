<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Data Buku</title>
</head>
<link rel="stylesheet" href="styles.css">
<body>
  <div class="container">
    <h1>Data Buku Perpustakaan</h1>
    <a href="tambahbuku.php">Tambah Buku</a>
    </div>
    <table>
      <thead>
        <tr>
          <th>ID</th>
          <th>Judul</th>
          <th>Penulis</th>
          <th>Penerbit</th>
          <th>Tahun Terbit</th>
          <th>Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Sejarah</td>
          <td>Susi</td>
          <td>Susi</td>
          <td>2020</td>
          <td class="aksi">
            <div class="d-grid mt-2">
              <button class="btn btn-primary" type="submit" a href="editbuku.php">Edit</a></button>
              <button class="btn btn-primary" type="submit">Hapus</a></button>
            </td>
        </tr>
      </tbody>
    </table>
  </div>
</body>
</html>
