<?php
session_start();
session_unset();
session_destroy();
echo "You are logged out please login again.";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body><p>Click for 
<a href="login.php">Login</a> .
</p>
</body>
</html>