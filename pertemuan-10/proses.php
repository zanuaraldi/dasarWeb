<?php
    include("koneksi.php");

    $aksi = $_GET['aksi'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $no_telp = $_POST['no_telp'];

    if($aksi == 'tambah') {
        $query ="INSERT INTO anggota2 (nama, jenis_kelamin, alamat, no_telp) VALUES ('$nama', '$jenis_kelamin', '$alamat', '$no_telp')";

        if (mysqli_query($koneksi, $query)) {
            header("Location: index.php");
            exit();
        } else {
            echo "Gagal menambahkan data : " . mysqli_error($koneksi);
        } 
    } else if ($aksi == 'ubah') {
        if (isset($_POST['id'])) {
            $id = $_POST['id'];

            $query = "UPDATE anggota2 SET nama='$nama', jenis_kelamin='$jenis_kelamin', alamat='$alamat', no_telp='$no_telp' WHERE id='$id'";
            
            if (mysqli_query($koneksi, $query)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gaga; mengupdate data : " . mysqli_error($koneksi);
            }
        } else {
            echo "ID tidak valid";
        }
    } else if ($aksi == "hapus") {
        if (isset($_GET["id"])) {
            $id = $_GET["id"];

            $query = "DELETE FROM anggota2 WHERE id='$id'";

            if(mysqli_query($koneksi, $query)) {
                header("Location: index.php");
                exit();
            } else {
                echo "Gagal menghapus data : " . mysqli_error($koneksi);
            }
        } else {
            echo "ID tidak valid.";
        }
    } else {
        header("Location: index.php");
        exit();
    }

    mysqli_close($koneksi);
?>