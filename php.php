<?php
session_start();
include("connect.php");
if(isset ($_POST['email'])&& isset ($_POST['pwd'])){
$name=$_POST["email"];
$pwd=$_POST["pwd"];
$enc_pw=md5($pwd);

$sql="SELECT * FROM user_details WHERE (user_name='$name' OR email='$name')";
$sqls="SELECT * FROM user_details WHERE  password='$enc_pw'";
$result=$conn->query($sql);
$results=$conn->query($sqls);
$rows=$result->num_rows;
$rowss=$results->num_rows;

    if ($rows!==0) {

    // $login_user=$row['user_name'];
if($rowss!==0){
    $row = $result->fetch_assoc();
   $_SESSION['user_name']=$row['user_name'];
   $_SESSION['name']=$row['name'];
   header('location:profile.php');
    }
      else{   
   header('location:login.php');
     $err="Invalid Username or Password!";
  $_SESSION['error']=$err;
      }
}
 else{   
   header('location:login.php');
     $err="Invalid Username or Password!";
  $_SESSION['error']=$err;

  }

}
$conn->close();

?>
