<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
$conn = mysqli_connect("localhost","root","", "db_seleksi_karyawan") or die(mysqli_error());;
mysqli_select_db($conn, "db_seleksi_karyawan");
?>