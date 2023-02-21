
<!-- In this program we use function call with Return type -->
<?php
// Class
class calculation {
    // Properties
    // Access modifiers
    public $a, $b,$c ; 

    // Methods
    // ->=Arrow operator
    // this means under class uses operator
        function sum() {
      $this->c=$this->a + $this->b;
      return $this->c;
      
    }

    function sub(){
        $this->c=$this->a - $this->b;
        return $this->c;
    }
    function mul(){
        $this->c=$this->a * $this->b;
        return $this->c;
    }
    function div(){
        $this->c=$this->b / $this->a;
        return $this->c;
    }

    
}

class cal {
    public $x,$y,$z,$t;
    function mysum(){
      $this->t=$this->x + $this->y + $this->z;
      return $this->t;
    }
    function Mulsub(){
        $this->t1=$this->x * $this->y- $this->z;
        return $this->t1;
    }
   
}

$c1= new calculation ();
    $c1->a=20;
    $c1->b=10;

    echo "Sum value of c1 = " . $c1->sum() . "<br>";

$c2= new calculation ();
    $c2->a=30;
    $c2->b=5;

    echo "Substraction value of c2= " . $c2->sub() . "<br>";

$c3= new calculation ();
  $c3->a=20;
  $c3->b=30;

  echo "Mulple value of C3= " . $c3->mul(). "<br>";

$c4= new calculation ();
  $c4->a=5;
  $c4->b=400;
 
  echo "Division of c4= " . $c4->div(). "<br>";

$t1=new cal ();
  $t1->x=2;
  $t1->y=2;
  $t1->z=2;

  echo "Sum the value of t1 = " .$t1->mysum() . "<br>";

$t1=new cal ();
 $t1->x=30;
 $t1->y=50;
 $t1->z=40;

echo "Multiple Substract of t1= " . $t1->Mulsub();
?>