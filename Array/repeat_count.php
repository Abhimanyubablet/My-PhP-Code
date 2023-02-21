<!-- #print repeated no (count) -->
<?php
$arr= array(1,2,3,18,15,3,1,2,2,1,3,17,18);
$length=count($arr);
for($i=0;$i<$length;$i++)
{
    $repeat=0;
  for($j=0;$j<$length;$j++)
  {
    if($arr[$i] == $arr[$j])
    {
      $repeat++;
    }
  }
  
    echo $arr[$i] ."=" .$repeat . "<br>";
}
?>
