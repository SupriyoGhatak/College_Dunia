<!DOCTYPE html>
<html>
    <head>
        <title>Contact Page</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    
    </head>
    <body class="bg2">
        <?php require 'login.php';  ?>
        <?php require 'header.php'; ?>
        <div class="con">
            <div>
                <center>
                    <h1 style="color:black;">
                        <b>Contact Us</b>
                    </h1>
                    <p>
                        For any feedback,suggestion or any problem feel free to contact us.
                    </p>
                </center>
            </div>
        </div>
        <div class="container toping">
            <div class="row">
                <div class=" col-sm-4 col-xs-4 col-lg-4 col-md-4 c col-sm-offset-1 col-md-offset-1 col-lg-offset-1 col-xs-offset-1" style="color:white">
                    <h3 style="color:red"><b>ADDRESS</b></h3>
                    <p>Heritage Institute of Technology, <br> kolkata</p>
                    <h3 style="color:red"><b>PHONE NO</b></h3>
                    <p>7501374121</p>
                    <h3 style="color:red"><b>EMAIL</b></h3>
                    <p>supriyo.ghatak.cse21@heritageit.edu.in</p>
                    <p>tanmoy.das.cse21@heritageit.edu.in</p>
                    
                   
                </div>
                <div class="col-sm-offset-2 col-md-offset-2 col-lg-offset-2 col-xs-offset-2 col-sm-4 col-xs-4 col-lg-4 col-md-4 c">
                    
                    <form>
                        <div class="form-group">
                            <label for="firstName"style="color:whitesmoke">Name</label>
                            <input type="text" class="form-control" id="firtName" placeholder="firstName">
                         </div>
                          
                        <div class="form-group">
                              <label for="email" style="color:whitesmoke">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="email">
                          </div>
                        <div class="form-group">
                            <label for="feedback" style="color:white">Feedback</label><br>
                            <textarea id="feedback" row="6" col="50" style="width: 100%" placeholder=" feedback"></textarea>
                        </div>
                        
                        <br>
                        
                          <button type="submit" class="btn btn-success btn-block">Submit</button>
                    </form>
                </div>
            </div>
        </div>    
    </body>
</html>