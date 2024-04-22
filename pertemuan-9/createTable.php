<?php
    $servername = "localhost";
    $username = "root";
    $password = "Zanuaraldi0101";
    $database = "prakwebdb";

    $conn = mysqli_connect($servername, $username, $password, $database);
    $query = "CREATE TABLE user(
        id int AUTO_INCREMENT primary key,
        username varchar(50) not null,
        password varchar(50) not null)";

    if (mysqli_query($conn, $query)){
        echo "Tabel user berhasil dibuat";
    } else {
        echo "Error: " . mysqli_error(($conn));
    } 

    mysqli_close($conn);
?>