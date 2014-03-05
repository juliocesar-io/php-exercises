<?php
require 'par_impar.php';
$n=new par_impar();
//$n->setn($_POST['num']);
if ($n->espar()){
    echo '<h1> Es par </h1> ';
}else{
    echo '<h1> Es impar </h1> ';
}
echo "<style> h1 {font-family:helvetica; background-color:#898989; color:#fff} p{color:#696969; font-family:helvetica;} </style>";