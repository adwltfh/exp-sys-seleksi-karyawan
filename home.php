<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Home | Sistem Pakar Kelompok 10</title>
  <link rel="stylesheet" href="./asset/css/style.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body>
  <!-- Navbar -->
  <?php include('navbar.php'); ?>
  <!-- content -->
  <div class="container" id="content">
    <div id="Home">
      <div class="row">
        <div class="col-6">
          <h2>Selamat Datang di Sistem Seleksi untuk Perekrutan Karyawan</h2>
          <p>Silahkan klik tombol di bawah untuk memulai</p>
          <button class="btn btn-mulai">
            <strong><a class="mulai" href="./dash.php">Mulai</a></strong>
          </button>
        </div>
        <div class="col-6 img-karyawan"><img src="./asset/img/icon.png" alt="" /></div>
      </div>
    </div>
    <div id="deskripsi">
      <h2>Deskripsi Aplikasi</h2>
      <p style="text-align: justify">
        Penerimaan karyawan baru yang bertujuan untuk menambah jumlah tenaga kerja pada perusahaan dalam menjalankan bisnisnya merupakan sebuah prosedur yang dijalankan pada seluruh perusahaan termasuk PT. ABC. PT ABC adalah sebuah
        perusahaan yang menyediakan lapangan pekerjaan profesional di bidang teknologi dan informasi. Penerimaan karyawan harus dilakukan seleksi terlebih dahulu agar karyawan yang diterima adalah tenaga kerja yang lebih berkompeten dalam
        bidang yang akan dikerjakan sehingga tidak terjadi kesalahan penempatan karyawan. Aplikasi seleksi penerimaan karyawan ini dirancang dengan konsep user interface dengan menggunakan visual basic. Sistem pakar ini akan memberi
        arahan dimana setiap pelamar harus melalui empat tes. Tes pertama adalah screening dokumen. Tes kedua adalah ujian kemampuan (teori dan praktik). Tes ketiga adalah kepribadian. Terakhir, tes keempat adalah tes wawancara. Dalam
        pembuatan soal untuk setiap tes, seorang manajer telah menugaskan beberapa orang untuk membuat soal ujian kemampuan yang nantinya akan dimasukkan ke sistem oleh Tim IT. Penggunaaan sistem pakar penerimaan karyawan ini diharapkan
        dapat membantu mempermudah dalam pengambilan keputusan.
      </p>
    </div>
    <div id="tentangkami">
      <h2>Tentang Kami</h2>
      <p>
        Aplikasi ini dibuat untuk memenuhi tugas akhir semester mata kuliah sistem pakar yang dibuat oleh kelompok 10 Teknik Informatika Universitas sriwijaya. <br />
        Tahun Ajaran Genap 2021/2022<br />
        Nama-nama anggota antara lain: <br />
        1. Amalia Ananda Khalisa <br />
        2. Amelia Putri <br />
        3. Adawiyyah Latifah <br />
        4. M. Ilmi Akbari
      </p>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>