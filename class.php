<?php
class queve{
    var $arr=array();
    public function __construct(){
        $this->arr= array();
<<<<<<< HEAD
        print_r($this->arr);
    }
}

$s1=new queve();
=======
        // print_r($this->arr);
    }
    public function addval($vals){
        return array_push($this->$vals);
    }
    public function view($vals){
        var_dump($this->arr);
    }
    

}

$s1=new queve();
$s1->arr;
>>>>>>> do01
