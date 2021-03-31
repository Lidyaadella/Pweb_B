<?php
    function MyName($nama = "Tidak diberi nama"){
        echo "$nama";
    }
    //MyName();

    function tanggal(){
        echo date("Y");
    }
    //tanggal();

    function numberA(){
        return 10;
    }
    function numberB(){
        return 11;
    }
    //echo(numberA() + numberB() + numberA());

//function bisa digunakan dimana saja
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar Function</title>
</head>
<body>
    <!--<h1><?php MyName();?></h1>
    <h1><?php echo(date("d"))?></h1>
    <h1><?php echo(date("D"))?></h1>!-->
    <h1><?php echo(numberA() + numberB())?></h1>
</body>
</html>