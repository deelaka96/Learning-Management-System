<?php

include('connect.php');
if(!isset($_SESSION)){
    session_start();
}
    $ssname=$_SESSION['user_name'];
$dir="uploads/propic/";

if(isset($_POST["submit"])){

$filename=basename($_FILES["ftu"]["name"]);

 if (move_uploaded_file($_FILES["ftu"]["tmp_name"], $dir.$filename)) {
$sqlu =  "UPDATE user_details SET profilepic = '$filename' WHERE user_name='$ssname'" ;
    
$resultu=$conn->query($sqlu); 
     header('location:profile.php');
      }
}

$sqlr="SELECT profilepic FROM user_details WHERE user_name='$ssname'";
$resultr=$conn->query($sqlr);
$rowsr=$resultr->num_rows;
if($rowsr!==0){
    $row = $resultr->fetch_assoc();
   $_SESSION['filename']=$dir.$row['profilepic'];
}

?>