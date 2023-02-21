<?php
include_once "collection.php";
$sql=mysqli_query($conn,"SELECT * FROM abhi");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table border="2">
        <form action="">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Email</td>
                <td>Contact</td>
                <td>Adhar</td>
                <td>Pan</td>
                <td>Action</td>
                <td>Update</td>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
                 <tr>
                    <td><input type="text" value="<?php echo $row["id"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["name"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["email"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["contact"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["adhar"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["pan"]; ?>"></td>

                    <td><a href="delete.php ? id=<?php echo $row["id"]; ?>">Delete</a></td>

                    <td><a href="Update.php ? tt=<?php echo $row["id"]; ?>">Update</a></td>
                    
                 </tr>
                <?php
                $i++;
            }
            ?>
        </form>
    </table>
</body>
</html>