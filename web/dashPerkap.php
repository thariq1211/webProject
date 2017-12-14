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
if ($_SESSION['level']!="perkap"){
    die("Anda bukan petugas perlengkapan");
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
                <!-- <li><a data-toggle="tab" href="#ruangan">Data Ruangan</a></li> -->
                <li><a data-toggle="tab" href="#peralatan">Data Peralatan</a></li>
                <li><a data-toggle="tab" href="#validasi">Validasi Perlengkapan</a></li>
                <li><a data-toggle="tab" href="#ijin">Ijin Kegiatan</a></li>
                <li><a data-toggle="tab" href="#Detailijin">Detail Ijin Kegiatan</a></li>
            </ul><br>
        </div>
        <br>
<div class="tab-content">
    <div id="dash" class="tab-pane fade in active">
        <div class="col-sm-9">
            <div class="well">
                <h4>Dashboard</h4>
                <p>Selamat datang Petugas Perlengkapan</p>
            </div>
        </div>
    </div>
    <!-- <div id="ruangan" class="tab-pane fade">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-4">
                    <div class="well">
                        <h4>R Aula</h4>
                        <p>1 Million</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h4>Ruang 2</h4>
                        <p>100 Million</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="well">
                        <h4>Ruang 3</h4>
                        <p>10 Million</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <h4>Ruang 4</h4>
                        <p>30%</p>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="well">
                        <h4>Ruang 5</h4>
                        <p>30%</p>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <div id="peralatan" class="tab-pane fade">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>ID Kegiatan</th>
                                <th>Nama Kegiatan</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($db->tampilDataPerlengkapan() as $data) { 
                                 ?>
                            <tr>
                                <td><?php echo $no++; ?>.</td>
                                <td><?php echo $data['id_kegiatan']; ?></td>
                                <td><?php echo $data['nama_kegiatan']; ?></td>
                                <td><?php echo $data['nama_barang']; ?></td>
                                <td><?php echo $data['jumlah']; ?></td>
                                <td><?php echo $data['keterangan']; ?></td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="validasi" class="tab-pane fade">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Kegiatan</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $no = 1;
                                    foreach ($db->tampilDataPerlengkapan() as $data) {
                                 ?>
                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $data['nama_kegiatan']; ?></td>
                                <td><?php echo $data['nama_barang']; ?></td>
                                <td><?php echo $data['jumlah']; ?></td>
                                <td><?php echo $data['keterangan']; ?></td>
                                <td><?php echo $data['status']; ?></td>
                                <td style="text-align: center">
                                    <a href="perkap.php?id=<?php echo $data['id_perkap'];?>&aksi=setuju" class="btn btn-primary btn-xs" <?php if ($data['status']!="Belum Disetujui"){echo "disabled";} ?>>
                                        <span class="glyphicon glyphicon-ok"></span> Setujui</a>
                                    <a href="perkap.php?id=<?php echo $data['id_perkap'];?>&aksi=tolak" class="btn btn-danger btn-xs" <?php if ($data['status']!="Belum Disetujui"){echo "disabled";} ?>>
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
    <div id="ijin" class="tab-pane fade">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">

                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>No Kegiatan</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal</th>
                                <th>Ruangan</th>
                                <th style="text-align: center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    foreach ($db->tampilDataKegiatanFIX() as $data) { 
                                 ?>
                            <tr>
                                <td><?php echo strtoupper($data['no_kegiatan']); ?></td>
                                <td><?php echo $data['nama_kegiatan']; ?></td>
                                <td><?php echo $data['tanggal']; ?></td>
                                <td><?php echo $data['ruangan']; ?></td>
                                <td style="text-align: center">
                                    <a href="#" class="edit-record btn btn-primary btn-xs" data-id="<?php echo $data['id_kegiatan']?>"><span class="glyphicon glyphicon-plus"></span> Add Ijin</a>
                                </td>
                            </tr>
                            <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                        <h4 class="modal-title">Tambah Data Ijin Kegiatan</h4>
                    </div>
                    <div class="modal-body">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="Detailijin" class="tab-pane fade">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>No Surat</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Pelaksanaan</th>
                                <th>Waktu Start</th>
                                <th>Waktu Finish</th>
                                <th>Ijin Tempat Nomor</th>
                                <th>Peserta</th>
                                <th>Penanggung Jawab</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($db->tampilIjin() as $data) {
                                ?>
                                <tr>
                                    <td><?php echo strtoupper($data['no_surat']) ; ?></td>
                                    <td><?php echo strtoupper($data['nama_kegiatan']); ?></td>
                                    <td><?php echo $data['tanggal']; ?></td>
                                    <td><?php echo $data['waktu_awal']; ?></td>
                                    <td><?php echo $data['waktu_akhir']; ?></td>
                                    <td><?php echo strtoupper($data['ijin_tempat_nomor']); ?></td>
                                    <td><?php echo $data['peserta']; ?></td>
                                    <td><?php echo $data['penanggung_jawab']; ?></td>
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
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script language="javascript">
        $(function(){
            $(document).on('click','.edit-record',function(e){
                e.preventDefault();
                $("#myModal").modal('show');
                $.post('form_tambah_ijin.php',
                    {id:$(this).attr('data-id')},
                    function(html){
                        $(".modal-body").html(html);
                    }
                );
            });
        });
    </script>
</body>
</html>
