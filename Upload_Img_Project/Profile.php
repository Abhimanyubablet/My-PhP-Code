<?php
session_start();
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM mystudent WHERE Id= '".$_SESSION["Id"]."' ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <title>Document</title>
</head>
<body>
<fieldset  style="width: 20%; margin: auto; margin-top: 70px;">
    <form  action="" method="post">
     Tap here for
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
      ?>.
    </form>
    </fieldset>
</body>
</html>