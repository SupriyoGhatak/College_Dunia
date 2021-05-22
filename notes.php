<?php
            $temp=0;
            require 'common.php';
            if(isset($_POST['submit'])){
                $sem=$_POST['sem'];
                $sem= mysqli_real_escape_string($con, $sem);

                $pcode = $_POST['pcode'];
                $pcode = mysqli_real_escape_string($con, $pcode);
                $pcode = strtoupper($pcode);
                
                $depart = $_POST['depart'];
                $depart = mysqli_real_escape_string($con, $depart);
                $depart = strtoupper($depart);
                
                $temp =1; 
                
                //echo $depart;
                
            }
            
       
                
       
?>
       





<!DOCTYPE html>

<html>
    <head>
        <title>Notes</title>
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
                        //session_start();
                        if(isset($_SESSION['user_id'])){ ?>  
                        <li style="font-size:20px"><a href="contact.php"><b style="color: black">Contact</b></a></li>
                        <li style="font-size:20px"><a href="contributor.php"><b style="color: black">Contributor</b></a></li>
                        <li style="font-size:20px"><a href="logout_script.php"><b style="color: black">Logout</b></a></li>
                        <?php } else { ?>
                        <li style="font-size:20px"><a href="contact.php"><b style="color: black">Contact</b></a></li>
                        <li style="font-size:20px"><a href="contributor.php"><b style="color: black">Contributor</b></a></li>
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
                <form action="notes.php" method="POST">
                    <div class="form-row">
                        
                        
                        <div class="form-group  col-md-3 col-md-offset-1">
                          <label for="int-sem">Semester</label>
                          <select class="form-control" id="sem" name="sem" required>
                                <option id="one" style="color: black">1</option>
                                <option id="two" style="color: black">2</option>
                                <option id="three" style="color: black">3</option>
                                <option id="four" style="color: black">4</option>
                                <option id="five" style="color: black">5</option>
                                <option id="six" style="color: black">6</option>
                                <option id="seven"style="color: black">7</option>
                                <option id="eight"style="color: black">8</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                          <label for="depart">Department</label>
                          <select class="form-control" id="depart" name="depart" required>
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
                        <div class="form-group col-md-3">
                          <label for="papercode">Paper-Code</label>
                          <input type="text" class="form-control" id="papercode" name="pcode" placeholder="PaperCode" required>
                        </div>
                        
                        <div class="from-group  col-md-offset-4 col-md-3">
                            <label><br></label>
                            <button type="submit" name="submit" class="btn btn-success btn-block">Apply</button>
                        </div>
                        
                      </div>
                </form>
            </div>
        </div>
        
        <br>
        
        
        <?php 
                //echo $sem;
                //echo $pcode;
                if($temp!=0){
                    
                $i=1;
                    
                $table_con = "SElECT dept, p_code, notes from notes WHERE dept='$depart' AND p_code='$pcode' AND sem_no='$sem'";
                $result = mysqli_query($con, $table_con)or die($mysqli_error($con));
                $num = mysqli_num_rows($result);
                
                if($num>0)
                {
                    while($row= mysqli_fetch_assoc($result))
                    {
                        
                    
                
                 
        ?>
        
        
        <h2>
           <center><b>Papers</b>
           </center>
        </h2>
        
        
        
        
        <table border="2" class="center" style="width: 70%;">
            
                <tr>
                    <th><b>SERIAL NO</b></th>
                    <th><b>DEPARTMENT</b></th>
                    <th><b>PAPER CODE</b></th>
                    <th><b>DOWNLOADS</b></th>
                </tr>
                
                <tr>
                    <td><?php echo $i; $i++ ?> </td>
                    <td><?php echo $row['dept'] ?></td>
                    <td><?php echo $row['p_code'] ?></td>
                    <td><a href="<?php echo $row['notes'] ?>" target="_tanmoyS" download>Click here to Download</a></td>
                    
                    
                           
                </tr>
                <?php }}
                    else
                    {?>
    <center> <p style="color: blue;"><b>***No Notes Found***</b></p><br></center>
    <center><p style="color: blue;">***Please Try To Contribute***</p><br></center>
            <?php }
                
                    } ?>
        </table>
        
        
        
        <!--form-->

    </body>
</html>