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
                <li><a data-toggle="tab" href="#Peminjaman">Pengajuan Peminjaman</a></li>
                <li><a data-toggle="tab" href="#liPeminjaman">List Peminjaman</a></li>
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
                        <p>Selamat datang Mahasiswa</p>
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
                                        <th>Nama Ormawa</th>
                                        <th>Nama Kegiatan</th>
                                        <th>Tanggal Pelaksanaan</th>
                                        <th>Ruangan yang dipinjam</th>
                                        <th>Status Validasi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>BEM</td>
                                        <td>Pemilu BEM</td>
                                        <td>29 November 2017</td>
                                        <td>Ruang Aula</td>
                                        <td>Disetujui</td>
                                    </tr>
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
                                <form class="form-horizontal center-block media-middle" style="margin: 1px;" action="listpengajuan.php">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="inputEmail4">Nama</label>
                                            <input type="text" class="form-control" id="inputnama" placeholder="Nama Mahasiswa">
                                        </div>
                                        <div class="form-group col-lg-6" style="margin-left: 13px">
                                            <label for="inputPassword4">NIM</label>
                                            <input type="text" class="form-control" id="inputNIM" placeholder="NIM">
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-lg-12">
                                            <label for="inputnomor">Nomor Kegiatan</label>
                                            <input type="text" class="form-control" id="inputnomor" placeholder="Input Nomor Kegiatan">
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label for="inputormawa">Nama Ormawa</label>
                                                <select id="inputormawa" class="form-control">
                                                    <option selected>Pilih...</option>
                                                    <option>BEM</option>
                                                    <option>Himasif</option>
                                                    <option>UKM LAOS</option>
                                                    <option>UKMO Macho</option>
                                                    <option>UKM Balwana</option>
                                                    <option>UKMK Etalase</option>
                                                    <option>UKMP Binary</option>
                                                    <option>UKM Al Azhar</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-lg-6" style="margin-left: 13px">
                                                <label for="inputkegiatan">Keperluan Kegiatan</label>
                                                <input type="text" class="form-control" id="inputkegiatan" placeholder="Kegiatan">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-lg-6">
                                                <label for="inputtanggal">Tanggal Pelaksanaan</label>
                                                <input type="date" class="form-control" id="inputtanggal" placeholder="Tanggal Pelaksanaan">
                                            </div>
                                            <div class="form-group col-lg-6" style="margin-left: 13px">
                                                <label for="inputruangan">Ruangan yang dipinjam</label>
                                                <select id="inputruangan" class="form-control">
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
                                                    <input class="form-check-input" type="checkbox" style="margin-left: 15px">I Agree to continue
                                                </label>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
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
                                <form class="form-horizontal center-block media-middle" style="margin: 1px;" action="listpengajuan.php">
                                    <div class="form-row">
                                        <div class="form-group col-lg-6">
                                            <label for="inputEmail4">Nama Acara</label>
                                            <input type="text" class="form-control" id="inputacara" placeholder="Nama Acara">
                                        </div>
                                        <div class="form-group col-lg-6" style="margin-left: 13px">
                                            <label for="inputPassword4">Tanggal</label>
                                            <input type="date" class="form-control" id="inputtanggal" placeholder="Tanggal">
                                        </div>
                                        <div class="form-group col-lg-6">
                                            <label for="inputEmail4">Nama Barang</label>
                                            <input type="text" class="form-control" id="inputacara" placeholder="Nama Barang">
                                        </div>
                                        <div class="form-group col-lg-6" style="margin-left: 13px;">
                                            <label for="inputEmail4">Jumlah</label>
                                            <input type="number" class="form-control" id="inputjumlah" placeholder="Jumlah">
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
                                        <th>Acara</th>
                                        <th>Nama Barang</th>
                                        <th>Jumlah</th>
                                        <th>Status</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>Pemilu BEM</td>
                                        <td>Proyektor</td>
                                        <td>1</td>
                                        <td>Disetujui</td>
                                    </tr>
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
