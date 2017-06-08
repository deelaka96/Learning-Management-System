<?php 
  session_start();
  
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
        <nav id="nav">
    <div class="container"  >
    <div class="navbar-header" >
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar" ></span>
        <span class="icon-bar" ></span> 
        </button>
        <a class="navbar-brand" id="headlogo" href="#sec1">LMS.LK</a>
     </div>
           
     <div class="collapse navbar-collapse" id="navbar">
     
        <ul class="nav navbar-nav" id="navli">
        <li id="active"><a href="#sec1">Home</a>
        <li id="active1"><a href="#sec2">About</a></li>
        <li id="active2"><a href="#sec3">Contact</a></li>

        </ul>
    <!-this is to add the home page when logged->     
<?php if (!empty($_SESSION['user_name'])): ?>

 <ul class="nav navbar-nav navbar-right" >
        
     <div class="dropdown">
                 
         <a href="profile.php"><button class="dropbtn" >    <img src="<?php echo $_SESSION['filename']; ?>" class="img-circle" alt="Profile pic" width="50" height="50"> <?php echo $_SESSION['user_name']; ?><span class="caret"></span></button></a>
             <div class ="dropdown-content">
             <a href="profile.php"><h5>Profile</h5></a>
             <a href="#settings" data-toggle="modal"><h5>Settings</h5></a>
              <a href="#"><h5>Help</h5></a>
             <a  id="loginbtn" href="logout.php" ><h5><span class="glyphicon glyphicon-log-out"></span> Logout</h5></a></div></div>

            </ul>

<?php else: ?>

        <ul class="nav navbar-nav navbar-right" >
<li><a  id="loginbtn" href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
</ul>
<?php endif ?>


     </div>
     </div>
        </nav>
        <!-- eof the navigation bar-->
     <!-- sections-->
     
        <div id="imgt">
         
     <div class="jumbotron" id="sec1">
         <div class="container-fluid">
            <div id="txt">       
            <h1>Welcome to LMS.LK</h1>
            
            <?php if(!empty($_SESSION['user_name'])):?>
         <a href="profile.php" class="btn btn-success" role="button"><span class="glyphicon glyphicon-user"></span> <?php echo $_SESSION['name']; ?></a>
                <?php else:?>
                <p>Sign up to access the university learning management system</p>
                  <a href="#signup" data-toggle="modal" class="btn btn-success" role="button">Sign up</a>
    <?php endif ?>
    </div>
    </div>
    </div>
            </div>
    <div class="jumbotron" id="sec2">
            <h1>About</h1>
            <p>The National School of Business Management (NSBM) is the degree school of National Institute of Business Management (NIBM) and offers undergraduate and postgraduate degree programs in Management, Computing and Engineering. Innovation is the key at NSBM as we understand the importance of originality and creativity in this global world. The education system at NSBM is therefore designed with the intention of ensuring that all our undergraduates are fully prepared to face any challenges the world has to offer.

We pride ourselves on the innovative and entrepreneurship qualities that NSBM imparts to its undergraduates through its excellence in teaching and research. Along with our ethnically and culturally diverse workforce we also inculcate International expertise in the fields of Management, Computing and Engineering in partnership with leading universities in the world. NSBM offers world renowned degrees that are much more than just a certificate. Our lecture panel skillfully integrates leadership, ethics, global thinking, core management skills and technological innovations into the learning process to make our undergraduates well rounded global citizens.
                this site is a part of our education system. NSBM provide e-learing system to make student work easly.
 </p>
    </div>
<div id="sec3" class="jumbotron"> 

            <h1>Contact</h1>
        
        
        
    
School of Management:<br>
309, High Level Road<br>
Colombo 05<br>
00500<br>
Sri Lanka<br>
Tel: +94 (11) 544 5000<br>
Fax: +94 (11) 544 5009<br>
    
School Of Computing:<br>
318, High Level Road<br>
Colombo 05<br>
00500<br>
Sri Lanka<br>
Tel: +94 (11) 544 6000<br>
      
