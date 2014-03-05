<?php

class factorial {
    var $n;
    
    
    function setN($n){
        $this->n=$n;
    }
    function getN(){
        return $this->n;
    }
    function cfactorial(){
        $ac=0;
        for($i=1; $i <= $this->n;$i++){
            $ac=$ac*$i;
        }
        return $ac;
    }
}

