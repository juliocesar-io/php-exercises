<?php

require "48_n.php";
$n_48 = new some_op();
$n_48 -> setA($_POST['a']);
$n_48 -> setB($_POST['b']);

echo "<h1> ( n < 0 )^3 </h1> ";
echo $n_48->cubo_menor();
echo "<h1> ( 0 < n < 100)^2 </h1> ";
echo $n_48->cuadrado_range();
echo "<h1> (101 < n < 1000)^0.5 </h1>";
echo $n_48->raiz_range();

//styles
echo "<style> h1 {font-family:helvetica; background-color:#898989; "
. "color:#fff} p{color:#696969; font-family:helvetica;} li {color:#696969; font-family:helvetica;} </style>";



