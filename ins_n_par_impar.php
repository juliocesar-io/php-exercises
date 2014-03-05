<?php

require "n_par_impar.php";
$n_plus=new sumatoria_par_impar();
$n_plus->setN($_POST['n']);
echo "<h1>". "The summation from n to  ".$n_plus->getN()." =  ".$n_plus->sumatoria_par(). "</h1>";

echo "<style> h1 {font-family:helvetica; background-color:#898989; color:#fff} p{color:#696969; font-family:helvetica;} </style>";

// imapres



