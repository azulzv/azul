<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Meta Tags Start -->
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
    background: rgba(255, 255, 255, .4);
  }
  </style>
</head>

<body>

  <!-- Praktikum Pemrograman PHP 04 -->
  <div class="container mt-5" style="width: 500px;">
    <div class="card rounded">
      <div class="card-header text-center fw-bold">Form Pembuatan KTM</div>
      <div class="card-body text-black my-1 mx-3">
        <form action="05_exam.php" method="post">
          <div class="mb-3">
            <label for="nama" class="form-label">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="masukkan nama lengkap" required>
          </div>
          <div class="row g-3">
            <div class="mb-3 col-md-5">
              <label for="nim" class="form-label">NIM</label>
              <input type="text" class="form-control" name="nim" id="nim" placeholder="masukkan nim" required>
            </div>
            <div class="mb-3 col-md-7">
              <label for="jurusan" class="form-label">Jurusan</label>
              <select class="form-select" id="jurusan" name="jurusan" required>
                <option selected disabled>Pilih</option>
                <option value="Teknik Informatika">Teknik Informatika</option>
                <option value="Pariwisata">Pariwisata</option>
                <option value="Ilmu Komunikasi">Ilmu Komunikasi</option>
              </select>
            </div>
          </div>
          <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" name="alamat" id="alamat" placeholder="masukkan alamat" required>
          </div>
          <div class="mb-3 form-check">
            <input type="checkbox" class="form-check-input" id="ingat">
            <label class="form-check-label" for="ingat">Ingat Saya</label>
          </div>
          <button type="reset" class="btn btn-danger btn-sm me-1"><i class="bi bi-arrow-clockwise"></i></button>
          <button type=" submit" class="btn btn-primary btn-sm">Proses<i
              class="bi bi-box-arrow-in-right ms-2"></i></button>
        </form>
      </div>
    </div>
  </div>
  <!-- Praktikum 04 Ends -->

  <script src="../bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>

</html>