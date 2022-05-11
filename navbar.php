<?php
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
    $url = "https://";
else
    $url = "http://";
// Append the host(domain name, ip) to the URL.
$url .= $_SERVER['HTTP_HOST'];

// Append the requested resource location to the URL
$url .= $_SERVER['REQUEST_URI'];
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
            if ($url == 'http://localhost:8080/sispak/seleksi_karyawan/admin/dash.php?module=home') { ?>
                <a href="../logout.php" class="btn">Logout</a>
            <?php    } else { ?>
                <a href="logout.php" class="btn">Logout</a>
            <?php    }
            ?>
        </div>
    </nav>
</header>