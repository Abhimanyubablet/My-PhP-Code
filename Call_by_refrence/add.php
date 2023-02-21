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
