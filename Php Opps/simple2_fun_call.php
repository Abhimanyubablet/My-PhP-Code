<?php
 class cal {
    public $a,$b;
function add ($a,$b)
{
 $this->a=$a;
 $this->b=$b;
 $this->c=$this->a + $this->b;
 echo "sum : " . $this->c ."<br>";
}

function sub ($a,$b)
{
 $this->a=$a;
 $this->b=$b;
 $this->c=$this->a - $this->b;
 echo "sub : " . $this->c;
}


}
$q1=new cal();
$q1->add(30,30);
$q1->sub(200,30);

?>