<?php

    class Pessoa{
        public $nome;
        public $dt_nasc;
        public $end;
        public $tel;

    
 

    public function setcalc_ani($data){
        $date = new DateTime($data);
        $now = new DateTime();
        $interval = $now->diff($date);
        return $interval; 
    }
}
?>