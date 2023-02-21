<?php

function factors( $n,$m ) {
	$t=1;
    $sum=0;
	$table = array();
	for ( $i = 2; $i <= $n; $i++) 
    {  
        for($j=1; $j <=$m ; $j++)
        {
        $t=$j * $i;
        $sum=$sum+$t;
        }
        
	}
	return $sum;
}

$nFactors = factors(20,10);
echo "sum of all 2 to 20 table : " . "$nFactors" . ".<br>" ;


?>