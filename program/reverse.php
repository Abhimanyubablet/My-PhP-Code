<?php
{
    $num=12345;
$rev=0;
while($num >= 0 ){
    $rev=$rev * 10 + $num % 10;
    $num = $num / 10; 

    echo  "Reverse no. Print = " . "$rev" . "<br>" ;
}
}

?>