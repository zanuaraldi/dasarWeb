<?php
    include "koneksi.php";

    $username = $_POST["username"];
    $password = md5($_POST["password"]);

    $sql = "SELECT * FROM user WHERE username='$username' and password='$password'";
    $result = mysqli_query($koneksi, $sql);
    $cek = mysqli_num_rows($result);

    if($cek > 0) {
        session_start();
        $_SESSION["username"] = $username;
        $_SESSION["status"] = 'login';
        ?>
        Anda Berhasil Login, silahkkan menuju
        <a href="homeSession.php">Halaman Home</a>
        <?php
    } else {
        ?>
        Gagal login, silahkan login lagi
        <a href="sessionLoginForm.html">Halaman Login</a>
        <?php
        echo mysqli_error($koneksi);
    }
?>