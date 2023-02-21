<?php
function aimit (&$name)
{
  $name .="EveryOne";
}
$str="Hello ";
aimit($str);
echo "$str";
?> 



<?php
echo ("<br>");
function mysum (&$sum)
{
    $a =10;
   $sum = $sum + $a;
}
$b=5;
mysum($b);

echo "$b";
?>



<!-- <?php
// echo ("<br>");
// $a=4x+3y+4;
// $b=5x+2y+3z+11;
// $sum=$a+$b;
// echo "$sum";
?> -->