<?php

class some_op{
 var $a;
 var $b;

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

   function cubo_menor(){
          for ($i= $this->a; $i <= $this->b; $i++){
              if ($i < 0){
                  echo "<li>" .pow($i,3). "</li>"."<br>";
                 }     
           }  
       }

   
 function cuadrado_range(){
       for ($i=$this->a; $i <= $this->b; $i++){ 
           if (($i > 0) and ($i < 100)){

               echo  "<li>" .pow($i,2). "</li>". "<br>";
           }
       }

   }

    function raiz_range()
{
       for ($i=$this->a; $i<=$this->b; $i++){ 
           if (($i >= 101) and ($i <= 1000)){

               echo  "<li>" .sqrt($i). "</li>". "<br>";
       } else{ return "<p> No hay numeros mayores a 100</p>"; }

   }



}

}