<?php
abstract class parentClass{
    public $a,$b ;
    
    // when we use abstract in class make sure to make a function(method ) by abstract. 
    
    // we create at least one method in abstract class  but  only declear this method not implement in this class(because rule of abstract) we implement this method in other class.

    abstract protected function calc ($a,$b);
}

class childClass extends parentClass{
    // we create public method because we use for create object &&& when we create method make sure to abstract method is exact similar as extends class method.
    public function calc($a,$b){
        echo $a+$b;
    }

}

// we don't call paarentClass because it in abstract class so we do not call in object.
// $test=new parentClass();

$test=new childClass();
$test->calc(20,20);

?>