<?php
class stack{
    private $_size;
    private $_stack = [];
    function __construct($size)
    {
        echo "stack\n";
    }

    public function push($n){
      if(count($this->_stack) >= $this->_size){
        return false;
      }
      $this->_stack[]=$n;
       return true;
    }
   public function pop($size){     
    $this-> _array_pop($this->_stack);

    }
    public function top(){

    }
}


// $s1=new stack(15);

for ($i=1; $i <=20; ++$i){
    $s1->push($i);

}

// while(($val =rs1->pop()) !=null){
//     echo $val . "\n";
// }