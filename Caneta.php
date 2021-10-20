<?php
    class Caneta{
        public $modelo;
        private $cor;
        private $tampada;
        private $ponta;

        public function __construct($m, $c, $p){
            
            $this->modelo = $m;
            $this->cor = $c;
            $this->ponta = $p;
            $this->tampar();
        }

        public function tampar(){
            $this->tampada = true;
        }
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($m){
            $this->modelo = $m;
        }
        public function getPonta(){
            return $this->ponta;
        }
        public function setPonta($p){
            $this->ponta = $p;
        }
    }

?>


<?php
/*
 public $modelo;
 public $cor;
 private $ponta;
 protected $carga;
 protected $tampada;

 public function rabiscar(){
     if($this->tampada == true){
         echo "não posso rabiscar";
         
     }else{
         echo "Estou rabiscando";
     }
     
 }
private function tampar(){
         $this->tampada = true;
 }
private function destampar(){
         $this->tampada = false;
 }
}
*/
?>