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
    $db->updateSetujui2($_GET['id']);
    header("location:dashSekretaris2.php");
}elseif ($aksi == "tolak"){
    $db->updateTolak2($_GET['id']);
    header("location:dashSekretaris2.php");
}
?>