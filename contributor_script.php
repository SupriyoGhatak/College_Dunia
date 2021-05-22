<?php

    require 'common.php';
    
    $name=$_POST['Name'];
    $name = mysqli_real_escape_string($con, $name);
    
    $stream=$_POST['stream'];
    $stream = mysqli_real_escape_string($con, $stream);
    
    $sem = $_POST['sem'];
    $sem = mysqli_real_escape_string($con, $sem);
    
    $int_sem = $_POST['internal_sem'];
    $int_sem = mysqli_real_escape_string($con, $int_sem);
    
    $type = $_POST['type'];
    $type = mysqli_real_escape_string($con, $type);
    
    $paper_code = $_POST['p_code'];
    $paper_code = mysqli_real_escape_string($con, $paper_code);
    
  // $file = $_POST['file'];
   // $file = mysqli_real_escape_string($con, $file);
    
    /*echo $name;
    echo $stream;
    echo $sem;
    echo $type;
    echo $int_sem;
    echo $paper_code;
    echo $file;*/
    
   if(isset($$_FILES['filename'])){
       
       echo "<pre>";
       print_r($_FILES);
       echo "</pre>";
       
        /*$file = $_FILES["filename"];
        print_r($file);
        
        /*$file_name = $_FILES["filename"]["name"];
        $file_type =$_FILES["filename"]["type"];
         $file_size = $_FILES["filename"]["size"];
        $file_tmp_loc = $_FILES["filename"]["tmp_name"];
       // echo $file_tmp_loc;
        $file_store = "upload/".$file_name;
        
        move_uploaded_file($file_tmp_loc, $file_store);*/
   }
            
        
        
   
    
?>
    
    
    
      
