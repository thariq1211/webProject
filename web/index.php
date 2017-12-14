<?php 
session_start();
include 'koneksi.php';
include 'model.php';
$db = new model;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Selamat datang di sistem Peminjaman ruangan dan peralatan Program Ilkom</title>
    <script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
    <!-- meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta tag -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- css and other style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- css -->
</head>

<body style="background-color: #03C9A9" data-spy="scroll" data-target=".navbar" data-offset="50">
	<nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">LRMS</a>
            </div>
            <ul class="nav navbar-nav navbar-collapse navbar-right">
              <li class="active"><a href="#home ">Home</a></li>
              <li><a href="#layanan">Layanan</a></li>
              <li><a href="#kegiatan">Kegiatan</a></li>
              <!-- <li><a href="#ruangan">Ruangan</a></li> -->
              <li><a href="#sop">Standart Operasional Prosedur</a></li>
            </ul>
        </div>
    </nav>
    <div id="home" style="margin-top: 20px; background-image: url('images/bg-slider.jpg'); background-size: cover;">
        <div class="jumbotron text-center">
            <div class="container for-about">
                <h1>Sistem Informasi Peminjaman Ruangan dan Perlengkapan Program Ilmu Komputer</h1>
                <?php
                    if (!isset($_SESSION['userid'])){ ?>
                       <a href="login.php"><button type="button" class="btn btn-primary btn-lg"> Login <span class="glyphicon glyphicon-user"></span></button></a>
                    <?php }
                    elseif ($_SESSION['level']=="perkap") { ?>
                        <a href="dashPerkap.php"><button type="button" class="btn btn-primary btn-lg"> Perkap <span class="glyphicon glyphicon-user"></span></button></a>
                    <?php }
                    elseif ($_SESSION['level']=="mahasiswa") { ?>
                        <a href="dashMahasiswa.php"><button type="button" class="btn btn-primary btn-lg"> <?php echo $_SESSION['nama_mhs'];?> <span class="glyphicon glyphicon-user"></span></button></a>
                    <?php }
                    elseif ($_SESSION['level']=="kasieperkap") { ?>
                        <a href="dashKasiePerkap.php"><button type="button" class="btn btn-primary btn-lg"> Kasie Perkap <span class="glyphicon glyphicon-user"></span></button></a>
                    <?php }
                    elseif ($_SESSION['level']=="sekretaris2") { ?>
                        <a href="dashSekretaris2.php"><button type="button" class="btn btn-primary btn-lg"> Sekretaris 2 <span class="glyphicon glyphicon-user"></span></button></a>
                    <?php }
                    elseif ($_SESSION['level']=="satpam") { ?>
                        <a href="dashSatpam.php"><button type="button" class="btn btn-primary btn-lg"> Satpam <span class="glyphicon glyphicon-user"></span></button></a>
                    <?php }
                ?>
                
            </div>
        </div>
    </div>
    <div id="layanan" style="margin: 3.3%; margin-top: 20px">
        <div class="row">
            <span class="text-center"><h1>Layanan Kami</h1><br></span>
            <div class="col-lg-3"><h1 class="glyphicon glyphicon-home text-center center-block" style="margin-top: 30px"><h3 class="text-center">Peminjaman Ruangan</h3></h1></div>
            <div class="col-lg-3"><h1 class="glyphicon glyphicon-cog text-center center-block" style="margin-top: 30px"><h3 class="text-center">Peminjaman Peralatan</h3></h1></div>
            <div class="col-lg-3"><h1 class="glyphicon glyphicon-duplicate text-center center-block" style="margin-top: 30px"><h3 class="text-center">Penerbitan Ijin Kegiatan</h3></h1></div>
            <div class="col-lg-3"><h1 class="glyphicon glyphicon-calendar text-center center-block" style="margin-top: 30px"><h3 class="text-center">Pendaftaran Event</h3></h1></div>
        </div>
    </div>
    <div id="kegiatan" style="margin: 4.7%; margin-top: 3%">
        <div class="row">
            <span class="text-center" style="margin: 3.3%;margin-top: 5%"><h1>Upcoming Events</h1><br></span>
            <div class="col-lg-12" style="margin-top: 10px">
                <div class="well well-lg">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Kegiatan</th>
                            <th>Tanggal Pelaksanaan</th>
                            <th>Ruangan yang dipinjam</th>
                            <th>Status Validasi</th>
                        </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach ($db->tampilDataKegiatan() as $data) {
                            ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo strtoupper($data['nama_kegiatan']); ?></td>
                            <td><?php echo $data['tanggal']; ?></td>
                            <td><?php echo $data['ruangan']; ?></td>
                            <td>
                                    <?php
                                    if ($data['status']== "Disetujui" && $data['status2'] == "Disetujui"){
                                        echo "Disetujui";
                                    } elseif ($data['status2'] == "Belum Disetujui"){
                                        echo "Belum Disetujui";
                                    } else {
                                        echo "Ditolak";
                                    }
                                    ?>
                            </td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- <div id="ruangan" style="margin: 3.3%;margin-top: 5%">
        <span class="text-center"><h1>Galeri Ruangan PIK</h1><br></span>
        <div class="panel-group">
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading text-center text-capitalize">Ruang aula</div>
                    <div class="panel-body">Panel Content</div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="panel panel-default">
                    <div class="panel-heading text-center text-capitalize">Ruang 2</div>
                    <div class="panel-body">Panel Content</div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top: 30px">
                <div class="panel panel-default">
                    <div class="panel-heading text-center text-capitalize">ruang 3</div>
                    <div class="panel-body">Panel Content</div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top: 30px">
                <div class="panel panel-default">
                    <div class="panel-heading text-center text-capitalize">ruang 4</div>
                    <div class="panel-body">Panel Content</div>
                </div>
            </div>
            <div class="col-lg-4" style="margin-top: 30px">
                <div class="panel panel-default">
                    <div class="panel-heading text-center text-capitalize">ruang 5</div>
                    <div class="panel-body">Panel Content</div>
                </div>
            </div>
        </div>
        </div> -->

    <div id="sop" style="margin: 4.7%; margin-top: 3%">
        <div class="row">
            <span class="text-center" style="margin: 3.3%;margin-top: 5%"><h1>SOP Peminjaman</h1><br></span>
            <div class="col-lg-12" style="margin-top: 10px">
                <div class="panel panel-default">
                    <div class="panel-heading text-center">Tata Cara Peminjaman Ruangan dan Perlengkapan di Ilmu Komputer</div>
                    <div class="panel-body">
                        <ol type="1" class="list-group">
                            <li class="list-group-item">1. Mahasiswa Membuat Surat Peminjaman</li>
                            <li class="list-group-item">2. Validasi Surat oleh Kasubbag Umum & Perlengkapan </li>
                            <li class="list-group-item">3. Kasubbag Umum & Perlengkapan menyerahkan ke Wakil Dekan 2</li>
                            <li class="list-group-item">4. Validasi dilakukan oleh Wakil Dekan 2</li>
                            <li class="list-group-item">5. Surat Peminjaman tervalidasi diserahkan kepada petugas layanan peminjaman</li>
                            <li class="list-group-item">6. Mahasiswa mengisi daftar peralatan yang digunakan di dalam ruangan</li>
                            <li class="list-group-item">7. Petugas Layanan Peminjaman memvalidasi dan mengecek daftar peralatan di Ruangan terlampir</li>
                            <li class="list-group-item">8. Petugas Layanan Peminjaman membuat surat ijin kegiatan untuk diserahkan kepada bagian keamanan terkait</li>
                            <li class="list-group-item">9. Peralatan dan kunci ruangan diterima oleh Mahasiswa</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <footer>
        <div class="container">
            <div class="row vcenter">
                <div class="pull-right col-lg-4 col-xs-12">
                    <p><strong>Copyright &copy;2017 by M Thariq Nugroho / 152410101115</strong></p>
                </div>
            </div>
        </div>
    </footer>
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
</body>
</html>