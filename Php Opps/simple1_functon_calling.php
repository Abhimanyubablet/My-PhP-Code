<!-- In this program we use simple function call  -->
<?php
class cal {
    public $a,$b;

function abhi ($a,$b)
{
    $this->a= $a;
    $this->b=$b;
}
function sumShow()
{
    $this->add= $this->a +  $this->b;
    echo "sum : " . $this->add ."<br>";
}

function subShow()
{
    $this->sub= $this->a -  $this->b;
    echo "sub : " . $this->sub ."<br>";
}
function mulShow()
{
    $this->mul= $this->a *  $this->b;
    echo "sub : " . $this->mul ."<br>";
}
function divShow()
{
    $this->div= $this->a /  $this->b;
    echo "Div : " . $this->div ."<br>";
}
function avgShow()
{
    $this->avg= ($this->a +  $this->b)/2;
    echo "Div : " . $this->avg ."<br>
    ";
}
}

$q1=new cal();
$q1->abhi(10,15);
$q1->sumShow();

$q1->abhi(40,10);
$q1->subShow();

$q1->abhi(270,10);
$q1->mulShow();

$q1->abhi(300,10);
$q1->divShow();

$q1->abhi(80,10);
$q1->avgShow();
?>
