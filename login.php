<?php 
  session_start();

 $error=null;
     if(isset($_SESSION['error'])){
         $error=$_SESSION['error'];
         unset($_SESSION['error']);
     }
     
    if(!empty($_SESSION['user_name'])){ 
    
      header('location:profile.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learning Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devvice-width,initial-scale=1">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    <script src="mainjs.js"></script>
    </head> 
<body>
    <!-- loginmain container full html code-->
    <div class="loginmain">
    <div id="headlbl">
           
        <a id="lgn" href="index.php"><h1>LMS.LK</h1></a>
        
    </div>
           <div id="error">
        <?php
        echo $error;
        
        ?>
        </div>
        <div class="form">
        <form name="login" role="form" method="post" action="php.php" onsubmit="return validatelogin()" >
        <label for="email">Username or email address: </label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email or Username">
         <label for="error" id="uerror"></label>
        <br>
        <label for="password">Password: </label>
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password">
         <label for="error" id="perror"></label>
        <button class="btn btn-link"><a href="#">Forgot Password?</a></button> 
        <br>
        <br>
        <button type="submit"  class="btn btn-success btn-block">Login</button>
        </form>
        </div>
    </div>
    <!-- eof loginmain containere-->
    
</body>
</html>