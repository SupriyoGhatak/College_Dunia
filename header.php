<header>
        <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
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