<?php 

    class Tabung{
        private $diameter;
        private $tinggi;
        private $r;
        private $luas_selimut;
        private $phi = 3.14;

        public function setDiameter($value){
            $this->diameter = $value;
            $this->r = $this-> diamter /2;
        }
        public function setTinggi($value){
            $this-> tinggi = $value;
        }
        public function hitungLuas(){
            $this-> luas_selimut = 3.14 *$this->diameter*$this-> tinggi;
        }
        public function getLuasSelimut(){
            return $this->luas_selimut;
        }
        public function tes(){
            echo"tabung berhasil di panggil";
        }
    }




?>