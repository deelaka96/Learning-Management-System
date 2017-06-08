<?php

include('connect.php');
if(!isset($_SESSION)){
    session_start();
}
$ssname=$_SESSION['user_name'];
$evname=$_POST['evname'];
$evdesc=$_POST['evdesc'];
$evdate=$_POST['evdate'];
$evtime=$_POST['evtime'];
$evvenue=$_POST['evvenue'];

$sqlev = "INSERT INTO events(event_name, event_details,date, time, venue) VALUES ('$evname','$evdesc','$evdate','$evtime','$evvenue')";
if($conn->query($sqlev)==TRUE){
    header('location:event.php');

}
 
else{
    $error="Cannot upload";

}




?>