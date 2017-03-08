<?php
/**
 * Created by PhpStorm.
 * User: JulioC
 * Date: 2/15/17
 * Time: 15:00
 */



// Ejemplo de fecha usando el formato del Locale

setlocale(LC_TIME, "es_ES");
$f2=strftime("Hoy  es %A %d de %B de %G, y la hora es %I:%M %p");
echo $f2;

echo "\n";

// Ejemplo donde se agregan 12 horas y 12 minutos a una fecha inicial el 10 iteraciones.

$startTime = date("d-m-Y H:i");

echo 'Tiempo inicial: '.$startTime;

// sec to add correspond to 12 hours and 12 min

$sec_to_add = 43920;

$timesp = time();

for($c=1; $c<10; $c++){

    $to_add = $to_add + $sec_to_add;

    $final = $timesp + $to_add;

    echo "\n";

    echo  date('d-m-Y H:i', $final);

}
