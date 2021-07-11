<?php
    //memanggil file config.php
include 'conn.php';
    //menangkap id yang di kirimkan melalui button detail
$id = $_GET['id'];
    //melakukan quey untuk mendapatkan data buku berdasarkan $id
$buku = mysqli_query($koneksi, "SELECT * FROM buku where id='$id'");
    
while ($data = mysqli_fetch_assoc($buku)) {
?> 
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <title><?php echo $data['nmBuku'] ?></title>
    </head>
    <body onload="window.print();">
        <div class="container mt-5">
            <p class="fw-bold">Invoice Pembelian</p>
            <p>Nama Buku  : <?php echo $data['nmBuku'] ?></p>
            <p>Kategori   : <?php echo $data['kategori'] ?></p>
            <p>Penerbit   : <?php echo $data['penerbit'] ?></p>
            <p>Harga Buku : <?php echo $data['harga'] ?></p>
            <p>Diskon     : <?php 
                        $harga = $data['harga']; 
                        $diskon = $data['diskon'];
                        echo $nilai = ($diskon/100)*$harga        
                        ?>
                        (<?php
                        echo $diskon = $data['diskon'];
                        ?> %) </p>
            
            <p>Harga Akhir Buku : Rp. <?php echo $data['harga'];?> -
                        Rp. <?php $harga = $data['harga']; 
                        $diskon = $data['diskon'];
                        echo $nilai = ($diskon/100)*$harga        
                        ?> = Rp. <?php echo ($harga-$nilai)?>
            </p>
        </div>
        
    <?php
    }
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </body>
</html>