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
    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="https://www.linkpicture.com/q/icon-rekrut.png" alt="" width="30" height="30" class="d-inline-block align-text-top" />
                Rekrutmen
            </a>
        </div>
        <div class="logout">
            <?php
            if ($url == $localhost_url . 'admin/dash.php?module=home') { ?>
                <a href="../logout.php" class="btn">Logout</a>
            <?php    } else { ?>
                <a href="logout.php" class="btn">Logout</a>
            <?php    }
            ?>
        </div>
    </nav>
</header>