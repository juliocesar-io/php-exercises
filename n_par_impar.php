<?php

class sumatoria_par_impar {
    var $n;

    function setN($an){
        $this->n=$an;
    }
    function getN(){
        return $this->n;
    }
    function sumatoria_par(){
        $ac=0;
        $ai = 0;
        for($i=0;$i<=$this->n;$i++){ if  ( ($i % 2) == 0 ){ $ac=$ac+$i;}
        }
        return $ac;
    }
}
// impares
?>
