<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>
        <h2>Array terindeks</h2>
        <?php
            $Listdosen=["Elok Nur Hamdana","Unggul Pamenang","Bagas Nugraha"];

            echo $Listdosen[2] . "<br>";
            echo $Listdosen[0] . "<br>";
            echo $Listdosen[1] . "<br>";

            echo "<br>";
            foreach($Listdosen as $list){
                echo $list . "<br>";
            }
        ?>
    </body>
</html>