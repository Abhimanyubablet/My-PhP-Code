<?php
$num=array(5,6,7,10,1,13,15,4,3,18);
rsort($num);
$length=count($num);
echo "Descending by sorting.". "<br>";
for ($i=0;$i<$length;$i++)
{
    echo $num[$i] ."<br>";
}
?>