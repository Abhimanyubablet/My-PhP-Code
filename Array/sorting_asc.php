<?php
$num=array(5,6,7,10,1,13,15,4,3,18);
sort($num);
$length=count($num);
echo "Ascending by sorting.". "<br>";
for ($i=0;$i<$length;$i++)
{
    echo $num[$i] ."<br>";
}
?>