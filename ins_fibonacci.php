<?php

require 'n_fibonacci.php';
$do = new fibonacci();

$do -> setN($_POST['n']);

echo "<h1> Serie Fibonacci </h1>";
echo $do->main();

//styles
echo "<style> h1 {font-family:helvetica; background-color:#898989; "
. "color:#fff} p{color:#696969; font-family:helvetica;} li {color:#696969; font-family:helvetica;} </style>";