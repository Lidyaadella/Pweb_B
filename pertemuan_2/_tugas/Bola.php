<?php 

    class Bola{
        private $jari_jari = 'None';

        public function setJari_jari($jari_name){
            $this->jari_jari = $jari_name;
        }

        public function getJari_jari(){
            return $this->jari_jari;
        }
        public function getLuas() {
            $luas = 0;
            $luas = 4 * pi() * pow($this->jari_jari, 2);
            return floor($luas); //saya menggunakan floor untuk membulatkan angka kebawah
        }
        public function getVolume(){
            $volume = 0;
            $volume = 4/3 * pi() * pow($this->jari_jari, 3);
            return floor($volume); //floor digunakan untuk membulatkan angka kebawah
        }
    }

?>