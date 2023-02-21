<?php
echo ("<br>");
function mysum (&$sum)
{
    $a =10;
    $c=10;
   $sum = ($sum + $a + $c)/3;
}
$b=5;
mysum($b);
echo "$b" ;
?>