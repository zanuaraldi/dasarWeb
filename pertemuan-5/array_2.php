<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
            $Dosen =[
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            echo "Nama : {$Dosen['nama']} <br>";
            echo "Domisili : {$Dosen ['domisili']} <br>";
            echo "Jenis Kelamin : {$Dosen['jenis_kelamin']} <br>";

            echo "<br>";
            echo "
            <table cellspacing='3' cellpadding='3' border-spacing='0' border='2';>
                <tr>
                    <th>Nama</th>
                    <th>Domisili</th>
                    <th>Jenis Kelamin</th>
                </tr>
                <tr>
                    <td>{$Dosen['nama']}</td>
                    <td>{$Dosen['domisili']}</td>
                    <td>{$Dosen['jenis_kelamin']}</td>
                </tr>
            </table>
            ";
        ?>
    </body>
</html>