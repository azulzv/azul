<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Bootstrap 5 CSS -->
  <link rel="stylesheet" href="../bootstrap-5/css/bootstrap.min.css">

  <!-- Bootstrap 5 Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

  <!-- Title Website -->
  <title>Website Pembuat KTM Sederhana</title>

  <!-- CSS Custome -->
  <style>
  * {
    transition: all .3s;
  }

  body {
    font-family: 'Poppins';
    background: #ecf0f3;
  }

  .card {
    background: #ecf0f3;
    box-shadow: 4px 4px 10px #cbced1,
      -4px -4px 10px #fff;
    border-color: #fff;
  }

  .form-control,
  .form-select {
    background: rgba(255, 255, 255, .3);
  }

  .card-title {
    margin-left: 25px;
  }

  .card-title i:hover {
    color: #40DFEF;
    cursor: pointer;
  }

  .container .qr-popup {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, .6);
    z-index: 10;
    display: none;
  }

  .container .qr-popup span {
    position: absolute;
    top: 20px;
    right: 30px;
    font-size: 30px;
    color: #fff;
    cursor: pointer;
    z-index: 20;
  }

  .container .qr-popup span:hover {
    color: #D82148;
  }

  .container .qr-popup img {
    width: 160px;
    height: 160px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }

  @media (max-width: 978px) {
    .container .qr-popup img {
      width: 250px;
      height: 250px;
    }
  }

  @media (max-width: 780px) {
    .card-title {
      margin: 12px 0 0 0;
    }
  }
  </style>
</head>

<body>
  <!-- PHP Starts -->
  <?php 
  
  $nama = $_POST['nama'];
  $nim = $_POST['nim'];
  $jur = $_POST['jurusan'];
  $alamat = $_POST['alamat'];
  
  ?>
  <!-- PHP Ends -->

  <!-- Praktikum Pemrograman PHP 03 -->
  <div class="container mt-5" style="width: 550px;">
    <div class="card rounded">
      <div class="card-header text-center d-flex justify-content-center pt-2 pb-0 bg-info bg-gradient">
        <img src=" ../img/USM.png" alt="logo-usm" style="height: 35px;">
        <h3 class="ms-2">UNIVERSITAS SEMARANG</h3>
      </div>
      <div class="row g-0 py-3 px-4">
        <div class="col-md-4">
          <img src="../img/User.png" class="img rounded-3" alt="image-profile" style="width: 160px; height: 160px;">
          <img src="../img/barcode.png" class="m-3" alt="barcode" style="width: 125px;">
        </div>
        <div class="card-title col-md-6">
          <h6 class="text-left fw-bold">KARTU IDENTITAS / KTM<i class="code bi bi-qr-code-scan ms-3"
              data-bs-toggle="tooltip" data-bs-placement="bottom" title="Scan QR Saya"></i>
          </h6>
          <hr>
          <p class="card-text">
            <?= $nama ?>
            <?= $nim ?><br>
            <?= $jur ?><br>
            <?= $alamat ?>
          </p>
          <a href="04_exam.php" class="btn btn-sm btn-danger position-absolute bottom-0 end-0 m-3"><i
              class="bi bi-box-arrow-left me-2"></i>back</a>
        </div>
      </div>
    </div>
    <div class="qr-popup">
      <span><i class="bi bi-x"></i></span>
      <img src="../img/qr-popup.png" alt="qr-code" class="img img-thumbnail">
      <p class="text-white position-absolute bottom-0 start-50 translate-middle-x fs-6 text-center text-opacity-50">
        &copy; Copyright by Adya Abdu Azizul Hakim. All right reserved.</p>
    </div>
  </div>
  <!-- Praktikum 03 Ends -->

  <!-- Javascript Bootstrap 5 -->
  <script src="../bootstrap-5/js/bootstrap.bundle.min.js"></script>

  <!-- Javascript Custome -->
  <script>
  const x = document.querySelector('.code');
  const y = document.querySelector('span i');

  x.onclick = function() {
    document.querySelector('.qr-popup').style.display = "block";
  }

  y.onclick = function() {
    document.querySelector('.qr-popup').style.display = "none";
  }
  </script>
</body>

</html>