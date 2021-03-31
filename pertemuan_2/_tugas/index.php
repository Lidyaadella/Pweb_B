<?php 
    
    require 'Bola.php';

    $bola = new Bola;
    $bola->setJari_jari(10);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>192410101009</title>
</head>
<body>

    <h3>Lidya Adela Putri</h3>

    <h1>Bangun ruang : Bola</h1>

    <ul>
        <li>Jari - Jari : <?php echo($bola->getJari_jari())?> </li>
        <li>Luas : <?php echo($bola->getLuas()) ?></li>
        <li>Volume : <?php echo($bola-> getVolume())?></li>
    </ul>
</body>
</html>