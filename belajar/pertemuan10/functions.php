<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'bj_01');
}

function query($query)
{
  $conn = koneksi();
  $data = mysqli_query($conn, $query);
  //jika hasilnya cuman 1 data
  if (mysqli_num_rows($data) == 1) {
    return mysqli_fetch_assoc($data);
  }
  $rows = [];
  while ($baris = mysqli_fetch_assoc($data)) {
    $rows[] = $baris;
  }

  return $rows;
}
