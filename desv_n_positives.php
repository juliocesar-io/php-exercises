<?php

class desv_n{
    var $n;

    function setN($an)
    {
        $this->n=$an;
    }
   function getN() {
       return $this->n;
   }
   function count_pos() {
       $c=0;
       for ($i=1; $i<=$this->n; $i++){
               $c++;
       }
       return $c;
   }

   function suma_pos(){
       $ac=0;
       for ($i=1; $i<=$this->n; $i++){
               $ac=$ac+$i;
       }
       return $ac;
   }

   function media_pos(){

   $media = $this->suma_pos()/$this->count_pos();

   return $media;
   }


   function desv_pos()
   {
       $sumad=0;
       $desv=0;

       for ($i=1; $i<=$this->n; $i++)
       {
         $sumad = $sumad +  ( ( $i-$this->media_pos() ) * ( ( $i-$this->media_pos() ) ) )  ;
       }
       $desv=sqrt(($sumad/($this->count_pos()-1)));
       return $desv;
   }


   }
?>

