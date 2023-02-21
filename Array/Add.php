<?php
$arr[]=0;
$count=0;
for($k=1; $k<=100; $k++ )
{
        $arr[]=$k;
        $count=$arr[$k]+$count;

       
}
echo "Total sum of value in array= " . $count ;
?>