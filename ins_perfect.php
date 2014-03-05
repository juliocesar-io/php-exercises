<?php

require 'n_perfect.php';
$do = new n_perfect();

$do -> setA($_POST['a']);
$do -> setB($_POST['b']);

echo "<h1> Range of perfect numbers</h1>";
echo $do->main();

//styles
echo "<style> h1 {font-family:helvetica; background-color:#898989; "
. "color:#fff} p{color:#696969; font-family:helvetica;} li {color:#696969; font-family:helvetica;} </style>";