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
        <a class="navbar-brand" href="#">LRMS</a>
    </div>
    <ul class="nav navbar-nav navbar-collapse navbar-right">
        <li class="active"><a href="index.php ">Logout <span class="glyphicon glyphicon-off"></span></a></li>
    </ul>
</nav>
<div class="container-fluid">
    <div class="row content">
        <div class="col-sm-3 sidenav hidden-xs">
<!--            <h2><span class="glyphicon glyphicon-home center-block" style="margin-left: 4%"></span></h2>-->
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a data-toggle="tab" href="#dash">Dashboard</a></li>
                <li><a data-toggle="tab" href="#ruangan">Data Ruangan</a></li>
                <li><a data-toggle="tab" href="#peralatan">Data Peralatan</a></li>
                <li><a data-toggle="tab" href="#validasi">Validasi Perlengkapan</a></li>
                <li><a data-toggle="tab" href="#ijin">Ijin Kegiatan</a></li>
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
    <div id="ruangan" class="tab-pane fade">
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
    </div>
    <div id="peralatan" class="tab-pane fade">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-12">
                    <div class="well">
                        <table class="table table-condensed">
                            <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Spesifikasi / Merk</th>
                                <th>Jumlah</th>
                                <th>Keterangan</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Sound System</td>
                                <td>Yamaha</td>
                                <td>2 Set</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Mic Wireless</td>
                                <td>Shure</td>
                                <td>2 Set</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Mic Kabel</td>
                                <td>Shure</td>
                                <td>6 Biji</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Mixer</td>
                                <td>Yamaha</td>
                                <td>3 biji</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Kabel Roll</td>
                                <td> - </td>
                                <td>6 Biji</td>
                                <td>Baik</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Proyektor</td>
                                <td>Epson</td>
                                <td>8 Biji</td>
                                <td>Baik</td>
                            </tr>
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
                                <th>Tanggal Pelaksanaan</th>
                                <th>Ruangan yang dipinjam</th>
                                <th>Status Validasi</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>Pemilu BEM</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                                <td>Disetujui</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>HTC</td>
                                <td>2 Desember 2017</td>
                                <td>Ruang Aula</td>
                                <td>Belum Disetujui</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Pertemuan Rutin</td>
                                <td>31 November 2017</td>
                                <td>Ruang 2</td>
                                <td>Disetujui</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>Pertemuan Rutin</td>
                                <td>30 November 2017</td>
                                <td>Ruang Aula</td>
                                <td>Disetujui</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>Pertemuan Rutin</td>
                                <td>30 November 2017</td>
                                <td>Ruang 2</td>
                                <td>Belum Disetujui</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>Pertemuan Rutin</td>
                                <td>30 November 2017</td>
                                <td>Ruang 5</td>
                                <td>Disetujui</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>Pertemuan Rutin</td>
                                <td>30 November 2017</td>
                                <td>Ruang 4</td>
                                <td>Belum Disetujui</td>
                            </tr>
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
                                <th>No Surat</th>
                                <th>Tanggal</th>
                                <th>Nama Kegiatan</th>
                                <th>Waktu</th>
                                <th>Ijin Tempat Nomor</th>
                                <th>Peserta</th>
                                <th>Penanggung Jawab</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>15 September 2017</td>
                                <td>Pelatihan Laravel</td>
                                <td>18.00-21.00</td>
                                <td>1537/UN25.1.15/LK/2017</td>
                                <td>Anggota UKM</td>
                                <td>Ketua UKM</td>
                            </tr>
                            <tr>
                                <td>16/BEM/d/PSSI/IX/2017</td>
                                <td>15 November 2017</td>
                                <td>Pemilu BEM</td>
                                <td>15.00-18.00</td>
                                <td>1567/UN25.1.17/LK/2017</td>
                                <td>Mahasiswa Ilkom</td>
                                <td>Panitia VOC</td>
                            </tr>
                            <tr>
                                <td>16/HIMASIF/d/PSSI/IX/2017</td>
                                <td>25 November 2017</td>
                                <td>HTC</td>
                                <td>16.00-20.00</td>
                                <td>1569/UN25.1.17/LK/2017</td>
                                <td>Mahasiswa Ilkom</td>
                                <td>Panitia HTC</td>
                            </tr>
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
