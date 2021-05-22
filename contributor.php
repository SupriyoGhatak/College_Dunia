<!DOCTYPE html>
<html>
    <head>
        <title>Contributor-Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    
    <script type="text/javascript">


</script>
    
    </head>
    <body class="back">
        <?php require 'login.php';  ?>
        
        
        <header>
        <nav class="navbar navbar-default navbar-inverse">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
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
                        <li style="font-size:20px"><a href="contact.php"><b>Contact</b></a></li>
                        <li style="font-size:20px"><a href="contributor.php"><b>Contribute</b></a></li>
                        <li style="font-size:20px"><a href="logout_script.php"><b>Logout</b></a></li>
                        <?php } else { ?>
                        <li style="font-size:20px"><a href="contact.php"><b>Contact</b></a></li>
                        <li style="font-size:20px"><a href="contributor.php"><b>Contribute</b></a></li>
                            <li style="font-size:20px"><a href="#mymodel" data-terget="#mymodel" data-toggle="modal"><b>LogIn/Signup</b></a></li>
                        <?php } ?>
                        
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
</header>
        
        
        
        
        
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-xs-4"></div>
                <div class="col-xs-4 col-sm-4 a1">
                    <h1 style="color:white"><center style="color: black"><b>DETAILS</b></center></h1>
                    <form action="contri_script.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="Name"style="color:whitesmoke"><b>Name</b></label>
                            <input type="text" class="form-control" id="Name" placeholder="Name"  name="Name" required style="color:black">
                         </div>
                         <!--<div class="form-group">
                             <label for="email" style="color:whitesmoke"><b>Email</b></label>
                             <input type="email" class="form-control" id="email" placeholder="Email" required style="color: black">
                         </div>-->
                        <div class="form-group">
                            <label for="stream" id="stream_main" style="color: whitesmoke"><b>Stream</b></label>
                            <select class="form-control" id="stream" name="stream" required>
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
                       
                         <div class="form-group">
                            <label for='sem' style="color:whitesmoke;" class="seme"><b>Semester</b></label>
                            <select class="form-control" id="sem" name="sem" required>
                                
                                <option id="1" style="color: black">1</option>
                                <option id="2" style="color: black">2</option>
                                <option id="3" style="color: black">3</option>
                                <option id="4" style="color: black">4</option>
                                <option id="5" style="color: black">5</option>
                                <option id="6" style="color: black">6</option>
                                <option id="7"style="color: black">7</option>
                                <option id="8"style="color: black">8</option>
                            </select>
                        </div>
                         
                        
                        <div class="form-group">
                            <label for='internal_sem' style="color:whitesmoke">Internal/Semester</label>
                            <select class="form-control" id="internal_sem" name="internal_sem"  required>
                                <option id="internal" style="color: black">Internal Paper</option>
                                
                                <option id="semester" style="color: black">Semester Paper</option>
                            </select>
                        </div>
                        
                        
                        
                         
                        <div class="form-group ">
                            <label for='type' style="color:whitesmoke">Type</label>
                            <select class="form-control" id="type" name="type" required>
                                <option id="Question-paper" style="color: black">Question Paper</option>
                                <option id="Notes" style="color: black">Notes</option>
                                
                            </select>
                        </div>
                        <div class="form-group">
                            <label for='papercode' style="color:whitesmoke">Paper Code</label>
                            <input type="text" class="form-control" id="papercode" placeholder="papercode" name="p_code" required style="color: black">
                        </div>
                        
                        
                        <br>
                        <div class="form-group">
                            <input type="file"  name="image" style="color:white" required>
                        </div>
                        
                        <?php 
                        if(!isset($_SESSION['user_id'])){ ?>
                        <button class="btn btn-success btn-block"><b><a href="#mymodel" data-terget="#mymodel" data-toggle="modal" style="color: black; text-decoration: none"> Submit</a></b></button>
                         <?php }else{ ?>
                        <button type="submit" class="btn btn-success btn-block" name="submit" style="color: black;">Submit</button>
                         <?php } ?>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
    
}
 
</html>