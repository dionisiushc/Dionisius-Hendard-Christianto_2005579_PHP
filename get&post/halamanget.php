<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Halaman Utama GET</title>
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">Home</a>
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
          <h1 class="display-4">FORM BIDANG TANGKAP</h1>
          <p class="lead">FORM PENDAFTARAN NELAYAN CALON PENANGKAP BENIH BENING LOBSTER (PUERELUS)</p>
        </div>
      </div>

      <div class="container">
          <div class="row">
              <div class="col text-center">
                  <h1>SOP Penangkapan Benih Lobster</h1>
              </div>
          </div>

          <div class="row">
            <div class="col">
                <p> Prosedur :</p>
                <p>A.	Penangkapan Benih Bening Lobster (Puerulus)</p>

    <p>1.	Nelayan  mendaftar sebagai nelayan penangkap benih bening lobster.</p>
    <p>2.	Nelayan melalui KUB Nelayan penangkap benih bening lobster (yang telah dibentuk berdasarkan inisiatif sendiri atau difasilitasi Dinas KP serta telah terdaftar) menyampaikan permohonan kuota penangkapan benih bening lobster kepada Dinas KP Provinsi Lampung.</p>
    <p>3.	Nelayan melengkapi Dokumen Kapal, Perizinan Penangkapan Ikan (BPKP), dan dokumen lainnya yang dianggap perlu.</p>
    <p>4.	Nelayan Menginstal aplikasi e-lobster pada HP.</p>
    <p>5.	Nelayan menyampaikan data ke aplikasi  e-Lobster.</p>
    <p>6.	Membuat SPT Tim Verifikasi Lapangan dari Kepala Dinas.</p>
      </div>
    

      <div class="row">
            <div class="col text-center">
              <br>
              <br>
              <br>
                <p>Sehubungan dengan rencana penangkapan Benih Bening Lobster (puerelus), bersama ini kami mengajukan permohonan untuk mendaftar sebagai Nelayan penangkap Benih Bening Lobster (puerelus) dengan data sebagai berikut:</p>
            </div>
      </div>

<form action="reportget.php" method = "GET">
  <br>
  <br>
  <div class="col text-left">
    <h1>Silahkan Isi Form Berikut ini :</h1>
    <br>
 
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama</label>
      <input type="text" name="nama" id="disabledTextInput" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">NIK</label>
      <input type="text" name="nik" id="disabledTextInput" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Alamat</label>
      <input type="text" name="alamat" id="disabledTextInput" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Jumlah Kapal (JIka ada)</label>
      <input type="text" name="jumlahkapal" id="disabledTextInput" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Rencana Penempatan Alat Penangkapan Ikan(API)</label>
      <input type="text" name="rencanaapi" id="disabledTextInput" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Jumlah API</label>
      <input type="text" name="jumlahapi" id="disabledTextInput" class="form-control">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nomer HP</label>
      <input type="text" name="nomerhp" id="disabledTextInput" class="form-control" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Alamat email</label>
      <input type="text" name="email" id="disabledTextInput" class="form-control" >
    </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Kirim</button>
  </div>
</form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>