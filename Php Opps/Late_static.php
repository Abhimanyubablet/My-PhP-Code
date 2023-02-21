<?php
class base {
    protected static $name ="Yahoo";
    public function show(){
        echo self::$name;
        //  static keyword print extends value assign.
        echo static::$name;
    }
}

class derived extends base {
    protected static $name="baba";
}

$test=new derived();
$test->show();
?>