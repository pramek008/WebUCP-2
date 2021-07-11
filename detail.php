<!DOCTYPE html> 
<html lang="en"> 
<head> <!-- Required meta tags --> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
  <title>Toko Buku Barokah</title> 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head> 
<body>
  
      <!-- nav start -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Data Buku Barokah Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Detail Buku</a>
                    <!-- <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a> -->
                </div>
                <div class="col-md-3">
                  <a href="logout.php" class="pull-right">
                  <button class="btn btn-warning">Logout</button>
                  </a>
                </div>
            </div>
        </div>
    </nav>

    <?php
    //memanggil file config.php
    include 'conn.php';
    //menangkap id yang di kirimkan melalui button detail
    $id = $_GET['id'];
    //melakukan quey untuk mendapatkan data buku berdasarkan $id
    $buku = mysqli_query($koneksi, "SELECT * FROM buku where id='$id'");
    
    while ($data = mysqli_fetch_assoc($buku)) {
    ?> 
        <div class="container mt-5">
            <p><a href="main.php">Home</a>/ Detail Buku / <?php echo $data['nmBuku'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Detail Buku</p>
                </div>
                <div class="card-body fw-bold">
                    <p>Nama Buku  : <?php echo $data['nmBuku'] ?></p>
                    <p>Kategori   : <?php echo $data['kategori'] ?></p>
                    <p>Penerbit   : <?php echo $data['penerbit'] ?></p>
                    <p>Harga Buku : <?php echo $data['harga'] ?></p>
                    <p>Diskon     : <?php echo $data['diskon'] ?> %</p>
                    <a href="print.php?id=<?php echo $data['id']; ?>" class="btn btn-primary btn-sm text-white">CETAK</a>
                </div>
            </div>
        </div>        
    <?php
    }
    ?>
</body>