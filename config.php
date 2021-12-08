<!--Login Page-->
<?php
$con = mysqli_connect("localhost","root","","lifesy") or die(mysqli_error($con));

$email = $_POST['email'];
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$phonenumber = $_POST['phone'];
$psw = $_POST['psw'];
$psw_repeat = $_POST['psw-repeat'];


$user_registration_query = "INSERT INTO loginform(Email,first_name,last_name,psw,phone) VALUES('$email','$first_name','$last_name','$psw','$phonenumber')";

$user_registration_submit = mysqli_query($con,$user_registration_query) or die(mysqli_error($con));

echo "User successfully inserted";
?>




