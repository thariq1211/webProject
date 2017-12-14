<?php 
/**
* Author by M Thariq Nugroho
*/

class model 
{	
	function tampilDataKegiatan()
    {
		include 'koneksi.php';
		$data = mysqli_query($conn, "SELECT * FROM `kegiatan`");
		while($d = mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}

    function tampilDataKegiatans2()
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM `kegiatan` WHERE status = 'Disetujui' ");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tampilDataKegiatanFIX()
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM `kegiatan` WHERE status = 'Disetujui' AND status2 = 'Disetujui'");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

	function tampilDataKegiatanID($nim)
    {
		include 'koneksi.php';
		$data = mysqli_query($conn, "SELECT * FROM users u JOIN kegiatan k ON u.id_user=k.id_user WHERE u.nim = '$nim'");
		while($d = mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}

    function tampilDataKegiatan_ID($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM kegiatan WHERE id_kegiatan = '$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

	function tampilDataPeminjam()
    {
		include 'koneksi.php';
		$data = mysqli_query($conn, "SELECT * FROM kegiatan k JOIN users u on k.id_user=u.id_user");
		while($d = mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}

	function tampilDataPerlengkapan()
    {
		include 'koneksi.php';
		$data = mysqli_query($conn, "SELECT * FROM kegiatan k join perlengkapan p on k.id_kegiatan=p.id_kegiatan");
		while($d = mysqli_fetch_array($data)){
			$hasil[]=$d;
		}
		return $hasil;
	}

    function tampilDataPerlengkapanID($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM kegiatan k join perlengkapan p on k.id_kegiatan=p.id_kegiatan WHERE p.id_user = '$id'");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tampilIjin ()
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM perijinan p JOIN kegiatan k on p.id_kegiatan=k.id_kegiatan");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tampilDetailIjin($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM perijinan p JOIN kegiatan k on p.id_kegiatan=k.id_kegiatan WHERE p.id_kegiatan = '$id'");
        while ($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function tambahPerkap($id_kegiatan, $id_user, $nama_barang, $jumlah, $keterangan)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "INSERT INTO `perlengkapan` (`id_kegiatan`,`id_user`,`nama_barang`,`jumlah`, `keterangan`, `status`) VALUES ('$id_kegiatan', '$id_user', '$nama_barang','$jumlah','$keterangan', 'Belum Disetujui')");
    }

    function tambahIjinKegiatan($id_kegiatan, $no_surat, $tgl, $waktu1, $waktu2, $ijin_no, $peserta, $pj)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "INSERT INTO `perijinan` (`id_surat`, `id_kegiatan`, `no_surat`, `tanggal`, `waktu_awal`, `waktu_akhir`, `ijin_tempat_nomor`, `peserta`, `penanggung_jawab`) VALUES (NULL, '$id_kegiatan', '$no_surat', '$tgl', '$waktu1', '$waktu2', '$ijin_no', '$peserta', '$pj')");
    }

	function updateSetujui2($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "UPDATE `kegiatan` SET `status2` = 'Disetujui' WHERE `kegiatan`.`id_kegiatan` = '$id';");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function updateSetujui($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "UPDATE `kegiatan` SET `status` = 'Disetujui' WHERE `kegiatan`.`id_kegiatan` = '$id';");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function updateSetujuip($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "UPDATE `perlengkapan` SET `status` = 'Disetujui' WHERE `perlengkapan`.`id_perkap` = '$id';");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function updateTolak2($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "UPDATE `kegiatan` SET `status2` = 'Ditolak' WHERE `kegiatan`.`id_kegiatan` = '$id';");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function updateTolak($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "UPDATE `kegiatan` SET `status` = 'Ditolak' WHERE `kegiatan`.`id_kegiatan` = '$id';");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }

    function updateTolakp($id)
    {
        include 'koneksi.php';
        $data = mysqli_query($conn, "UPDATE `perlengkapan` SET `status` = 'Ditolak' WHERE `perlengkapan`.`id_perkap` = '$id';");
        while($d = mysqli_fetch_array($data)){
            $hasil[]=$d;
        }
        return $hasil;
    }
}

?>