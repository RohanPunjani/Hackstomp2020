<?php

session_start();
$s_id = $_SESSION['s_id'];
$s_id = 'ucoeb2018101001';
$Sfirstname = $_POST['fname'];
$Smiddlename = $_POST['mname'];
$Slastname = $_POST['lname'];
$Semail = $_POST['email'];
$Sdob = $_POST['dob'];
$Sdoj = $_POST['doj'];
$Sstream = $_POST['stream'];
$Scontact = $_POST['contact'];
$Sgender = $_POST['gender'];

$conn = new mysqli('localhost', 'root', '', 'cllg');
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
} else {
    $sql = "
        UPDATE personal_info
        set 
        s_firstName='$Sfirstname',
        s_middleName='$Smiddlename',
        s_lastName = '$Slastname',
        s_email = '$Semail',
        s_dob = $Sdob,
        s_doj = $Sdoj,
        s_stream = '$Sstream',
        s_contact = $Scontact,
        s_gender = '$Sgender'
        where s_id='$s_id';";
    $res = mysqli_query($conn, $sql);
    if ($res)
        header("location:./index.php");
    else
        echo "GM";
    $conn->close();
}
