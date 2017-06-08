<?php
session_start();
include("connect.php");
    
    $ssnname=$_SESSION['user_name']; 
    $c_user=$_POST['c_user_name'];
    $n_user=$_POST['n_user_name'];
    $c_email=$_POST['cemail'];
    $n_email=$_POST['nemail'];
    $c_pwd=$_POST['c_pwd'];
    $n_pwd=$_POST['n_pwd'];
    $cf_pwd=$_POST['cfpwd'];  
    $encnpwd=md5('$n_pwd');
    
    
if(!empty($n_email&&$n_user&&$n_pwd)){
   $update="UPDATE user_details SET user_name = '$n_user',email='$n_email',password='$n_pwd' WHERE user_name='$ssnname';";
   $uresult=$conn->query($update);
   header ('location:profile.php');
}
if(!empty($n_user)){
   $update="UPDATE user_details SET user_name = '$n_user' WHERE user_name='$ssnname';";
   $uresult=$conn->query($update);
   header ('location:profile.php');}
if(!empty($n_email)){
         $update="UPDATE user_details SET email='$n_email WHERE user_name='$ssnname';";
   $uresult=$conn->query($update);
   header ('location:profile.php');
    }
if(!empty($n_pwd)){
         $update="UPDATE user_details SET password='$encnpwd' WHERE user_name='$ssnname';";
   $uresult=$conn->query($update);
   header ('location:profile.php');
}  
$conn->close();

?>
