<?php
if (isset($_POST["submit"])) {
    $targetDirectory = "uploads/"; //Direktori tujuan untuk menyimpan file
    $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    $allowedExtensions = array("jpg", "jpeg", "png", "gif");

    $maxFileSize = 10 * 1024 * 1024;

    if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
            echo "File berhasil diunggah<br>";
            list($width_orig, $height_orig) = getimagesize($targetFile);
            $width = 200;
            $height = round(($height_orig / $width_orig) * $width);
            $image_p = imagecreatetruecolor($width, $height);
            if ($fileType == 'jpg' || $fileType == 'jpeg') {
                $image = imagecreatefromjpeg($targetFile);
            } else if ($fileType == 'png') {
                $image = imagecreatefrompng($targetFile);
            } else if ($fileType == 'gif') {
                $image = imagecreatefromgif($targetFile);
            }
            imagecopyresampled($image_p, $image, 0, 0, 0, 0, $width, $height, $width_orig, $height_orig);
            imagejpeg($image_p, $targetDirectory . 'thumb_' . basename($_FILES["fileToUpload"]["name"]), 100);
            echo "Thumbnail Berhasil Dibuat";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
    