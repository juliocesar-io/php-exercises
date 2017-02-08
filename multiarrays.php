<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 2/8/17
 * Time: 15:10
 */

$a = array();
for($c=0; $c<5; $c++){
    $a[$c] = array();
    for($r=0; $r<3; $r++){
        $a[$c][$r] = rand();
    }
}

print_r($a);


function getPrice($v, $iva = 0.16, &$t ){

    $t = $v + ($v * $iva);

    echo $t;
}

getPrice(7000);

