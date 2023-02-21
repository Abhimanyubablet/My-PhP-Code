<?php
session_start();
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM student WHERE Id= '".$_SESSION["Id"]."' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
    <form action="" method="post">

      <?php
      $i=0;
      while($row=mysqli_fetch_array($sql))
      {
        ?>
           <tr>
            <td><a href="update.php ?  Id= <?php echo $row["Id"] ; ?> " >update </a></td>
           </tr>
        <?php
        $i=0;
      }
      ?>
    </form>
</body>
</html>