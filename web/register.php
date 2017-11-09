<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- meta tag -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- meta tag -->
    <link rel="shortcut icon" type="image/png" href="images/favicon.png">
    <!-- css and other style -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- css -->
    <title>Mulai Peminjaman</title>
</head>
<body style="height: 75%; background-image: url('images/bg.jpg');background-repeat: no-repeat; background-size: cover;">
<div class="panel panel-info" style="margin: 50px; margin-left: 20%;margin-right:20%;opacity: 0.8">
    <div class="panel-heading"><h1 class="text-center" style="color:#5e5e5e">Daftar Akun</h1></div>
    <div class="panel-body"><form class="form-horizontal center-block media-middle" style="margin-top: 4%;margin: 30px; margin-left: 70px;margin-right: 70px" action="login.php">
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
                <div class="form-group col-lg-6">
                    <label for="inputkegiatan">Username</label>
                    <input type="text" class="form-control" id="inputusername" placeholder="Username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-6" style="margin-left: 13px">
                    <label for="inputtanggal">Password</label>
                    <input type="password" class="form-control" id="inputpassword" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" style="margin-left: 15px"> I Agree to continue
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form></div>
</div>
</body>
</html>