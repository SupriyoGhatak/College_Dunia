<!DOCTYPE html>
<html>
    <head>
        <title>COLLAGE_DUNIA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-4"></div>
                <div class="col-xs-4 col-sm-4 a">
                    <h1 style="color:white"><center>SIGN UP</center></h1><br>
                    <form action="registration.php" method="POST">
                        <div class="form-group">
                            <label for="firstName"style="color:whitesmoke">First Name</label>
                            <input type="text" class="form-control" id="firtName"  name="fname" placeholder="firstName" required>
                         </div>
                          <div class="form-group">
                              <label for="lastName" style="color:whitesmoke">LastName</label>
                              <input type="text" class="form-control" id="lastName" name="lname" placeholder="lastName">
                          </div>
                        <div class="form-group">
                              <label for="email" style="color:whitesmoke">Email(Heritage Mail ID only)</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="email" required autocomplete="off">
                             <?php
                                if(isset($_GET["m1"])){
                                  echo $_GET['m1'];
                                }
                             ?>
                          </div>
                        <div class="form-group">
                              <label for="createPassword" style="color:whitesmoke">Create Password</label>
                              <input type="password" class="form-control" id="createPassword" name="cpassword" placeholder="createPassword" pattern=".{6,}" required>
                        </div>
                        <br>
                        
                          <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>