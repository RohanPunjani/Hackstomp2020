<?php

session_start();

$conn = mysqli_connect("localhost", "root", "", "cllg");

if (!$conn) {
    echo "Connection Error";
    die("Error " . $conn->error);
    return false;
}

$username = $_POST['username'];
$password = $_POST['password'];

$login_query = mysqli_query($conn, "Select * from personal_info where s_username='$username' and s_password='$password';");

if (mysqli_num_rows($login_query) > 0) {
    $res = mysqli_fetch_assoc($login_query);
    $_SESSION['s_id'] = $res['s_id'];
    header("location: ./student/forms/");
    return true;
} else {
    header("location: ./login.html");
    return false;
}
