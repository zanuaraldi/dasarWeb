<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="style.css"/>
    </head>
    <body>
        <h2>Multidimensional Array</h2>
        <table>
            <tr>
                <th>Judul Film</th>
                <th>tahun</th>
                <th>Rating</th>
            </tr>
            <?php
                $movie = array(
                    array("Avanger: Invinity War", 2018, 8.7),
                    array("The Avanger", 2012, 8.1),
                    array("Guardian of the Galaxy",2014, 8.1),
                    array("Iron Man",2008, 7.9)
                );

                echo "<tr>";
                    echo "<td>". $movie[0][0]."</td>";
                    echo "<td>". $movie[0][1]."</td>";
                    echo "<td>". $movie[0][2]."</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".$movie[1][0]."</td>";
                    echo "<td>".$movie[1][1]."</td>";
                    echo "<td>".$movie[1][2]."</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>".$movie[2][0]."</td>";
                    echo "<td>".$movie[2][1]."</td>";
                    echo "<td>".$movie[2][2]."</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>".$movie[3][0]."</td>";
                    echo "<td>".$movie[3][1]."</td>";
                    echo "<td>".$movie[3][2]."</td>";
                echo "</tr>";
            ?>
        </table>
    </body>
</html>