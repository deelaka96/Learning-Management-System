    <?php
    include('php.php');
    include('connect.php');
    
    if (empty($_SESSION['user_name'])){
    header('location:login.php');
}
    $smname=$conn->query("SELECT * FROM lec_materials ORDER BY module_name");
    $mname='';
    
?>
<!DOCTYPE html>
<html lang="en">

    <head>

    <title>Learning Management System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=devvice-width,initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
        <script src="mainjs.js"></script>
    </head>

<body>
       <!-- main container full html code-->
    <div class="main-container">
        <nav  id="nav">
    <div class="container"  >
    <div class="navbar-header" >
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar" ></span>
        <span class="icon-bar" ></span> 
        </button>
        <a class="navbar-brand" id="headlogo" href="index.php">LMS.LK</a>
     </div>
         <div> 
     <div class="collapse navbar-collapse" id="navbar">
     
        <ul class="nav navbar-nav" id="navli">
        <li ><a id="active"  href="lecturematerials.php">Lecture Materials</a>
            <li ><a href="event.php">Events</a></li>
        <li><a href="calendar.php">Calendar</a></li>

        </ul>

        <ul class="nav navbar-nav navbar-right" >
                 
             <div class="dropdown">
            
         <a href="profile.php"><button class="dropbtn" id="dropbtn"><img src="<?php echo $_SESSION['filename']; ?>" class="img-circle" alt="Profile Pic " width="50" height="50"> <?php echo $_SESSION['user_name']; ?> <span class="caret"></span></button></a>
             <div class ="dropdown-content">
             <a href="profile.php"><h5>Profile</h5></a>
             <a href="#settings" data-toggle="modal"><h5>Settings</h5></a>
             <a href="#"><h5>Help</h5></a>
             <a  id="loginbtn" href="logout.php" ><h5><span class="glyphicon glyphicon-log-out"></span> Logout</h5></a></div></div>

            </ul>
     </div>
     </div>
        </div> 
        </nav>
     <!-- eof the navigation bar-->
        
<div class="container" >
      <div  class="container-fluid" id="pro1">
    <div class="well">
    <div id="pro2">
    
      
    <div class="headtitle" >
         <span class="glyphicon glyphicon-education"></span>
        <h4>Lecture materials</h4>
        </div>
        <?php if($_SESSION['user_name']=="admin"):?>
     <div id="probtn">
        <a class="btn btn-info" href="#uploadfile" data-toggle="modal">Upload materials </a>
        </div>
        <?php endif?>
        <br>

    
    </div><!--eof pro2-->
            </div>
    </div>
     <div class="well">
   <center><?php while($row = $smname->fetch_assoc()):?> 
       <?php $modname=$row['module_name'] ?>
       <?php if($modname!==$mname):?>
      <a href="module.php?modname=<?php echo $row['module_name'];?>"> <?php echo $row['module_name'];?></a>
       <?php if($_SESSION['user_name']=="admin"):?>
       <a href="remmod.php?modname=<?php echo $row['module_name'];?>" class=".btn-default">&times;</a>
       <?php endif ?>
       <?php $mname=$row['module_name'];?>
    
      <br><br>   
        <?php endif?>
     <?php endwhile ?>
       </center>
    </div>
    </div>
   
   
    </div><!--eof container--> 
    
                 <!-- lmaterials modal -->
  <div class="modal fade" id="uploadfile" role="dialog">
    <div class="modal-dialog">
        <!--lmaterials modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Upload file</h4>
        </div>
        <div class="modal-body">
            
  
        <div class="formdtu">
        <form name="dtu" role="form" method="post"  action="docupload.php?modname='<?php echo $modulename;  ?>'" enctype="multipart/form-data" >
        <label for="error" id="error"></label>
        <br>
          <label for="mname" id="mname">Module name:</label>
        <input type="text" class="form-control" id="mname" name="mname" placeholder="Enter module name">
        <br>
        <label for="lsnname" id="lsnname">Enter lesson name:</label>
        <input type="text" class="form-control" id="lsnname" name="lsnname" placeholder="Enter lesson name">
        <br>
        <label for="batch" id="batch">Enter batch:</label>
        <input type="text" class="form-control" id="batch" name="batch" placeholder="Enter batch">
        <br>
        <input type="file" class="btn btn-default" id="dtu" name="dtu">  
<br>
             
        <div class="modal-footer">
          <button type="submit" class="btn btn-default" name='submit' value='Upload file'>Upload</button>
            </div>    
            </form>
              </div>
        </div>
          </div>
      </div>
      </div>
        <!--eof upload lmaterials modal-->

    
    
    
    
    
         <!-- settings modal -->
  <div class="modal fade" id="settings" role="dialog">
    <div class="modal-dialog">
    
      <!--settings modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Settings</h4>
        </div>
        <div class="modal-body">
          <p id="error">
            HELLO </p>
               <ul class="nav nav-tabs">
                
            <li class="active"><a href="#changeusername" data-toggle="tab" >Change Username or Email</a></li>
             <li><a href="#changeemail" data-toggle="tab" >Change Email</a></li>
            <li><a href="#changepwd" data-toggle="tab" >Change Password</a></li>
           
            </ul>
             
            <div class="tab-content">
                  
            <div id="changeusername" class="tab-pane fade in active">
       
           <form role="form" name="chngeuser" id="chngeuser" method="post" action="settingsupdate.php" onsubmit="return validates()">
               <br>
               <lable for="cusername">Current username:</lable><br>
               <input type="text" class="form-control" id="c_user_name" name="c_user_name" placeholder="Current username">
               <br>
               <lable for="nusername">New username:</lable><br>
               <input type="text" class="form-control" id="n_user_name" name="n_user_name" placeholder="New username" >
               
               <br><button type="submit" class="btn btn-default" value="submit" >Save</button></form></div>
                <div id="changeemail" class="tab-pane">
                    <br>
               <form role="form" method="post" action="settingsupdate.php" name="chemail" onsubmit="return validatesetting()">
               <lable for="cemail">Current email:</lable>
               <input type="text" class="form-control" id="cemail" name="cemail" placeholder="Current email" >
               <br>
               <lable for="nemail">New email:</lable>
               <input type="text" class="form-control" id="nemail" name="nemail" placeholder="New email" >
                <br>
                   <button type="submit" class="btn btn-default" >Save</button>
               </form>
               </div>
            <div id="changepwd" class="tab-pane fade">
                <br>
            <form role="form" method="post" action="sign.php" name="chpwd" onsubmit="return validatesetting()">
               <lable for="c_pwd">Current password:</lable>
               <input type="password" class="form-control" id="c_pwd" name="c_pwd" placeholder="Current pasword" >
               <br>
               <lable for="n_pwd">New password:</lable>
               <input type="password" class="form-control" id="n_pwd" name="n_pwd" placeholder="New pasword" >
               <br>
               <lable for="cfpwd">Confirm password: </lable>
               <input type="password" class="form-control" id="cfpwd" name="cfpwd" placeholder="Confirm password" >
                <br>
                
           </form>
           </div>
           </div>

      </div>
      </div>
        </div><!--eof settings modal-->

    </div><!--eof main container-->
    </body>
        
    </html>
 

  