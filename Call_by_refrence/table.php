<?php
function mysum (&$t)
{  $m=1;  
  $sum =0; 
 for($i=1;$i<=10;$i++)
 {
        $m=$t*$i;
 }
}
$b=2;
mysum($b);
echo "$b" ;
?> 