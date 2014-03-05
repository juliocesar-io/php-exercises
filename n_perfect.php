<?php

class n_perfect{
var $a = 1; 
var $b = 100; 


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

   for ( $i=$this->a; $i<$this->b; $i++ ) 
      { 
       $c=0; 
        for ($d=1; $d<$i; $d++) 
        { 
         $o=$i%$d; 
           if ($o==0) 
            { 
            $c=$c+$d; //sumará a c su valor más el número que posee residuo cero 
            } 
        } 
       if ($c==$i) //si c es igual al valor recorido en el primer ciclo entonces es perfecto 
       { 
        echo "<p>".$i."</p>" ; // visualizar el número perfecto 
       } 
    }
}

}