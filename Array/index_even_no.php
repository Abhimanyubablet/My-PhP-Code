<!-- #even index no. value or odd index no. print -->
<?php
$arr= array(12,13,11,10,9,10,12,13,11,6,7,8);
$length=count($arr);
echo "Even Element <br>";
for($i=0;$i<$length;$i++)
{
if($i % 2== 0)
{
    echo $arr[$i]."<br>";
}

}
echo "Odd Element <br>";
for($i=0;$i<$length;$i++)
{
if($i % 2== 1)
{
    echo $arr[$i]."<br>";
}

}
?>