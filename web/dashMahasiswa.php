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
if ($_SESSION['level']!="mahasiswa"){
    die("Anda bukan Mahasiswa");
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
                <li><a data-toggle="tab" href="#Peminjaman">Pengajuan Peminjaman</a></li>
                <li><a data-toggle="tab" href="#liPeminjaman">List Pengajuan</a></li>
                <li><a data-toggle="tab" href="#PinjamPerkap">Peminjaman Perlengkapan</a></li>
                <li><a data-toggle="tab" href="#liPerkap">List Peminjaman</a></li>
            </ul><br>
        </div>
        <br>
        <div class="tab-content">
            <div id="dash" class="tab-pane fade in active">
                <div class="col-sm-9">
                    <div class="well">
                        <h4>Dashboard</h4>
                        <p>Selamat datang <?php echo $_SESSION['nama_mhs']; ?></p>
                    </div>
                </div>
            </div>
            <div id="liPeminjaman" class="tab-pane fade">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="well">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>ID Kegiatan</th>
                                        <th>Nama Ormawa</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Tanggal Pelaksanaan</th>
                                        <th>Ruangan yang dipinjam</th>
                                        <th>Status Validasi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                         <?php 
                                            $no=1;
                                            $NIM = $_SESSION['NIM'];
                                            foreach ($db->tampilDataKegiatanID($NIM) as $data) {
                                           
                                         ?>
                                    <tr>
                                        <td><?php echo $no++; ?>.</td>
                                        <td><?php echo $data['id_kegiatan']; ?></td>
                                        <td><?php echo strtoupper($data['nama_ormawa']); ?></td>
                                        <td><?php echo strtoupper($data['nama_kegiatan']); ?></td>
                                        <td><?php echo $data['tanggal']; ?></td>
                                        <td><?php echo $data['ruangan']; ?></td>
                                        <td><?php echo $data['status']; ?></td>
                                    </tr>
                                    <?php  } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="Peminjaman" class="tab-pane fade">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="well">
                                <form class="form-horizontal center-block media-middle" style="margin: 1px;" action="" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="inputEmail4">Nama</label>
                                            <input type="text" class="form-control" disabled id="inputnama" name="inputnama" placeholder="Nama Mahasiswa" value="<?php echo $_SESSION['nama_mhs'] ?>">
                                        </div>
                                        <div class="form-group col-lg-6" style="margin-left: 13px">
                                            <label for="inputPassword4">NIM</label>
                                            <input type="text" class="form-control" disabled id="inputNIM" name="inputNIM" placeholder="NIM" value="<?php echo $_SESSION['NIM'] ?>">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <label for="inputnomor">Nomor Kegiatan</label>
                                            <input type="text" class="form-control" id="inputnomor" name="inputnomor" placeholder="Input Nomor Kegiatan">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label for="inputormawa">Nama Ormawa</label>
                                                <select id="inputormawa" disabled class="form-control" name="inputormawa">
                                                    <option selected>Pilih...</option>
                                                    <option <?php if (($_SESSION['ormawa']=="BEM")) {
                                                        echo "selected";
                                                    } ?>>BEM</option>
                                                    <option <?php if (($_SESSION['ormawa']=="Himasif")) {
                                                        echo "selected";
                                                    } ?>>Himasif</option>
                                                    <option <?php if (($_SESSION['ormawa']=="UKM LAOS")) {
                                                        echo "selected";
                                                    } ?>>UKM LAOS</option>
                                                    <option <?php if (($_SESSION['ormawa']=="UKMO Macho")) {
                                                        echo "selected";
                                                    } ?>>UKMO Macho</option>
                                                    <option <?php if (($_SESSION['ormawa']=="UKM Balwana")) {
                                                        echo "selected";
                                                    } ?>>UKM Balwana</option>
                                                    <option <?php if (($_SESSION['ormawa']=="UKMK Etalase")) {
                                                        echo "selected";
                                                    } ?>>UKMK Etalase</option>
                                                    <option <?php if (($_SESSION['ormawa']=="UKMP Binary")) {
                                                        echo "selected";
                                                    } ?>>UKMP Binary</option>
                                                    <option <?php if (($_SESSION['ormawa']=="UKM Al Azhar")) {
                                                        echo "selected";
                                                    } ?>>UKM Al Azhar</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-6" style="margin-left: 13px">
                                                <label for="inputkegiatan">Keperluan Kegiatan</label>
                                                <input type="text" class="form-control" id="inputkegiatan" name="inputkegiatan" placeholder="Kegiatan">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label for="inputtanggal">Tanggal Pelaksanaan</label>
                                                <input type="date" class="form-control" id="inputtanggal" name="inputtanggal" placeholder="Tanggal Pelaksanaan">
                                            </div>
                                            <div class="form-group col-lg-6" style="margin-left: 13px">
                                                <label for="inputruangan">Ruangan yang dipinjam</label>
                                                <select id="inputruangan" name="inputruangan" class="form-control">
                                                    <option selected>Pilih Ruangan...</option>
                                                    <option>Ruang Aula</option>
                                                    <option>Ruang 2</option>
                                                    <option>Ruang 3</option>
                                                    <option>Ruang 4</option>
                                                    <option>Ruang 5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <label class="form-check-label">
                                                    <input class="form-check-input" type="checkbox" name="status" value="Belum Disetujui" style="margin-left: 15px"> I Agree to continue
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                                </form>
                <?php 
                    include 'koneksi.php';
                    if (isset($_POST['submit'])) {
                        $addKegiatan = mysqli_query($conn, "INSERT INTO `kegiatan` (`id_user`,`no_kegiatan`,`nama_kegiatan`, `tanggal`, `ruangan`, `status`) VALUES ('".$_SESSION['id_user']."','".$_POST['inputnomor']."','".$_POST['inputkegiatan']."', '".$_POST['inputtanggal']."', '".$_POST['inputruangan']."', '".$_POST['status']."')");
                        if ($addKegiatan) {
                            echo "berhasil tambah kegiatan";
                        } else {
                            echo "gagal, silahkan coba lagi";
                        }
                    }
                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div id="PinjamPerkap" class="tab-pane fade">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="well">
                                <form class="form-horizontal center-block media-middle" style="margin: 1px;" action="mahasiswa.php?aksi=tambah" method="post">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="inputormawa">ID Kegiatan</label>
                                            <select id="inputkegiatan" name="inputkegiatan" class="form-control">
                                                <option selected>Pilih...</option>
                                                <?php 
                                                    $NIM = $_SESSION['NIM'];
                                                    include 'koneksi.php';
                                                    $sql = mysqli_query($conn, "SELECT * FROM users u JOIN kegiatan k ON u.id_user=k.id_user WHERE u.nim = '$NIM' AND k.status2 = 'Disetujui'");
                                                    while ($data = mysqli_fetch_array($sql)) {
                                                ?>
                                                <option><?php echo $data['id_kegiatan']; ?></option>
                                                <?php  }?>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-6" style="margin-left: 13px">
                                            <label for="inputEmail4">Nama Barang</label>
                                            <input type="text" class="form-control" id="inputbarang" name="inputbarang" placeholder="Nama Barang">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="inputEmail4">Jumlah</label>
                                            <input type="number" class="form-control" id="inputjumlah" name="inputjumlah" placeholder="Jumlah">
                                        </div>
                                        <div class="form-group col-lg-6" style="margin-left: 13px">
                                            <label for="inputEmail4">Keterangan</label>
                                            <input type="text" class="form-control" id="inputketerangan" name="inputketerangan" placeholder="Input Keterangan (Baik, Rusak, Setengah Rusak)">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div id="liPerkap" class="tab-pane fade">
                <div class="col-sm-9">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="well">
                                <table class="table table-condensed">
                                    <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Acara</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Keterangan</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                     <?php 
                                        $no = 1;
                                        $id = $_SESSION['id_user'];
                                        include 'koneksi.php';
                                        $sql = mysqli_query($conn, "SELECT * FROM kegiatan k join perlengkapan p on k.id_kegiatan=p.id_kegiatan WHERE p.id_user = '$id'");
                                        while ($data = mysqli_fetch_array($sql)) {
                                     ?>                              
                                    <tr>
                                        <td><?php echo $no++; ?></td>
                                        <td><?php echo strtoupper($data['nama_kegiatan']) ?></td>
                                        <td><?php echo $data['nama_barang'] ?></td>
                                        <td><?php echo $data['jumlah'] ?></td>
                                        <td><?php echo $data['keterangan'] ?></td>
                                        <td><?php echo $data['status'] ?></td>
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

</body>
</html>
