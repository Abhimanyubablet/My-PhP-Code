<?php
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM carmodel");
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
                <td>Mfg</td>
                <td>Mfg_Date</td>
                <td>Product</td>
                <td>P_model</td>
                <td>Seller</td>
                <td>Customer</td>
                <td>C_id</td>
                <td>Pan</td>
                <td>P_date</td>
                <td>Action</td>
                <td>Update</td>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
                   <tr>
                    <td><input type="text" value="<?php echo $row['id']; ?>" ></td>
                    <td><input type="text" value="<?php echo $row['mfg'] ;?>" ></td>
                    <td><input type="text" value="<?php echo $row['mfg_date']; ?>" ></td>
                    <td><input type="text" value="<?php echo $row['product'] ;?>" ></td>
                    <td><input type="text" value="<?php echo $row['p_model'] ;?>" ></td>
                    <td><input type="text" value="<?php echo $row['seller'] ;?>" ></td>
                    <td><input type="text" value="<?php echo $row['customer'];?>" ></td>
                    <td><input type="text" value="<?php echo $row['c_id'] ;?>" ></td>
                    <td><input type="text" value="<?php echo $row['pan'] ;?>" ></td>
                    <td><input type="text" value="<?php echo $row['p_date'] ;?>" ></td>

                    <td><a href="delete.php ? id=<?php echo $row['id']; ?>">Delete</a></td>
                     
                    <td><a href="update.php ?id=<?php echo $row['id']; ?>">Update</a></td>


                   </tr>
                <?php
                $i=0;
            }
            ?>
        </form>
    </table>
</body>
</html>