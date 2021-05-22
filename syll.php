<!DOCTYPE html>

<html>
    <head>
        <title>Syllabus</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="qsnback" >
        <?php require 'login.php';  ?>
        
        
      <header>
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only" style="color: black;">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.php" style="color: black"><b>College Dunia</b></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        session_start();
                        if(isset($_SESSION['user_id'])){ ?>  
                        <li style="font-size:20px"><a href="contact.php"><b style="color: black">Contact</b></a></li>
                        <li style="font-size:20px"><a href="contributor.php"><b style="color: black">Contribute</b></a></li>
                        <li style="font-size:20px"><a href="logout_script.php"><b style="color: black">Logout</b></a></li>
                        <?php } else { ?>
                        <li style="font-size:20px"><a href="contact.php"><b style="color: black">Contact</b></a></li>
                        <li style="font-size:20px"><a href="contributor.php"><b style="color: black">Contribute</b></a></li>
                            <li style="font-size:20px"><a href="#mymodel" data-terget="#mymodel" data-toggle="modal"><b style="color: black">LogIn/Signup</b></a></li>
                        <?php } ?>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
</header>
        
        <!--form-->
        <div class="container">
            <div class="row">
                <h1><b><center>Put The Details</center></b></h1>
                <form action="#" method="post">
                    <div class="form-row">
                        
                        <div class="form-group col-md-4">
                            <label for="stream"><center>Stream</center></label>
                          <select class="form-control" id="stream" required>
                              
                                <option id="cse" style="color: black">CSE</option>
                                <option id="ece" style="color: black">ECE</option>
                                <option id="it" style="color: black">IT</option>
                                <option id="bt"style="color: black">BT</option>
                                <option id="che" style="color: black">CHE</option>
                                <option id="me" style="color: black">ME</option>
                                <option id="ce" style="color: black">CE</option>
                                <option id="ee" style="color: black">EE</option>
                                <option id="aeie" style="color: black">AEIE</option>
                            
                          </select>
                        </div>
                        <div class="form-group  col-md-4">
                            <label for="year"><center>Year</center></label>
                          <select class="form-control" id="year" required>
                                <option id="one" style="color: black">1st Year</option>
                                <option id="two" style="color: black">2nd Year</option>
                                <option id="three" style="color: black">3rd Year</option>
                                <option id="four" style="color: black">4th Year</option>
                                
                            </select>
                        </div>
                        
                        
                        <div class="from-group col-md-3">
                            <label></label>
                            <button type="submit" class="btn btn-success btn-block">Apply</button>
                        </div>
                        
                      </div>
                </form>
            </div>
        </div>
        
        <br>
        <h2><center><b>Papers</b></center></h2>
        <table border="2" class="center" style="width: 70%;">
            
                <tr>
                    <th><b>SERIAL NO</b></th>
                    <th><b>STREAM</b></th>
                    <th><b>FILE</b></th>
                    <th><b>DOWNLOADS</b></th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>CSE</td>
                    <td>Syllabus_Cse.pdf</td>
                    <td><a href="#">Click here to Download</a></td>
                </tr>
            
        </table>
        
        
        
        <!--form-->

    </body>
</html>