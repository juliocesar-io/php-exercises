<?php

require "factorial.php";
$nfactorial = new factorial();

$nfactorial->setN($_POST['n']);

echo "<h1> ".$nfactorial->getN()."! = ".$nfactorial->cfactorial()."</h1>";

echo "<style> h1 {font-family:helvetica; background-color:#898989; color:#fff} p{color:#696969; font-family:helvetica;} </style>";