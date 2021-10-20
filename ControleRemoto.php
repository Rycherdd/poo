<?php

require_once 'controlador.php';

    class ControleRemoto implements Controlador{
        private $volume;
        private $ligado;
        private $tocando;

        public function __construct(){
            $this->volume = 50;
            $this->lihado = false;
            $this->tocando = false;
        }
        private function getVolume(){
            return $this->volume;
        }
        private function getLigado(){
            return $this->ligado;
        }
        private function getTocando(){
            return $this->tocando;
        }
        private function setVolume($volume){
            $this->Volume = $volume;
        }
        private function setLigado($ligado){
            $this->ligado = $ligado;
        }
        private function setTocando($tocando){
            $this->tocando = $tocando;
        }


        public function abrirMenu(){
            echo "<br> Está ligado?: ". ($this->getLigado()?"Sim":"Não");
            echo "<br> Está tocando?: ". ($this->getTocando()?"Sim":"Não");
            echo "<br> Volume: ". $this->getVolume();
            for($i = 0; $i<=$this->getVolume();$i+=10){
                echo "|";
            }
            echo "<br>";
        }

        public function desligarMudo(){
            if($this->getLigado() && $this->getVolue() ==0 ){
                $this->setVolume(50);
            }
        }
        public function fecharMenu(){
            echo "<br> Fechando menu...";
        }
        public function maisVolume(){
                if($this->getLigado()){
                    $this->setVolume($this->getVolume() + 5);
                }else{
                    echo "<p>Erro!, não posso aumentar o volume!</p>"
                }
        }
        public function menosVolume(){
                if($this->getLigado()){
                    $this->setLigado($this->getVolume() - 5);
                }else{
                    echo "<p> Erro, não posso diminuir o volume";
                }
        }
        public function ligarMudo(){
                if($this->getLigado() && $this->getVolume()>0){
                    $this->setVolume(0);
                }
        }
        public function ligar(){
            $this->setLigado(true);
        }
        public function desligar(){
            $this->setLigado(false);
        }
        public function play(){
                if($this->getLigado() && !($this->getTocando())){
                    $this->setTocando(true);
                }
        }
        public function pause(){
                if($this->etLigado() && $this->getTocando()){
                    $this->setTocando(false);
                }
        }
    }
?>