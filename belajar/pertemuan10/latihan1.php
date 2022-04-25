<?php
//koneksi database & pilih database
$conn = mysqli_connect('localhost', 'root', '', 'bj_01');
//query isi table mahasiswa
$data = mysqli_query($conn, "SELECT * FROM mahasiswa");

//ubah dalam array
//mysqli_fetch_row($data); // array numerik
//mysqli_fetch_assoc($data); // array associative
//mysqli_fetch_array($data) //array keduanya
$rows = [];
while ($baris = mysqli_fetch_assoc($data)) {
  $rows[] = $baris;
}


//tampung ke variabel mahasiswa
$mahasiswa = $rows;

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Mahasiswa</title>
</head>

<body>
  <h3>Daftar Mahasiswa</h3>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>#</th>
      <th>Gambar</th>
      <th>Nim</th>
      <th>Nama</th>
      <th>Email</th>
      <th>Jurusan</th>
      <th>Aksi</th>
    </tr>
    <?php $no = 1;
    foreach ($mahasiswa as $mhs) : ?>
      <tr>
        <td><?= $no++; ?></td>
        <td><img src="img/<?= $mhs["gambar"]; ?>" alt="gambar"></td>
        <td><?= $mhs["nim"]; ?></td>
        <td><?= $mhs["nama"]; ?></td>
        <td><?= $mhs["email"]; ?></td>
        <td><?= $mhs["jurusan"]; ?></td>
        <td>
          <a href="">edit</a> | <a href="">hapus</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>

</html>