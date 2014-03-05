<?php

require "desv_n_positives.php";
$n_desv = new desv_n();
$n_desv->setN($_POST['n']);

echo "<p> Result fo  Standar desviation  form 1 to ".$n_desv->getN().  "</p>";

echo "<h1>" .$n_desv->desv_pos(). "</h1>";

echo "<style> h1 {font-family:helvetica; background-color:#898989; color:#fff} p{color:#696969; font-family:helvetica;} </style>";