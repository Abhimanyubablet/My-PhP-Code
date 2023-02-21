<?php
session_start();
include_once "Connection.php";
$sql=mysqli_query($conn,"SELECT * FROM science WHERE Id='".$_SESSION["Id"]."'");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>

<h1></h1>
<form action="" method="post"> Tap here  to
    
          <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
               <tr>
                <td><a href="update.php? Id= <?php echo $row["Id"]; ?>">update</a></td>
               </tr>
               <?php
                $i++;
            }
            ?>.
    </form>
</body>
</html>