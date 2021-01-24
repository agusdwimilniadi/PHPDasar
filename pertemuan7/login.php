<?php 
    if (isset($_POST["submit"])) {
        if ($_POST["username"] == "admin" && $_POST["password"] == "123edsaq1") {
            header("Location : admin.php");
        } else {
            $salah = true;
        }
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php if (isset($salah)) : ?>
        <p style="color:red"> SALAH WOI</p>
    <?php endif;  ?>
<form action="" method="post">
    <ul>
        <li>
            <label for="username">Username </label>
            <input type="text" name="username" id="username">
        </li>
        <br>
        <li>
            <label for="password">Password </label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">KIRIM!</button>
        </li>
    </ul>
</form>

</body>
</html>