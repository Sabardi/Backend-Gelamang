<?php
include "koneksi.php";
$database = new database();

$aksi = $_GET["aksi"];
if($aksi == "tambah"){
    $database->create_artikel($_POST['Judul'],$_POST['tanggal-post'],$_POST['artikel']);
    header('location:index');
    // include "all"
}

?>