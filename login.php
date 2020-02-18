<?php

session_reset();

?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <link rel="stylesheet" href="./style.css">
        <style>
        body {
            background: #000;
            color: white;
        }

        </style>
    </head>

    <body>
        <!-- Wave above -->
        <div class="container">
            <div class="img">
                <img src="./assets/images/login/personalization.svg" alt="">
            </div>
            <div class="login-container">
                <form action="./val.php" method="POST" id="loginform">
                    <img class="avatar" src="./assets/images/login/profile.svg">
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <input name="username" class="input" type="text" id="username" style="color:white"
                                placeholder="Username">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <input name="password" class="input" type="password" id="password" style="color:white"
                                placeholder="Password">
                        </div>
                    </div>
                    <a href="#" class="forget_password">Forgot Password?</a>
                    <input type="submit" class="btn" value="login">
                    <br><br><br>
                    <!-- <a type="" class="btn" href="./register.php" style="text-decoration: none;">Register</a> -->
                </form>
            </div>
        </div>
    </body>


</html>
