<?php
$link = mysqli_connect("localhost", "root", "", "virtual_class");
if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}
$first_name = mysqli_real_escape_string($link, $_POST['fname']);

$last_name = mysqli_real_escape_string($link, $_POST['sname']);

$email_address = mysqli_real_escape_string($link, $_POST['email']);
$phone_number = mysqli_real_escape_string($link, $_POST['pno']);
$password = mysqli_real_escape_string($link, $_POST['password']);


$sql = "INSERT INTO members (fname, lname, email,phone_no,pass) VALUES ('$first_name', '$last_name', '$email_address','$phone_number','$password')";
if(mysqli_query($link, $sql)){
    header('location:login.php');

} else{

    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);

}

 

// close connection

mysqli_close($link);

?>