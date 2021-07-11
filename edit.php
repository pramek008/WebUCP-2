<!DOCTYPE html> 
<html lang="en"> 
<head> <!-- Required meta tags --> 
  <meta charset="utf-8"> 
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> 
  <title>Toko Buku Barokah</title> 
</head> 
<body>
  
      <!-- nav start -->
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Data Buku</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a class="nav-link active" aria-current="page" href="#">Tambah Buku</a>
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
            <p><a href="main.php">Home</a>/ Edit Buku / <?php echo $data['nmBuku'] ?></p>
            <div class="card">
                <div class="card-header">
                    <p class="fw-bold">Edit Buku</p>
                </div>
                <div class="card-body fw-bold">
                    <form method="post" action="update.php">
                        <div class="mb-3">
                            <input type="hidden" class="form-control" name="id" value="<?php echo $data['id']?>">
                        </div>
                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama Buku</label>
                            <input type="text" class="form-control" id="Nama" placeholder="Masukkan Nama Buku" name="nama" value="<?php echo $data['nmBuku']?>">
                        </div>                            
                        <div class="mb-3">
                            <label for="NIM" class="form-label">Kategori Buku</label>
                            <input type="text" class="form-control" id="Kategori" placeholder="Masukkan Kategori" name="kategori" value="<?php echo $data['kategori']?>">
                        </div>                            
                        <div class="mb-3">
                            <label for="Penerbit" class="form-label">Penerbit</label>                                
                            <input type="text" class="form-control" id="Penerbit" placeholder="Masukkan Penerbit Buku" name="penerbit" value="<?php echo $data['penerbit']?>">
                        </div>
                        <div class="mb-3">
                            <label for="Harga" class="form-label">Harga</label>                                
                            <input type="text" class="form-control" id="Harga" placeholder="Masukkan Harga Buku" name="harga" value="<?php echo $data['harga']?>">
                        </div>
                        <div class="mb-3">
                            <label for="Diskon" class="form-label">Discount</label>                                                            
                            <input type="text" class="form-control" id="Disc." placeholder="Masukkan Presentase Diskon (Misal 0.x)" name="diskon" value="<?php echo $data['diskon']?>">
                        </div>
                        <button type="submit" class="btn btn-primary" value="SIMPAN">Update</button>
                    </form>
                </div>
            </div>
        </div> 
    <?php
    }
    ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>