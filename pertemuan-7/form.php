<!DOCTYPE html>
<html>
    <head>
        <title>Form Input PHP</title>
    </head>
    <body>
        <h2>Form Input PHP</h2>
        <form method="post" action="proses_form.php">
            <label for="nama">Nama: </label>
            <input type="text" name="nama" id="nama" require><br><br>
            
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" require><br><br>

            <input type="submit" name="submit" id="submit">
        </form>
    </body>
</html>