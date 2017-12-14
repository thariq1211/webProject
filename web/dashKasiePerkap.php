<?php
session_start();
include 'koneksi.php';
include 'model.php';
$db = new model;

//cek apakah user sudah login
if (!isset($_SESSION['userid'])){
    header("location:login.php");
}

//cek level user
if ($_SESSION['level']!="kasieperkap"){
    die("Anda bukan Kepala Perlengkapan");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {height: 550px}

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {height: auto;}
        }
    </style>
</head>
<body>
<nav class="navbar navbar-default" style="margin-bottom: 1px">
    <div class="navbar-header">
        <a class="navbar-brand" href="index.php">LRMS</a>
    </div>
    <ul class="nav navbar-nav navbar-collapse navbar-right">
        <li class="active"><a href="logout.php">Logout <span class="glyphicon glyphicon-off"></span></a></li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
<!--            <h2><span class="glyphicon glyphicon-home center-block" style="margin-left: 4%"></span></h2>-->
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="tab" href="#dash">Dashboard</a></li>
                <li><a data-toggle="tab" href="#valPeminjaman">Validasi Peminjaman</a></li>
                <li><a data-toggle="tab" href="#datapeminjam">Data Peminjam</a></li>
            </ul><br>
        </div>
        <br>
<div class="tab-content">
    <div id="dash" class="tab-pane fade in active">
        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
                <p>Selamat datang Kasie Bag Perlengkapan</p>
            </div>
        </div>
    </div>
    <div id="valPeminjaman" class="tab-pane fade">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>No Kegiatan</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Pelaksanaan</th>
                                <th>Ruangan yang dipinjam</th>
                                <th>Status</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                                $no = 1;
                                foreach ($db->tampilDataKegiatan() as $data){
                            ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo strtoupper($data['no_kegiatan']) ;?></td>
                                <td><?php echo strtoupper($data['nama_kegiatan']);?></td>
                                <td><?php echo $data['tanggal'];?></td>
                                <td><?php echo $data['ruangan'];?></td>
                                <td><?php echo $data['status'];?></td>
                                <td style="text-align: center">
                                    <a href="ksiePerkap.php?id=<?php echo $data['id_kegiatan']?>&aksi=setuju" class="btn btn-primary btn-xs" <?php if ($data['status']!="Belum Disetujui"){echo "disabled";} ?>>
                                        <span class="glyphicon glyphicon-ok"></span> Setujui</a>
                                    <a href="ksiePerkap.php?id=<?php echo $data['id_kegiatan']?>&aksi=tolak" class="btn btn-danger btn-xs" <?php if ($data['status']!="Belum Disetujui"){echo "disabled";} ?>>
                                        <span class="glyphicon glyphicon-remove"></span> Tolak</a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="datapeminjam" class="tab-pane fade">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>NIM</th>
                                <th>No Kegiatan</th>
                                <th>Nama Ormawa</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Pelaksanaan</th>
                                <th>Ruangan yang dipinjam</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($db->tampilDataPeminjam() as $data) { 
                                 ?>
                            <tr>
                                <td><?php echo $no++; ?>.</td>
                                <td><?php echo $data['nama']; ?></td>
                                <td><?php echo $data['nim']; ?></td>
                                <td><?php echo strtoupper($data['no_kegiatan']); ?></td>
                                <td><?php echo strtoupper($data['nama_ormawa']); ?></td>
                                <td><?php echo strtoupper($data['nama_kegiatan']); ?></td>
                                <td><?php echo $data['tanggal']; ?></td>
                                <td><?php echo $data['ruangan']; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
</div>

</body>
</html>
