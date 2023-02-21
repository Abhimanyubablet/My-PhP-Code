<?php
$arr=array(1,3,67,0,7,100,12,28,20,15);
$length=count($arr);
 echo "ascending order = ";
for($i=0;$i<$length;$i++)
{
    for($j=$i+1;$j<$length;$j++)
    {
        if($arr[$i]>$arr[$j])
        {
            $temp=$arr[$j];
            $arr[$j]=$arr[$i];
            $arr[$i]=$temp;
        }

    }
     echo $arr[$i].",";
}


echo "<br>" . "descending order = ";
for($i=$length-1;$i>=0;$i--)
{
    echo $arr[$i]." , ";
}
?>