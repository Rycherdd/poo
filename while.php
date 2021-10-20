<?php 
$cont = 0;
    while($cont%2==0){
        echo "$cont". " ";
        $cont++;
        if($cont >= 50 || $cont <= 60){
            continue;
        }
    }  
?>

