<?php

    require './belajarFunction.php';

    class Nama{
        public $nama;
        public $gender;
        private $address = 'Gresik';

        //untuk mengganti value yang ada di dalam method address : 
        public function setAddress($address_nama){
            $this->address = $address_nama;
        }
        public function getAddress(){
            numberB();
            return $this->address;
        }
    }

$adell = new Nama;
echo(($adell->nama='Lidya Adela Putri'));
print('<br>');
echo(($adell->gender='female'));
print('<br>');
$adell->setAddress('Bali');
echo($adell->getAddress());

?>