<?php
$arr= array(1,2,-3,18,-15,3,-1,2,-2,-1,-3,-17,18);
$length=count($arr);
echo "Positive Element <br>";
for($i=0;$i<$length;$i++)
{
    
    if($arr[$i]>0){
        echo $arr[$i] . "<br>";

    }
}
echo "Negative Element <br>";
for($i=0;$i<$length;$i++)
{
    
    if($arr[$i]<0){
        echo $arr[$i] . "<br>";

    }
}
?>