<?php 
// User defined function
    function salam($waktu = "Datang", $nama ="Default") {
        return "Selamat $waktu, $nama";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?php echo salam("Pagi","Agus");  ?></h1>
</body>
</html>