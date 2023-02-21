<?php
include_once "Connection.php";
$Id=$_GET["Id"];
$sql=mysqli_query($conn,"SELECT * FROM student WHERE Id ='$Id'");
if(mysqli_num_rows($sql)>0){
    while($row=mysqli_fetch_array($sql)){
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
        <form action="action.php" method="post" enctype="multipart/form-data">
            <tr>
                <td>Id</td>
                <td>Name</td>
                <td>Photo</td>
                <td>Submit</td>
            </tr>
            
            <tr>
                <td><input type="text" name="Id" value="<?php echo $row["Id"]; ?>"></td>
                <td><input type="text" name="Name" value="<?php echo $row["Name"]; ?>"></td>
                <td>
                <img style="width:150px" src="<?php echo $row["Image"]; ?>" alt="">
                <input type="file" name="Photo" >
                </td>
                <td>
                <input type="submit" >
                </td>
            </tr>
            
        </form>
    </table>
</body>
</html>

<?php
}
}
?>