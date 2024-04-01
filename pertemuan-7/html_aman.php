<!DOCTYPE html>
<html>

<head>
    <title>HTML INJECTION</title>
</head>

<body>
    <h2>HTML INJECTION</h2>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $input = $_POST["input"];
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        echo "Inputan = ".$input."<br>";

        $email = $_POST["email"];
        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Email = " . $email;
        } else {
            echo "Masukkan email kurang benar";
        }
    }
    ?>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>">
        <label for="input">Masukkan Input:</label>
        <input type="text" name="input" id="input">

        <br>

        <label for="email">Masukkan Email:</label>
        <input type="text" name="email" id="email">

        <br>
        <input type="submit" name="submit" id="submit">
    </form>

</body>

</html>