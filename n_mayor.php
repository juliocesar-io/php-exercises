<?php
class main_mayor {
  var $a;
  var $b;
  var $c;
  var $max;
  var $min;

function getA(){
        return $this->a;
    }
function getB(){
        return $this->b;
    }
 function getC(){
        return $this->c;
    }
function setA($a){
        $this->a = $a;
    }
function setB($b){
        $this->b = $b;
    }
 function setC($c){
        $this->c = $c;
    }


   function mayor(){
           
   	if  ( ($this->a > $this->b) and ($this->a > $this->c) ) {
                  $this->max = $this->a;
   	} elseif(
                $this->b > $this->c) {
                 $this->max = $this->b;
   	} else {
            $this->max = $this->c;
   	} return $this->max;
  }


   function menor(){
   	if  ( ($this->a < $this->b) and ($this->a<$this->c) ) {
                  $this->min = $this->a;
   	} elseif($this->b < $this->c) {
                 $this->min = $this->b;
   	} else {
   		$this->min= $this->c;
   	}

   	return $this->min;
  }

   function suma(){
   	return $this->max + $this->min;
   }

}

