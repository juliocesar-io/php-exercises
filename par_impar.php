<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class par_impar{
    var $n;
    function setn($n){
        $this->n=$n;
    }
    function getn(){
        return $this->n;
    }
    function espar(){
        $p=false;
     if ($this->n%2==0)
         $p=true;
     return $p ;
    }    
}
?>
