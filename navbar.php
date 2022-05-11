<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
$url .= $_SERVER['HTTP_HOST'];
$url .= $_SERVER['REQUEST_URI'];

$localhost_url = 'http://localhost:8080/sispak/seleksi_karyawan/';
?>

<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.linkpicture.com/q/icon-rekrut.png" alt="" width="30" height="30" class="d-inline-block align-text-top" />
                Rekrutmen
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#Home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#deskripsi">Deskripsi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentangkami">Tetang Kami</a>
                    </li>
                    <li class="nav-item">
                        <?php
                        if ($url == $localhost_url . 'admin/dash.php?module=home') { ?>
                            <a class="nav-link" href="../logout.php" class="btn">Logout</a>
                        <?php    } else { ?>
                            <a class="nav-link" href="logout.php" class="btn">Logout</a>
                        <?php    }
                        ?>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>