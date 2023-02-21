<?php

function factors( $n ) {
	$t=1;
	$table = array();
	for ( $i = 1; $i <= 10; $i++) {  
        $t=$n * $i;
        array_push( $table, $t );
	}
	return $table;
}

$nFactors = factors(4);
echo "Table : " . "<br>" ;

foreach( $nFactors as $x ) {
	echo $x . "<br>";
}

?>
