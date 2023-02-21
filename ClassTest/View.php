<?php
include_once "Connection.php";
$sql=mysqli_query($conn,"SELECT * FROM student ");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="2">
        <form action="">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Photo</td>
                <td>Edit</td>
            </tr>
            <?php
            $i=0;
            while($row=mysqli_fetch_array($sql))
            {
                ?>
            <tr>
                <td><?php echo $row["Id"]; ?></td>
                <td><?php echo $row["Name"]; ?></td>
                <td >
                    <img style="width:150px" src="<?php echo $row["Image"]; ?>" alt="">
                </td>
                <td>
                <a href="Edit.php ? Id= <?php echo $row["Id"]; ?>">Edit</a>
                </td>
            </tr>
            <?php
                $i++;
            }
            ?>
        </form>
    </table>
</body>
</html>