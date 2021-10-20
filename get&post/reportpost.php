<?php
    $nama = $_POST{'nama'};
    $nik = $_POST{'nik'};
    $alamat = $_POST{'alamat'};
    $jumlahkapal = $_POST{'jumlahkapal'};
    $rencanaapi = $_POST{'rencanaapi'};
    $jumlahapi = $_POST{'jumlahapi'};
    $nomerhp = $_POST{'nomerhp'};
    $email = $_POST{'email'};
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Halaman Report POST</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">Report</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link active" href="#">Form <span class="sr-only">(current)</span></a>
            <a class="nav-link" href="#">Info</a>
          </div>
        </div>
    </div>
      </nav>

      <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
          <h1 class="display-4">LAPORAN BIDANG TANGKAP</h1>
          <p class="lead">LAPORAN PENDAFTARAN NELAYAN CALON PENANGKAP BENIH BENING LOBSTER (PUERELUS)</p>
        </div>
      </div>


      <form action="report.php" method = "POST">
  <br>
  <br>
  <div class="col text-left">
    <h1>Berikut Data-Data nya :</h1>
    <br>
 
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama : </label>
      <td><?php echo $nama; ?></td>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NIK : </label>
      <td><?php echo $nik; ?></td>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Alamat : </label>
      <td><?php echo $alamat; ?></td>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Jumlah Kapal : </label>
      <td><?php echo $jumlahkapal; ?></td>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Rencana Penempatan Alat Ikan (API) : </label>
      <td><?php echo $rencanaapi; ?></td>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Jumlah API: </label>
      <td><?php echo $jumlahapi; ?></td>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nomer HP : </label>
      <td><?php echo $nomerhp; ?></td>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Alamat Email : </label>
      <td><?php echo $email; ?></td>
    </div>
  </div>
</form>
