<?php

include('connect.php');
if(!isset($_SESSION)){
    session_start();
}
$modname=$_GET['modnname'];
$lesname=$_GET['lsnname'];
$sqlrm =("DELETE FROM lec_materials WHERE lesson_name='$lesname' ");  
if($conn->query($sqlrm)==TRUE){
    header('location:lecturematerials.php');
}


?>