<?php
// Interface (class) same as class.
// Interface(class) use as multiple class inherits in one class by interface.One class inherits by inheritance and multiple class(interface) is inherits by interface and to use (keywsord is implements).

// It's work same as Abstract.But not declear properties.

// Interface don't use for making object.And Make method in interface(class) as like Abstract .We create method declear method but not implement(not write code in this function) in this interface(class).We use this method in other extended class.

interface parent1{
  function sum($a,$b);
}

interface parent2{
    function sub($c,$d);
}

class childClass implements parent1,parent2{
  public function sum($a,$b){
    echo "sum = " .$a+$b . "<br>";
    }
  public function sub($c,$d){
    echo "sub = " . $c-$d;
    }
}

$ooye=new childClass();
$ooye->sum(19,57);
$ooye->sub(19,57);
?>