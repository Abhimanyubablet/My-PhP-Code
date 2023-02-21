<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
</head>
<body>
    <table>
        <form action="InsertPage.php" method="post">
            <tr>
                <td>
                    <input type="text" name="id" placeholder="id" required>
                    </br>
                    <input type="text" name="name" placeholder="name" required>
                    </br>
                    <input type="text" name="f_name" placeholder="f_name" required>
                    </br>
                    <input type="text" name="pin" placeholder="pin" required>
                    <input type="submit">

                </td>
            </tr>
        </form>
    </table>
    <?php
    include_once "Mydelete.php"
    ?>
</body>
</html>