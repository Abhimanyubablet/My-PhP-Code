<?php
class tab{
    public $a;

function abhi($a){
    $this->a=$a;
}
function Table_two(){
 for($i=1;$i<=10;$i++)
 {
    $this->b=$this->a * $i;
    echo $this->b . "<br>" ;
 }
}

function Table_three(){
  for($i=1;$i<=10;$i++){
    $this->b=$this->a * $i;
    echo $this->b . "<br>";
  }
}

}



class mycalculator{
  public $a;

  function Table_four($a){
    $this->a=$a;
    for($i=1;$i<=10;$i++)
 {
    $this->b=$this->a * $i;
    echo $this->b . "<br>" ;
 }
  }

  function Table_five($a){
    $this->a=$a;
    for($i=1;$i<=10;$i++)
 {
    $this->b=$this->a * $i;
    echo $this->b . "<br>" ;
 }
  }
}


$a1=new tab();
$a1->abhi(2);
$a1->Table_two();

$a1->abhi(3);
$a1->Table_three();



$a2=new mycalculator();
$a2->Table_four(4);

$a2=new mycalculator();
$a2->Table_five(5);



?>