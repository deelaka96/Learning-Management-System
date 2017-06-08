<?php
include('connect.php');
$name=$_POST['name'];
$user_name=$_POST['username'];
$email=$_POST['email'];
$pwd=$_POST['pwd'];
$enc_pwd=md5($pwd);
$index_no=$_POST['index'];
$sql = "INSERT INTO user_details(name,user_name,password,email,index_no)
VALUES ('$name','$user_name','$enc_pwd','$email','$index_no')";
if($conn->query($sql)==TRUE){
    header('location:login.php');
}

?>
