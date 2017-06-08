<?php

include('connect.php');
if(!isset($_SESSION)){
    session_start();
}
$ssname=$_SESSION['user_name'];
$dir="uploads/materials/";

if(!empty($_FILES["dtu"]["name"])){
$mname=$_POST['mname'];
$lsnname=$_POST['lsnname'];
$batch=$_POST['batch'];
$docname=basename($_FILES["dtu"]["name"]);
$modname=$conn->query("SELECT * FROM lec_materials");
$rowmod = $modname->fetch_assoc();
$lsname=$conn->query("SELECT * FROM lec_materials WHERE module_name='$mname'");
$rowarray=array();
$row_count=$lsname->num_rows;    
    
    
if(move_uploaded_file($_FILES["dtu"]["tmp_name"],$dir.$docname)) {
    
$sqld = "INSERT INTO lec_materials(module_name,lesson_name,batch,material)
VALUES ('$mname','$lsnname','$batch','$docname')";
if($conn->query($sqld)==TRUE){
    header('location:lecturematerials.php');

}
}} 
else{
    $error="Cannot upload";

}




?>