<?php

function factors( $a,$n,$b,$m ) {
	$t=1;
	$table = array();
	for ( $i = $a; $i <= $n; $i++) 
    {  
        for($j=$b; $j <=$m ; $j++)
        {
        $t=$j * $i;
        array_push( $table, $t );
        }
        
	}
	return $table;
}

$abhi = factors(2,20,1,10);
echo "Table : " . "<br>" ;

foreach( $abhi as $x ) {
	echo $x . "<br>";
}

?>