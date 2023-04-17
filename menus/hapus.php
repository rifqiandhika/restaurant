<?php
include "koneksi.php";
$id = $_GET ['id'];
$query = mysqli_query($koneksi, "delete from transaksis where id = '$id'");
echo "<script>window.location = '?page=menus/transaksis';</script>";
?>