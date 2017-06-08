<?php

include('connect.php');
if(!isset($_SESSION)){
    session_start();
}

$ssname=$_SESSION['user_name'];
$mname=$_POST['mname']; 
$_SESSION['modname']=$mname;
$sqld = "INSERT INTO lec_materials(module_name)
VALUES ('$mname');";
if($conn->query($sqld)==TRUE){
    header('location:lecturematerials.php');

}

else{
    $error="Cannot upload";

}




?>