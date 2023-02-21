<?php
session_start();
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
   <div style="text-align: center;">
    <h1>Home Page</h1>
    <div>
        <a href="Sign_up.html"><button >Sign up</button></a>
        <a href="Login.html"><button >Already user</button></a>
    </div>
   
   <br>
   <br>
   <?php
    date_default_timezone_set('Asia/Kolkata');
    echo "Run time Page  = " . date("h:ia e");
   include_once "View.php"
   ?>
   </div>
</body>
</html>