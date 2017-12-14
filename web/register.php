<?php 
session_start();
?>
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
    <script type="text/javascript">
        function run(){
            var cb = document.getElementById("submit");

            if(document.getElementById("cekbox").checked == true){
                cb.disabled = false;
            }else{
                cb.disabled = true;
            }

        }
    </script>
    <!-- css -->
    <title>Mulai Mendaftar</title>
</head>
<body style="height: 75%; background-image: url('images/bg.jpg');background-repeat: no-repeat; background-size: cover;">
<div class="panel panel-info" style="margin: 50px; margin-left: 20%;margin-right:20%;opacity: 0.8">
    <div class="panel-heading"><h1 class="text-center" style="color:#5e5e5e">Daftar Akun</h1></div>
    <div class="panel-body">
        <?php 
            include 'koneksi.php';
            if (isset($_POST['submit'])) {
                $daftar = mysqli_query($conn, "INSERT INTO `users` (`id_user`, `nama`, `nim`, `nama_ormawa`, `username`, `password`, `level`) VALUES ('', '".$_POST['inputnama']."', '".$_POST['inputNIM']."', '".$_POST['inputormawa']."', '".$_POST['inputusername']."', '".$_POST['inputpassword']."', 'mahasiswa')");
                if ($daftar) {
                    echo "berhasil daftar";
                    header("location:login.php");
                } else {
                    echo "gagal daftar";
                }
            }
        ?>
        <form class="form-horizontal center-block media-middle" style="margin-top: 4%;margin: 30px; margin-left: 70px;margin-right: 70px" action="" method="post">
            <div class="form-row">
                <div class="form-group col-lg-6">
                    <label for="inputEmail4">Nama</label>
                    <input type="text" class="form-control" id="inputnama" name="inputnama" required="" placeholder="Nama Mahasiswa">
                </div>
                <div class="form-group col-lg-6" style="margin-left: 13px">
                    <label for="inputPassword4">NIM</label>
                    <input type="text" class="form-control" id="inputNIM" name="inputNIM" required="" placeholder="NIM">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-12">
                    <label for="inputormawa">Nama Ormawa</label>
                    <select id="inputormawa" name="inputormawa" class="form-control">
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
                    <input type="text" class="form-control" id="inputusername" name="inputusername" required="" placeholder="Username">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-lg-6" style="margin-left: 13px">
                    <label for="inputtanggal">Password</label>
                    <input type="password" class="form-control" id="inputpassword" name="inputpassword" required="" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <label class="form-check-label">
                        <input class="form-check-input" type="checkbox" id="cekbox" onclick="run();" style="margin-left: 15px"> I Agree to continue
                    </label>
                </div>
            </div>
            <button type="submit" id="submit" name="submit" disabled class="btn btn-primary">Submit</button>
        </form></div>
</div>
</body>
</html>