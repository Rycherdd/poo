<?php
    class Conta{
        //ATRIBUTOS
        public $numConta;
        protected $tipo;
        private $dono;
        private $status;
        private $saldo;

        //TODOS
        public function abrirConta($t){
            $this->setTipo($t);
            $this->setStatus(true);
            if($t == "CC"){
                $this->setSaldo(50);
            }else if($t == "CP"){
                $this->setSaldo(150);
            }
        }

        public function fecharConta(){
            if($this->getSaldo() > 0){
                echo "<p>Conta ainda tem dinheiro, não posso fechá-la!</p>";
            }else if($this->getSaldo() < 0){
                echo "<p>Conta está no negativo, não posso fechá-la!</p>";
            }else{
                $this->setStatus(false);
            }
        }
        public function depositar($v){
                if($this->getStatus()){
                    $this->setSaldo($this->getSaldo() + $v);
                    echo"<p>Saque de $v autorizado na conta da".$this->getDono()."</p>";
                }else{
                    echo"<p>Conta fechada, nã consigo depositar</p>";
                }
        }
        public function sacar($v){
            if($this->getStatus()){
                if($this->getSaldo() > $v){
                    $this->setSaldo($this->getSaldo() - $v);
                }else{
                echo "<p>Saldo insuficiente para saque.</p>";
                }
        }else{
            echo "<p>Não posso sacar de uma conta fechada!</p>";
        }
    }

        public function pagarMensal(){
            if($this->getTipo() == "CC"){
                $v = 12;
            }else if($this->getTipo() == "CP"){
                $v = 20;
            }
            if($this->getStatus()){
                $this->setSaldo($this->getSaldo() - $v);
            }else{
                echo "<p>Problemas com a conta. Não posso cobrar</p>";
            }
        }

        //METODOS ESPECIAIS

        public function __construct(){
            $this->setSaldo(0);
            $this->setStatus(false);

            echo "<p>Conta criada com sucesso!</p>";
        }

        function getnumConta(){   
            return $this->$numConta;
        }
        

        function getTipo(){
            return $this->tipo;
        }

        function getDono(){
            return $this->dono;
        }
        function getStatus(){
            return $this->status;
        }
        function getSaldo(){
            return $this->saldo;
        }
        
        public function setnumConta($n){
            $this->numConta = $n;
        }
        function setSaldo($saldo){
            $this->saldo = $saldo;
        }
        function setTipo($tipo){
            $this->tipo = $tipo;
        }
        function setDono($dono){
            $this->dono = $dono;
        }

        function setStatus($status){
            $this->status = $status;
        }
    }
        ?>