<!-- sum the two numbers in opps with class and function -->
<?php
class cal{
    public $a,$b,$c;
function add (){
    $this->c=$this->a + $this->b;
    return $this->c;
}
function sub (){
    $this->c=$this->a - $this->b;
    return $this->c;
}

}
$a1=new cal();
$a1->a=2120;
$a1->b=250;

echo "sum the value = " . $a1->add();

echo "<br>";

$a2=new cal();
$a2->a=30;
$a2->b=15;

echo "subtract the value = " . $a2->sub();
?>
