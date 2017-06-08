<?php

include('connect.php');
if(!isset($_SESSION)){
    session_start();
}
$modname=$_GET['modname'];
$sqlrm =("DELETE FROM lec_materials WHERE module_name='$modname' ");  
if($conn->query($sqlrm)==TRUE){
    header('location:lecturematerials.php');
}


?>