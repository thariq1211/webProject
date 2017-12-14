<?php
/**
 * Created by PhpStorm.
 * User: L
 * Date: 12/3/2017
 * Time: 10:22 PM
 */

include 'model.php';
$db = new model;

$aksi = $_GET['aksi'];
if ($aksi == "setuju"){
    $db->updateSetujui($_GET['id']);
    header("location:dashKasiePerkap.php");
}elseif ($aksi == "tolak"){
    $db->updateTolak($_GET['id']);
    header("location:dashKasiePerkap.php");
}

?>