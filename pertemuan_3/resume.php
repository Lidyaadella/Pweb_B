<?php 

    //print_r($_GET); //tipe data array sehingga tidak bisa menggunakan echo
    //ketika menggunakan print_r maka hasil array nya akan kosong 

    //$_GET['nama'] = 'Lidya Adela Putri';
    //$_GET['age'] ='19';
    //var_dump($_GET);

    //if (isset($_POST['submit_btn'])){
         //var_dump($_POST);
    //}

    //if (isset($_POST['submit_btn'])){
        //if(strlen($_POST['diameter'])>0){
            //echo "login";
       // } else{
            //echo"Isi diameter terlebih dahulu";
       // }
    //}

    //if(!empty($_POST)){
        //echo "sgjahsakhska";
    //}

    require 'tabung.php';
    
    $tabung = new Tabung;
    $tabung-> tes();
    
    $luas = 0;
    $volume = 0;

    if(isset($_POST['button_submit'])){
        $diamter = $_POST['diameter'];
        $tinggi = $_POST['tinggi'];
        $r = $diamter / 2;

        $luas = 3.14 * $diamter * $tinggi;
        $volume = 3.14 *$r *$r *$tinggi;

        echo "Diamter $diamter <br/>";
        echo "Tinggi $tinggi <br/>";
    }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <!--<h1>Nama<//?php echo($_GET['nama'])?></h1>!-->
    <form action="" method="POST">
        <label for="">Diameter Alas</label>
        <input type="text" name="diameter"> <br>
        <label for="">Tinggi Tabung</label>
        <input type="text" name="tinggi"> <br><br>
        <button name='button_submit'>Hitung</button>

        <hr>
    </form>
    <ul>
            <li>Luas Selimut : <?= $luas; ?></li>
            <li>Volume : <?= $volume; ?></li>
        </ul>
</body>
</html>