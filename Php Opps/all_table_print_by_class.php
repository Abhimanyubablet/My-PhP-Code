<?php
class cal{
    public $a,$b,$c,$d;

function Table($a,$b,$c,$d){
 $this->a=$a;
 $this->b=$b;
 $this->c=$c;
 $this->d=$d;

 for($i=$this->a;$i<=$this->b;$i++)
 {  
    echo  " Table of $i = ";
    for($j=$this->c;$j<=$this->d;$j++){

        $this->x=$i * $j;
        echo $this->x . "\t " ;
    }
    
    echo  ". <br>"   . "<br> ";
 }
}
}

$a1=new cal();
$a1->Table(2,20,1,10);

?>