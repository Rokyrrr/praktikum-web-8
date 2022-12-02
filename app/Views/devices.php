<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand">Monitoring IoT</a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="/homes">Home<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/devices">Device</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Barang</a>
          </li>
        </ul>
      </div>  
    </nav>
    <h1 class="home-title">Daftar Barang</h1>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Gambar</th>
      <th scope="col">Device Name</th>
      <th scope="col">Merk</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Status</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td><img src="download.jpg" alt="Arduinoo" width="125" height="100"></td>
      <td>Arduino</td>
      <td>Genuino</td>
      <td>19</td>
      <td>1</td>
      <td>
        <div class="d-grid gap-2">
            <a href="/arduino"><button class="btn btn-primary" type="button">Details</button></a>
        </div>
    </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><img src="images.jpg" alt="pc" width="125" height="100"></td>
      <td>Komputer</td>
      <td>Samsung</td>
      <td>20</td>
      <td>1</td>
      <td>
        <div class="d-grid gap-2">
            <a href="/komputer"><button class="btn btn-primary" type="button">Details</button></a>
        </div>
      </td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td><img src="kenon.jpg" alt="proyektor" width="125" height="100"></td>
      <td>Projector</td>
      <td>Canon</td>
      <td>2</td>
      <td>0</td>
      <td>
        <div class="d-grid gap-2">
            <a href="/proyektor"><button class="btn btn-primary" type="button">Details</button></a>
        </div>
    </td>
    </tr>
  </tbody>
</body>
</html>