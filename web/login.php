<?php
session_start();
include 'koneksi.php';
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
    <!-- css -->
    <title>Login</title>
</head>
<body style="height: 75%; background-image: url('images/bg.jpg');background-repeat: no-repeat; background-size: cover;">
<div class="panel panel-success" style="margin: 13%; margin-left: 25%;margin-right:25%;opacity: 0.8">
    <div class="panel-heading"><h1 class="text-center">Log In</h1></div>
    <div class="panel-body">
        <form class="form-horizontal center-block media-middle" style="display: table; margin-top: 20px;" action="" method="post">
            <div class="form-group">

                <label for="inputuser" class="col-lg-2 control-label">User</label>
                <div class="col-lg-10">
                    <input type="text" class="form-control" id="inputuser" name="inputuser" placeholder="Username" required="">
                </div>
            </div>
            <div class="form-group">
                <label for="inputpassword" class="col-lg-2 control-label">Pass</label>
                <div class="col-lg-10">
                    <input type="password" class="form-control" id="inputpassword" name="inputpassword" placeholder="Password" required="">
                </div>
            </div>
            <div class="form-group">
                <div class="col-lg-offset-2 col-lg-4">
                    <button type="submit" name="login" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span> Log In</button>
                </div>
                <div class="col-lg-6">
                    <span>Belum punya akun?<a href="register.php">Register</a></span>
                </div>
            </div>
        </form>
        <div class="form-group">
            <div class="col-lg-offset-4 col-lg-12">
<?php 
        if (isset($_POST['login'])){
        $user =  $_POST['inputuser'];
        $psw = $_POST['inputpassword'];
        $data_user = mysqli_query($conn,"SELECT * FROM users WHERE username = '$user' AND password = '$psw'");
        $r = mysqli_fetch_array($data_user);
        $username = $r['username'];
        $password = $r['password'];
        $level = $r['level'];
        $_SESSION['id_user'] = $r['id_user'];
        $_SESSION['nama_mhs'] = $r['nama'];
        $_SESSION['NIM'] = $r['nim'];
        $_SESSION['ormawa'] = $r['nama_ormawa'];
        if ($user == $username && $psw == $password){
            $_SESSION['level'] = $level;
            $_SESSION['userid'] = $user;
            if ($level == "perkap"){
                header("location:dashPerkap.php");
            } elseif ($level == "kasieperkap"){
                header("location:dashKasiePerkap.php");
            } elseif ($level == "sekretaris2"){
                header("location:dashSekretaris2.php");
            } elseif($level == "mahasiswa"){
                header("location:dashMahasiswa.php");
            } elseif($level == "satpam"){
                header("location:dashSatpam.php");
            } else {
                die("Maaf anda tidak punya hak akses!!");
            }
        } else {
            die("Maaf Username atau Password anda salah!!");
        }
    }
?>
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
</body>
</html>