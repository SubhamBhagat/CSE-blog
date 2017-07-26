<?php

$servername = "localhost";
$username = "admin";
$password = "admin";
$dbname = "vik";

//create conn

$conn = new mysqli($servername, $username, $password, $dbname);

//check

if (!$conn) {
    die("Connection FAILED!" . mysqli_connect_error());
}

$name = mysqli_real_escape_string($conn, $_POST['name']);
$id = mysqli_real_escape_string($conn, $_POST['id']);
$date= mysqli_real_escape_string($conn,$_POST['date']);
$month= mysqli_real_escape_string($conn,$_POST['month']);
$year= mysqli_real_escape_string($conn,$_POST['year']);
$dob="$year/$month/$date";
$gender = mysqli_real_escape_string($conn, $_POST['gender']);
$mail = mysqli_real_escape_string($conn, $_POST['mail_id']);


$sql  = "insert into reg_det (name,regno,dob,gen,mail)values('$name','$id','$dob','$gender','$mail'); ";
$res=mysqli_query($conn, $sql);
if ($res) { 
    echo 'records added SUCCESSFULLY!!!';
} else {
    echo 'ERROR: could not add record!';
    mysqli_error($conn);
}
mysqli_close($conn);
?>
                            