<?php
include './conn.php';

//menerima data dari form
$buku = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

// mysqli_query($koneksi,"INSERT INTO buku values('','$buku','$kategori','$penerbit','$harga','$diskon')");

mysqli_query($koneksi,"INSERT INTO buku(nmBuku,kategori,penerbit,harga,diskon) VALUES('$buku','$kategori','$penerbit','$harga','$diskon')");
header("Location: ./main.php");