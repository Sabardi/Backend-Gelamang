<?php
include "koneksi.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->create_artikel($_POST['Judul'],$_POST['tanggal-post'],$_POST['artikel']);
    header('location:index');
    // include "all"
    $database->afload_gambar($_POST['url_gambar1'],$_POST['url_gambar2'],$_POST['deskripsi']);
    header('location:index');
    // include "all"
}

?>