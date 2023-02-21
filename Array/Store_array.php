<?php
$arr[]=0;
for($i=1;$i<=100;$i++)
{
    $arr[]=$i;
    if($arr[$i]%2==0)   
    {
        echo $arr[$i] ."<br>";
    }
}

for($i=1;$i<=100;$i++)
{
    $arr[]=$i;
    if($arr[$i]%2==1)   
    {
        echo $arr[$i] ."<br>";
    }
}
?>   