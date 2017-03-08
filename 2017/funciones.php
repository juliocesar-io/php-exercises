<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 3/8/17
 * Time: 11:19
 */


// Funcion para calcular el IVA, con parametros opcionales y se pasa el total por referencia.

function getPrice($v, $iva = 0.16,  &$t = 0){

    $t = $v + ($v * $iva);

    echo "El total es: $t \n";
}


getPrice(5000);


// Invertir el orden de las palabras de un string dado


$string="Universidad de Monterrey Nuevo Leon";
echo implode(array_reverse(explode(" ",$string))," ");
