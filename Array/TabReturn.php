<?php
  $arr[1]=null;
  
Function Tab($a,$b)
{
    $t=1;
    for($i=2;$i<=$a;$i++)
    {
        for($j=1;$j<=$b;$j++)
        {
            $t=$j*$i;
            $arr[]=$t;
        }
    }
    return $arr;
}
echo "<pre>";
print_r( Tab (20,10));
echo "</pre>";

?>