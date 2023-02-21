<?php
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM pasient");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table border="1">
        <form action="">
           <tr>
           <td>Id</td>
            <td>Name</td>
            <td>F-name</td>
            <td>Pin</td>
            <td>Action</td>
            <td>Update</td>
           </tr>
        
           <?php
           $i=0;
           while($row=mysqli_fetch_array($sql))
           {
            ?>
            <tr>
               <td><input type="text" value="<?php echo $row["id"]; ?>" ></td>
               <td><input type="text" value="<?php echo $row["name"]; ?>" ></td>
               <td><input type="text" value="<?php echo $row["f_name"]; ?>" ></td>
               <td><input type="text" value="<?php echo $row["pin_no"]; ?>" ></td>
               <td><a href="delete.php ?id=<?php echo $row["id"]; ?>">Delete</a></td>

               <td><a href="Update.php ? id=<?php echo $row["id"]; ?>">Update</a></td>
            </tr>
            <?php
            $i++;
           }
           ?>

           


        </form>
    </table>
</body>
</html>