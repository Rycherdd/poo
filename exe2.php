<?php

    require_once 'exe1.php';

    class funcionario extends Pessoa{
        public $cargo;
        public $salario;
        public $data_adm;



    public function __construct($data, $sal){
        $this -> data_adm = $data;
        $this -> salario = $sal;
    }
    public function tempo($data){
        $now = new DateTime();
        $interval = $now->diff($data);
        return $interval;
    }
    public function imposto($sal){
        $tot = $sal * (100/27.5);
        return $tot;
    }
    }
?>
