<?php
include 'conn.php';

$id = $_GET['id'];

mysqli_query($koneksi, "DELETE FROM buku WHERE id = '$id'");

header("Location: main.php");