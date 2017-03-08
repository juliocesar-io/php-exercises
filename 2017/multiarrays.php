<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 2/8/17
 * Time: 15:10
 */


// Ejemplo de un multiarray generado

$a = array();
for($c=0; $c<5; $c++){
    $a[$c] = array();
    for($r=0; $r<3; $r++){
        $a[$c][$r] = rand();
    }
}


print_r($a);


