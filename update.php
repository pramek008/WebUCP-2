<?php
include './conn.php';

$id = $_POST['id'];
$buku = $_POST['nama'];
$kategori = $_POST['kategori'];
$penerbit = $_POST['penerbit'];
$harga = $_POST['harga'];
$diskon = $_POST['diskon'];

mysqli_query($koneksi, "UPDATE buku SET nmBuku='$buku', kategori='$kategori',penerbit='$penerbit',harga='$harga',diskon='$diskon' WHERE id='$id'");

header("Location: main.php");