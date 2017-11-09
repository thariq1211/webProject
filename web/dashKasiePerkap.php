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
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1.</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                                <td>Disetujui</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>16/BEM/d/PSSI/IX/2017</td>
                                <td>Rasio</td>
                                <td>30 November 2017</td>
                                <td>Ruang Aula</td>
                                <td>Disetujui</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>16/HImasif/d/PSSI/IX/2017</td>
                                <td>Pertemuan Rutin</td>
                                <td>31 November 2017</td>
                                <td>Ruang 5</td>
                                <td>Belum Disetujui</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                                <td>Disetujui</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                                <td>Disetujui</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                                <td>Disetujui</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                                <td>Tidak Disetujui</td>
                                <td>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-ok"></span></button>
                                    <button type="button" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-remove"></span></button>
                                </td>
                            </tr>
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
                            <tr>
                                <td>1.</td>
                                <td>M Thariq Nugroho</td>
                                <td>152410101115</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>UKM LAOS</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                            </tr>
                            <tr>
                                <td>2.</td>
                                <td>Dimas Setyo</td>
                                <td>152410101126</td>
                                <td>16/BEM/d/PSSI/IX/2017</td>
                                <td>BEM</td>
                                <td>Rasio</td>
                                <td>30 November 2017</td>
                                <td>Ruang Aula</td>
                            </tr>
                            <tr>
                                <td>3.</td>
                                <td>Gilang Hidayatullah</td>
                                <td>152410101129</td>
                                <td>16/HImasif/d/PSSI/IX/2017</td>
                                <td>HIMASIF</td>
                                <td>Pertemuan Rutin</td>
                                <td>31 November 2017</td>
                                <td>Ruang 5</td>
                            </tr>
                            <tr>
                                <td>4.</td>
                                <td>M Thariq Nugroho</td>
                                <td>152410101115</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>UKM LAOS</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                            </tr>
                            <tr>
                                <td>5.</td>
                                <td>M Thariq Nugroho</td>
                                <td>152410101115</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>UKM LAOS</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                            </tr>
                            <tr>
                                <td>6.</td>
                                <td>M Thariq Nugroho</td>
                                <td>152410101115</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>UKM LAOS</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
                            </tr>
                            <tr>
                                <td>7.</td>
                                <td>M Thariq Nugroho</td>
                                <td>152410101115</td>
                                <td>16/UKM-LAOS/d/PSSI/IX/2017</td>
                                <td>UKM LAOS</td>
                                <td>Pertemuan Rutin</td>
                                <td>29 November 2017</td>
                                <td>Ruang Aula</td>
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
