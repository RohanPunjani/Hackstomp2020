<?php
if (isset($_POST['submit'])) {
    $conn = mysqli_connect("localhost", "root", "", "cllg");
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO personal_info ('username', 'password') Values ('$username','$password')";
    $res = mysqli_query($conn, $sql);
    if ($res)
        header("location: ./login.html");
    else {
        echo "
            error hai bhaiya!
        ";
    }
}
?>



<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Register</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://kit.fontawesome.com/a81368914c.js"></script>
        <link rel="stylesheet" href="./style.css">
    </head>

    <body>
        <!-- Wave above -->
        <h1 style="
            margin:100px 0 0 0; 
            font-family: monospace;
            position: absolute;
            left: 45%;
            justify-self: center;">
            Register Here
        </h1>
        <div class="container">
            <div class="img">
                <img src="./assets/images/login/personalization.svg" alt="">
            </div>
            <div class="login-container">
                <form action="" method="POST" id="loginform">
                    <img class="avatar" src="./assets/images/login/profile.png">
                    <h2>Malde-Academy</h2>
                    <div class="input-div one">
                        <div class="i">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <input name="username" class="input" type="text" id="username" placeholder="Username">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <input name="password" class="input" type="password" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="input-div two">
                        <div class="i">
                            <i class="fas fa-lock"></i>
                        </div>
                        <div>
                            <input name="re-password" class="input" type="password" id="re-password"
                                placeholder="Retype Password">
                        </div>
                    </div>
                    <br><br><br>
                    <button type="submit" class="btn" style="text-decoration: none;">Register</button>
                </form>
            </div>
        </div>
    </body>


</html>
