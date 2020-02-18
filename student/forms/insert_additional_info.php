<?php
session_start();
$Sid = 'ucoeb2018101001';
$Saddmission = $_POST['admission_process'];
$Scat = $_POST['category'];
$Smartial = $_POST['martial_status'];
$Sbloodgroup = $_POST['blood_group'];
// $Sdisability = $_POST['disability'];
// $Sdiabetic = $_POST['diabetic'];
$Sdisability = 0;
$Sdiabetic = 0;
$Sannualearning = $_POST['annual_earning'];
$Saadhar = $_POST['aadhar_no'];
$Spanno = $_POST['pan_no'];
// $ITR = $_FILE['ITR'];
// $SIC = $_FILE[''];
// $Adharcard = $_POST[''];
// $Span = $_POST[''];
// $domicile = $_POST[''];
$ITR = '';
$SIC = '';
$Adharcard = '';
$Span = '';
$domicile = '';
$conn = new mysqli('localhost', 'root', '', 'cllg');
if ($conn->connect_error) {
    die("Connection Failed : " . $conn->connect_error);
} else {
    $stmt = $conn->prepare("UPDATE additional_info set s_addmission_process=? s_category=? s_martial_status=? s_blood_group=? s_disability=? s_diabetic=? s_annual_earning=? s_adhar_no=? s_pancard_no=? s_ITR=? s_IC=? s_AdharCard=? s_Pan=? s_Domicile=? where s_id=?");
    $stmt->bind_param("sssssiiiiisssss", $Saddmission, $Scat, $Smartial, $Sbloodgroup, $Sdisability, $Sdiabetic, $Sannualearning, $Saadhar, $Spanno, $ITR, $SIC, $Adharcard, $Span, $domicile, $s_id);
    $stmt->execute();
    //echo "Registered Successfully!";
    header("location: ./index.php");
    $stmt->close();
    $conn->close();
}
