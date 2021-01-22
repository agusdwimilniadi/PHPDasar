<?php 
$penjualan =[
    [
        "namaBarang" => "Samsung Galaxy A50s",
        "ram" => "16GB",
        "os" => "Android",
        "harga" => "16.000.000",
        "bonus" => "silicon",
        "gambar" => "samsung.png"
    ],
    [
        "namaBarang" => "iPhone 12 Pro max",
        "ram" => "2gb",
        "os" => "iOS",
        "harga" => "1.000.000",
        "bonus" => "Charger", 
        "gambar" => "iphone.jpg"
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penjualan HP</title>
</head>
<body>  
    <h1>PENJUALAN SMARTPHONE</h1>
    <?php foreach($penjualan as $barang) :  ?>
        <ul>
            <img src="img/<?php echo$barang["gambar"]?>"> 
            <li>Nama Barang :<?php echo $barang["namaBarang"] ?></li>
            <li>RAM :<?php echo $barang["ram"] ?></li>
            <li>Operating System :<?php echo $barang["os"] ?></li>
            <li>Harga : <?php echo $barang["harga"] ?></li>
            <li>Bonus : <?php echo $barang["bonus"] ?></li>
        </ul>
    <?php endforeach;  ?>
</body>
</html>