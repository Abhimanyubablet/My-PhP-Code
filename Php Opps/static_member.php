<?php
// static used as for no making of object. 
// without object we can work by static member.
// :: is called scope resolution operator
// In static member we use for assin current value in self keyword not this keyword.
class base{
    public static $name= " I am Abhimanyu .";

    public static function show (){
        echo self::$name;
    }
}

base::show();
?>

<br>

<?php

class abhi{
    public static $name= " I am pursuing bca from AIMIT .";

    public static function show (){
        echo self::$name;
    }
    // replaces the value by automatically call construct function.
    public function __construct($n){
         self::$name=  $n ;
    }

}

// base::show();

$test= new abhi ("wow");
$test->show();
?>
 
 <br>

<?php

class qqq{
    public static $name= " I am extented case .";
}

class derived extends qqq{
    public static function show (){
        // in this case we use parent keyword for print because we are in extented case
        echo parent::$name ;
    }
}

$test= new derived ();
$test->show();
?>