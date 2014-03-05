<?php 
 class nPrime{
  
   var $a,$b;
   var $nDiv;
  
    function setA($a){
        $this->a=$a;
    }
    function getA(){
        return $this->a;
    }
    function setB($b){
        $this->b=$b;
    }
    function getB(){
        return $this->b;
    }
   
function main(){     
   for ($i = $this->a; $i <= $this->b; $i++){                                  
      $this->nDiv = 0; // Número de divisores 
      for ($n = 1; $n <= $i; $n++){ // Desde 1 hasta el valor que tenga $i 
         if($i%$n == 0){ // $n es un divisor de $i 
            $this->nDiv = $this->nDiv + 1; // Agregamos un divisor mas. 
         } 
     }    
if($this->nDiv == 2 or $i ==! 1){// Si tiene 2 divisores ó es diferente de 1 --> Es primo      
     
     echo "<p>".$i."</p>"; 
     } 
   } 
 }
   
 }