NSBM Library:<br>
309, High Level Road<br>
Colombo 05<br>
00500<br>
Sri Lanka<br>
Tel: +94 (11) 528 8827<br>
        
NSBM Exam Unit:<br>
309, High Level Road<br>
Colombo 05<br>
00500<br>
Sri Lanka<br>
Tel: +94 (11) 544 5004<br>        
    </div>
    <!-- eof section-->
    
        <!-- sof footer-->
    <div id="footer">
     
        <ul id="navf">
        <li><a href="#sec1">Home</a>
        <li ><a href="#sec2">About</a>
        <li><a href="#sec3">Contact</a></li>

        </ul>

    </div>
    <!-- eof footer-->
    
            <div class="container">
                 <!--signup modal -->
  <div class="modal fade" id="signup" role="dialog">
    <div class="modal-dialog">
    
      <!-- Sign up Modal content-->
    <div class="modal-body">
          <div class="signmain">
       <div id="headlbl">
           <button type="button" class="close" data-dismiss="modal">&times;</button>    
            <h1>Signup</h1>
    </div>
        <div class="form">
        <form role="form" method="post" action="sign.php" name="sign" onsubmit="return validatesign()">
        <label for="name">Full name: </label>
        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
            <br>
        <label for="username">Username: </label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter Username">
        <br>
        <label for="email">Email: </label>
        <input type="text" class="form-control" id="email" name="email" placeholder="Enter Email Address">
            <br>
        <label for="password">Password: </label>
        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter Password"><br>
        <label for="password">Conform Password: </label>
        <input type="password" class="form-control" id="pwdc" name="pwdc" placeholder="Enter Password">
         <br>
         <label for="index">Index no: </label>     
        <input type="text" class="form-control" id="index" name="index" placeholder="Enter Index no">
        
        <br>
        <button href="#login" type="submit" class="btn btn-success btn-block">Signup</button>
        </form>
        </div>
      </div>
            </div>

      </div>
      </div>
   
    <!--eof signup modal-->
    </div><!-- eof container-->
        </div>
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
            <ul class="nav nav-tabs">
            <li class="active"><a href="#changeusername" data-toggle="tab" >Change Username or Email</a></li>
             <li><a href="#changeemail" data-toggle="tab" >Change Email</a></li>
            <li><a href="#changepwd" data-toggle="tab" >Change Password</a></li>
           
            </ul>
            <div class="tab-content">
            <div id="changeusername" class="tab-pane fade in active">
           <form role="form" method="post" action="sign.php">
               <br>
               <lable for="cusername">Current username:</lable><br>
               <input type="text" class="form-control" id="c_user_name" name="c_user_name" placeholder="Current username">
               <br>
               <lable for="nusername">New username:</lable><br>
               <input type="text" class="form-control" id="n_user_name" name="n_user_name" placeholder="New username">
               
               <br></form></div>
                <div id="changeemail" class="tab-pane">
                    <br>
               <form role="form" method="post" action="sign.php">
               <lable for="cemail">Current email:</lable>
               <input type="text" class="form-control" id="cemail" name="cemail" placeholder="Current email">
               <br>
               <lable for="nemail">New email:</lable>
               <input type="text" class="form-control" id="nemail" name="nemail" placeholder="New email">
                
               </form>
               </div>
            <div id="changepwd" class="tab-pane fade">
                <br>
            <form role="form" method="post" action="sign.php">
               <lable for="c_pwd">Current password:</lable>
               <input type="text" class="form-control" id="c_pwd" name="c_pwd" placeholder="Current pasword">
               <br>
               <lable for="n_pwd">New password:</lable>
               <input type="text" class="form-control" id="n_pwd" name="n_pwd" placeholder="New pasword">
               <br>
               <lable for="cfpwd">Confirm password: </lable>
               <input type="text" class="form-control" id="cfpwd" name="cfpwd" placeholder="Confirm password">
           </form>
           </div>
                </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      </div>
        </div><!--eof settings modal-->
    </div>
    <!-- eof main containere-->
</body>
