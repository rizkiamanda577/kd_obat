<?php

$kdobat = $_POST['kodeobat'];
$namobat = $_POST['namaobat'];

$koneksi = mysqli_connect('localhost', 'root', '', 'obat_apotek');
$sql = "INSERT INTO obat (kode_obat, nama_obat) VALUES ('$kdobat', '$namobat');
$q = mysqli_query($koneksi, $sql);