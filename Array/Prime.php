<?php
$arr[]=0;
$count=0;
for($k=1; $k<=100; $k++ )
{
        $arr[]=$k;
}
      for($k = 1; $k <= 100; $k++) 
      {
        $count=0;
        for($j=1; $j<=$k; $j++){
            if (($k % $j) == 0) 
        {
            $count++;
        }
        }
        if ($count ==2) 
            {
                echo $arr[$k]. " is  prime<br/>";
        }

      }
        
?>