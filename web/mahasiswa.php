<?php 
session_start();
include 'model.php';
$db = new model;

$aksi = $_GET['aksi'];
if ($aksi == "tambah"){
    $db->tambahPerkap($_POST['inputkegiatan'], $_SESSION['id_user'], $_POST['inputbarang'], $_POST['inputjumlah'], $_POST['inputketerangan']);
    header("location:dashMahasiswa.php");
} else {
    header("location:dashMahasiswa.php");
}
 ?>