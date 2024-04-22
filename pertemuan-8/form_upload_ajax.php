<!DOCTYPE html>
<html>
    <head>
        <!-- <title>Unggah File Dokumen</title> -->
        <title>Unggah File Gambar</title>
    </head>
    <body>
        <h3>UPLOAD GAMBAR</h3>
        <form id="upload-form" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <!-- <input type="file" name="file" id="file"> -->
            <input type="file" name="file" id="file" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
            <input type="submit" name="submit" value="Unggah">
        </form>
        <div id="status"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="upload.js"></script>
    </body>
</html>