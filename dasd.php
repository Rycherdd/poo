<!DOCTYPE html>
<html lang="pt-bt">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="_css/estilo.css">
        <title>Criando conta no banco</title>
    </head>
    <body>
        <div>
        <pre>
        
        <h1>Projeto controle remoto</h1>
            <?php
            require_once 'ControleRemoto.php';
                $c = new ControleRemoto();
                $c->ligar();
                $c->abrirMenu();
                
            ?>
        </pre>
            
</div>
    </body>
</html>

<?php
/*
$c1->cor = "amarelo";
                $c1->ponta = 0.5;
                $c1->tampada = false;
                $c1->destampar();
                $c1->rabiscar();

                print_r ($c1);

                $c2 = new Caneta;
                $c2->cor = "Verde";
                $c2->carga = 50;
                $c2->tampar();
                print_r($c2);


                -----------------
Criando conta no banco
                require_once "Conta.php";
                $p1 = new Conta();//J
                $p2 = new Conta();//C

                $p1->abrirConta("CC");
                $p1->setnumConta(1111);
                $p1->setDono("Jubileu");
                $p1->depositar(300);
                
                
                $p2->abrirConta("CP");
                $p2->setnumConta(2222);
                $p2->setDono("Creusa");
                $p2->depositar(500);

                $p2->sacar(100);
                print_r($p1);
                
                print_r($p2);

*/
?>  