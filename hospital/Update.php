<?php
include_once "connection.php";
if(count($_POST)>0){
    mysqli_query($conn,"UPDATE pasient SET
      id='".$_POST["id"]."',
      name='".$_POST["name"]."',
      f_name='".$_POST["f_name"]."',
      pin_no='".$_POST["pin_no"]."'

      WHERE id='".$_GET["id"]."'");
      $m=header("Location:Input.php");
}
   $result=mysqli_query($conn,"SELECT * FROM pasient WHERE id='".$_GET["id"]."'");
   $row=mysqli_fetch_array($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table border="1">
        <form method="post" action="">
            <?php
            if(isset($m)){
                echo $m;
            }
            ?>
           <tr>
           <td>Id</td>
            <td>Name</td>
            <td>F-name</td>
            <td>Pin_no</td>
            <td>Update</td>
           </tr>
        
           
            <tr>
               <td><input name="id" type="text" value="<?php echo $row["id"]; ?>" ></td>
               <td><input name="name" type="text" value="<?php echo $row["name"]; ?>" ></td>
               <td><input name="f_name" type="text" value="<?php echo $row["f_name"]; ?>" ></td>
               <td><input name="pin_no" type="text" value="<?php echo $row["pin_no"]; ?>" ></td>
               <td><input type="submit"></td>
            </tr>
            

           


        </form>
    </table>
</body>
</html>