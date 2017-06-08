    
<html>
    <head>
    <meta name="viewport" content="width=devvice-width,initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
    <link rel="stylesheet" href="bootstrap-3.3.6-dist/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="container">
  <div class="Signmain">
       <div id="headlbl">
            <h1>Signup</h1>
    </div>
        <div class="form">
        <form role="form" method="post" action="sign.php">
        <label for="name">Name: </label>
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
        <input type="password" class="form-control" id="pwd" name="pwdc" placeholder="Enter Password">
         <br>
            <label for="nic">NIC no: </label>
        <input type="text" class="form-control" id="nic" name="nic" placeholder="Enter NIC no">
        <br>
         <label for="index">Index no: </label>     
        <input type="text" class="form-control" id="index" name="index" placeholder="Enter Index no">
        
        <br>
        <button type="submit" class="btn btn-success btn-block">Signup</button>
        </form>
        </div>
      </div>
            </div>
      </body>

    </html>