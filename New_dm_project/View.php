<?php
include_once "connection.php";
$sql=mysqli_query($conn,"SELECT * FROM district");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <br>
    <br>
    <table border="2"" style="margin:auto; ">
        <form action="">
            <tr>
                <td>D_Name</td>
                <td>D_Population</td>
                <td>No_Of_Blocks</td>
                <td>No_Of_Panchyats</td>
                <td>No_Of_Villages</td>
                
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
                 <tr>
                    <td><input type="text" value="<?php echo $row["D_Name"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["D_Population"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["No_Of_Blocks"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["No_Of_Panchyats"]; ?>"></td>
                    <td><input type="text" value="<?php echo $row["No_Of_Villages"]; ?>"></td>
                 </tr>
                <?php
                $i++;
            }
            ?>
        </form>
    </table>
</body>
</html>