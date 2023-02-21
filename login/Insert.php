


<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table>
        <form action="InsertPage.php" method="post" >
                            <h1>Insert page</h1>
            <tr>
                   <td>
                    <input type="text" name="user_id" placeholder="User Id">
                    <br>
                    <br>
                    <input type="text" name="password" placeholder="Password">
                    <br>
                    <br>

                     <input type="submit" name="save">
                     <input type="reset">
                   </td>
            </tr>
        </form>
    </table>
    <?php
include_once "Authetication.php";
?>
</body>
</html>