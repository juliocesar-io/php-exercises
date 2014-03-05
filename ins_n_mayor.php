<?php

require "n_mayor.php";
$n_m = new main_mayor();

$n_m -> setA($_POST['a']);
$n_m -> setB($_POST['b']);
$n_m -> setC($_POST['c']);



echo "<h1> Mayor = ".$n_m->mayor()."</h2>";
echo "<h1> Menor = ".$n_m->menor()."</h2>";
echo "<h1> Suma = ".$n_m->suma()."</h2>";






echo "<style> h1 {font-family:helvetica; background-color:#898989; color:#fff} p{color:#696969; font-family:helvetica;} </style>";



