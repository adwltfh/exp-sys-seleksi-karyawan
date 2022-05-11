<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
session_start();
if (empty($_SESSION['namauser']) and empty($_SESSION['passuser'])) {
  echo "<link href='../asset/css/style.css' rel='stylesheet' type='text/css'><center>Untuk mengakses modul, Anda harus login <br>";
} else {
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sistem Pakar Kelompok 10</title>
    <!-- Link CSS -->
    <link rel="stylesheet" href="../asset/css/style.css" />
    <!-- Link Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    </link>

  </head>

  <body>
    <!-- Navbar -->
    <?php include('../navbar.php'); ?>
    <h2>Selamat Datang di Sistem Penerimaan Karyawan</h2>
    <form action="" onsubmit="return false">
      <!-- First Row -->
      <div class="row">
        <div class="col-4">
          <div class="col-auto">
            <label class="col-form-label">Hasil Nilai Ujian Teori</label>
          </div>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="teori" class="form-control" name="teori" placeholder="Masukkan nilai dari rentang 0-100!" />
          </div>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <select id="CF-row1" class="form-select" id="inputGroupSelect01" aria-label="Example select with button addon" placeholder="Small" aria-describedby="inputGroup-sizing-lg">

            </select>
            <!-- <input type="text" id="CF-row1" class="form-control" name="CF-row1" placeholder="Masukkan Nilai Kepastian" /> -->
          </div>
        </div>
      </div>
      <!-- Second Row -->
      <div class="row">
        <div class="col-4">
          <div class="col-auto">
            <label class="col-form-label">Hasil Nilai Ujian Praktik</label>
          </div>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="praktik" class="form-control" name="praktik" placeholder="Masukkan nilai dari rentang 0-100!" />
          </div>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="CF-row2" class="form-control" name="CF-row2" placeholder="Masukkan Nilai Kepastian" />
          </div>
        </div>
      </div>
      <!-- Third Row -->
      <div class="row">
        <div class="col-4">
          <div class="col-auto">
            <label class="col-form-label">Hasil Nilai Ujian Kepribadian</label>
          </div>
        </div>
        <div class="col-3">
          <select id="kepribadian" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" placeholder="Small" aria-describedby="inputGroup-sizing-lg">
            <option id="selected" value="1">Baik</option>
            <option value="2">Sedang</option>
            <option value="3">Kurang</option>
          </select>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="CF-row3" class="form-control" name="CF-row3" placeholder="Masukkan Nilai Kepastian" />
          </div>
        </div>
      </div>
      <!-- Forth Row -->
      <div class="row">
        <div class="col-4">
          <div class="col-auto">
            <label class="col-form-label">Apakah usia Anda memenuhi kriteria yang diinginkan?</label>
          </div>
        </div>
        <div class="col-3">
          <select id="usia" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" placeholder="Small" aria-describedby="inputGroup-sizing-lg">
            <option id="selected" value="1">Memenuhi</option>
            <option value="2">Tidak Memenuhi</option>
          </select>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="CF-row4" class="form-control" name="CF-row4" placeholder="Masukkan Nilai Kepastian" />
          </div>
        </div>
      </div>
      <!-- Fifth Row -->
      <div class="row">
        <div class="col-4">
          <div class="col-auto">
            <label class="col-form-label">Apakah domisili Anda memenuhi kriteria yang diinginkan?</label>
          </div>
        </div>
        <div class="col-3">
          <select id="domisili" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" placeholder="Small" aria-describedby="inputGroup-sizing-lg">
            <option id="selected" value="1">Memenuhi</option>
            <option value="2">Tidak Memenuhi</option>
          </select>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="CF-row5" class="form-control" name="CF-row5" placeholder="Masukkan Nilai Kepastian" />
          </div>
        </div>
      </div>
      <!-- Sixth Row -->
      <div class="row">
        <div class="col-4">
          <div class="col-auto">
            <label class="col-form-label">Apakah ipk Anda memenuhi kriteria yang diinginkan?</label>
          </div>
        </div>
        <div class="col-3">
          <select id="ipk" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" placeholder="Small" aria-describedby="inputGroup-sizing-lg">
            <option id="selected" value="1">Memenuhi</option>
            <option value="2">Tidak Memenuhi</option>
          </select>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="CF-row6" class="form-control" name="CF-row6" placeholder="Masukkan Nilai Kepastian" />
          </div>
        </div>
      </div>
      <!-- Seventh Row -->
      <div class="row">
        <div class="col-4">
          <div class="col-auto">
            <label class="col-form-label">Apakah pengalam kerja Anda memenuhi kriteria yang diinginkan?</label>
          </div>
        </div>
        <div class="col-3">
          <select id="pk" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" placeholder="Small" aria-describedby="inputGroup-sizing-lg">
            <option id="selected" value="1">Memenuhi</option>
            <option value="2">Tidak Memenuhi</option>
          </select>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="CF-row7" class="form-control" name="CF-row7" placeholder="Masukkan Nilai Kepastian" />
          </div>
        </div>
      </div>
      <!-- Eight Row -->
      <div class="row">
        <div class="col-4">
          <div class="col-auto">
            <label class="col-form-label">Hasil Nilai Ujian Wawancara Anda</label>
          </div>
        </div>
        <div class="col-3">
          <select id="wawancara" class="form-select" id="inputGroupSelect04" aria-label="Example select with button addon" placeholder="Small" aria-describedby="inputGroup-sizing-lg">
            <option id="selected" value="1">Baik</option>
            <option value="2">Sedang</option>
            <option value="3">Kurang</option>
          </select>
        </div>
        <div class="col-3">
          <div class="col-auto">
            <input type="text" id="CF-row8" class="form-control" name="CF-row8" placeholder="Masukkan Nilai Kepastian" />
          </div>
        </div>
      </div>
      <div class="button-submit">
        <button class="btn btn-outline-primary button-search" type="reset"><strong>Cancel</strong></button>
        <button id="btn-submit" class="btn btn-primary button-search" type="submit"><strong>Save</strong></button>
      </div>
    </form>
    <!-- Link JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../asset//js/index.js"></script>
    <script type="module" src="../asset//data/cf.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script src="https: //unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

  </body>

  </html>
<?php } ?>