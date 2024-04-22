<?php
    $servername = "localhost";
    $username = "root";
    $password = "Zanuaraldi0101";
    $database = "prakwebdb";

    $conn = mysqli_connect($servername, $username, $password, $database);
    $query = "INSERT INTO user 
        (id, username, password) VALUES 
        (1, 'admin', MD5('123'))";

    if (mysqli_query($conn, $query)){
        echo "Data berhasil ditambah";
    } else {
        echo "Error: " . mysqli_error(($conn));
    } 

    mysqli_close($conn);
?>