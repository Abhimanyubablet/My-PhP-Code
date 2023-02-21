<!-- #repeated no. print -->

<?php
$arr= array(12,13,11,10,9,10,12,13,11,6,7,8);
$length=count($arr);
for($i=0;$i<$length;$i++)
{
  for($j=$i+1;$j<$length;$j++)
  {
    if($arr[$i] == $arr[$j])
    {
      echo $arr[$i]."<br>";
    }
  }
}
?>