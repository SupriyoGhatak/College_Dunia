
<!DOCTYPE html>
<html>
    <head>
        <title>COLLAGE_DUNIA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body class="main1">
            <?php require 'login.php';  ?>
            
            <?php require 'header.php'; ?>
        <!--TEXT-->
        
        <div class="container text b">
            <div class="row">
                <center>
                    <strong> H<span style="color:red">E</span>R<span style="color: red">I</span>T<span style="color:red">A</span>G<span style="color: red">E</span> I<span style="color: red">N</span>S<span style="color: red">T</span>I<span style="color: red">T</span>U<span style="color: red">T</span>E O<span style="color: red">F</span> T<span style="color: red">E</span>C<span style="color: red">H</span>N<span style="color: red">O</span>L<span style="color: red">O</span>G<span style="color: red">Y</span>, 
                        <span class="design">KOLKATA</span></strong>
                </center>
            </div>
            <br>
            <br>
            <?php 
            if(isset($_SESSION['user_id'])){ ?>  
            <div class="wrapper">
                <button class="button btn btn-success"><b><a href="qsn.php" style="color:black; text-decoration: none">QUESTION PAPERS</a></b></button>
            </div>
              <div class="wrapper">
                  <button class="button btn btn-success second" style="color:black"><b><a href="syll.php" style="color: black; text-decoration: none;">SYLLABUS</a></b></button>
            </div>
             
             <div class="wrapper">
                 <button class="button btn btn-success third" style="color:black"><b><a href="notes.php" style="color: black; text-decoration: none;">NOTES</a></b></button>
            </div>
        
            <?php } else { ?>
            
             
      <!--Footer--> 
     
        
            <div class="wrapper">
                <button class="button btn btn-success"><b><a href="#mymodel" data-terget="#mymodel" data-toggle="modal" style="color: black; text-decoration: none;">QUESTION PAPERS</a></b></button>
            </div>
              <div class="wrapper">
                  <button class="button btn btn-success second" style="color:black"><b><a href="#mymodel" data-terget="#mymodel" data-toggle="modal" style="color: black; text-decoration: none;">SYLLABUS</a></b></button>
            </div>
             
             <div class="wrapper">
                 <button class="button btn btn-success third" style="color:black"><b><a href="#mymodel" data-terget="#mymodel" data-toggle="modal" style="color: black; text-decoration: none;">NOTES</a></b></button>
            </div>
            <?php } ?>
    </div>
     <!-- <footer class="footer1">
       <div class="container">
            <center style="color:white">
            Copyright&copy; Collage Dunia. All Rights Reserved | Contact Us: +91 7501374121
             </center>
          </div>
        </footer> -->
    </body>
        
</html>