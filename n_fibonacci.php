<?php

class fibonacci{
    
var $a=1;
var $b=1;
var $c;
var $n;

 function setN($an)
    {
        $this->n=$an;
    }
   function getN() {
       return $this->n;
   }

function main(){
    for($i=1;$i<=$this->n;$i++)
      {
       echo "<p>".$this->c. "</p>";
       $this->a=$this->b;
       $this->b=$this->c;
       $this->c=$this->a+$this->b;
      }
    
 }
}