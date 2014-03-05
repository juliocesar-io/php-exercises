<?php
Class main_op{
 var $n;

      function setN($an)
    {
        $this->n=$an;
    }
   function getN() {
       return $this->n;

   }

   function raiz_n()
{
       for ($i=1; $i<=$this->n; $i++){

               echo  "<li>" .sqrt($i). "</li>". "<br>";
       }

   }

   function cuadrado_n()
{
       for ($i=1; $i<=$this->n; $i++){

               echo  "<li>" .($i)*($i). "</li>". "<br>";
       }

   }


   function cubo_n()
{
       for ($i=1; $i<=$this->n; $i++){

               echo  "<li>" .pow($i,3). "</li>". "<br>";
       }

   }




}
?>
