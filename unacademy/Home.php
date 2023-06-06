<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Home.css">
</head>
<body>
    <div>
        <h1 style="text-align: center;">Home</h1>
        <hr style="width: 100px;"/>
        
    </div>
    <div style="margin-left: 80%;margin-top: -60px;" >
        <label class="dropdown" >

            <div class="dd-button">
              Sign Up
            </div>
          
            <input type="checkbox" class="dd-input" id="test">
          
            <ul class="dd-menu">
              <li>
                <a href="T_SignUp.html">Teacher SignUp</a>
            </li>
              <li class="divider"></li>
              <li>
                <a href="S_SignUp.html">Student SignUp</a>
        
              </li>
            </ul>
            
          </label>
    </div>
    <div style="margin-left: 90%;margin-top: -40px;" >
        <label class="dropdown" >

            <div class="dd-button">
              Login
            </div>
          
            <input type="checkbox" class="dd-input" id="test">
          
            <ul class="dd-menu">
              <li>
                <a href="T_login.html">Teacher login</a>
            </li>
              <li class="divider"></li>
              <li>
                <a href="S_login.html">Student login</a>
        
              </li>
            </ul>
            
          </label>
    </div>
    <?php
    include_once "View.php";
    ?>
</body>
</html>