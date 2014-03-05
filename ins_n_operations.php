<?php

require "n_operations.php";
$n_op = new main_op();
$n_op -> setN($_POST['n']);

echo "<h1> Raiz </h1>";
echo $n_op->raiz_n();
echo "<h1> Cuadrado </h1>";
echo $n_op->cuadrado_n();
echo "<h1> Cubo</h1>";
echo $n_op->cubo_n();

//styles
echo "<style> h1 {font-family:helvetica; background-color:#898989; "
. "color:#fff} p{color:#696969; font-family:helvetica;} li {color:#696969; font-family:helvetica;} </style>";




