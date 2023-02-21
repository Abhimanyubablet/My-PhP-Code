<?php

function factors( $n ) {
	$t=1;
	$count=0;
	$table = array();
	for ( $i = 1; $i <= 10; $i++) {  
        $t=$n * $i;
		$count=$count+$t;
        
	}
	return $count;
}

$nFactors = factors(2);
echo $nFactors ;


?>

