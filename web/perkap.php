<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 12/3/2017
 * Time: 9:13 PM
 */
include 'model.php';
$db = new model;

$aksi = $_GET['aksi'];
if ($aksi == "setuju"){
    $db->updateSetujuip($_GET['id']);
    header("location:dashPerkap.php");
}elseif ($aksi == "tolak"){
    $db->updateTolakp($_GET['id']);
    header("location:dashPerkap.php");
}elseif ($aksi == "tambah") {
    $db->tambahIjinKegiatan($_POST['inputid'], $_POST['inputnosurat'], $_POST['inputtanggal'], $_POST['inputwktawal'], $_POST['inputwktakhir'], $_POST['inputnoijin'], $_POST['inputpeserta'], $_POST['inputpj']);
	header("location:dashPerkap.php");
}
?>