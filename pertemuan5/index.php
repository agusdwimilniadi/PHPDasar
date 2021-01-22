<?php 
    //ARRAY
    //VARIABEL YANG BISA BANYAK NILAI

    //CARA ARRAY LAMA
    // $hari = array("agus", "dwi", "Milnidi");

    //CARA BARU
    $bulan = [
        ["Agus ", "192410103038", "Nganjuk"],
        ["Dwi", "1924101010", "Jawa Timur"],
        ["Dwi", "1924101010", "Jawa Timur"]
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($bulan as $buls) : ?>
    <ul>
        <li>Nama : <?php echo $buls[0]; ?> </li>
        <li>NIM : <?php echo $buls[1]; ?> </li>
        <li>Alamat : <?php echo $buls[2]; ?> </li>
    </ul>
    <?php endforeach;?>
</body>
</html>