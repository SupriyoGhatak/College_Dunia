<?php

    require 'common.php';
    
   
    $name=$_POST['Name'];
    $name = mysqli_real_escape_string($con, $name);
    
    $stream=$_POST['stream'];
    $stream = mysqli_real_escape_string($con, $stream);
    $stream = strtoupper($stream);
    
    $sem = $_POST['sem'];
    $sem = mysqli_real_escape_string($con, $sem);
    
    //echo $sem;
    
    $int_sem = $_POST['internal_sem'];
    $int_sem = mysqli_real_escape_string($con, $int_sem);
    
    $type = $_POST['type'];
    $type = mysqli_real_escape_string($con, $type);
    
    $paper_code = $_POST['p_code'];
    $paper_code = mysqli_real_escape_string($con, $paper_code);
    
  // $file = $_POST['file'];
   // $file = mysqli_real_escape_string($con, $file);
    
   /* echo $name;
    echo $stream;
    echo $sem;
    echo $type;
    echo $int_sem;
    echo $paper_code;*/
    
    
   if(isset($_FILES['image'])){
       
       
       //echo 'hello';
     // $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size =$_FILES['image']['size'];
      $file_tmp_loc =$_FILES['image']['tmp_name'];
      $file_type=$_FILES['image']['type'];
      $file_extension = explode('.', $file_name);
      $file_ext_check = strtolower(end($file_extension));
      //echo $file_ext_check;
      
      $allowed_extensions = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx');
      if(!in_array($file_ext_check, $allowed_extensions)){

         echo "<script type='text/javascript'>alert('Only .PDF, .DOCX, .DOC, .JPG, .JPEG, .PNG  Are allowed');</script>";
         echo '<script>window.location="contributor.php"</script>';
      }
      else{
          
          
        if($type == "Notes"){
            
            
            $file_store = "D:/CD-notes/".$file_name;
        
                 move_uploaded_file($file_tmp_loc, $file_store);
            
                // echo $file_store;
                 $query = "INSERT INTO notes(sem_no, dept, p_code, notes)VALUES('" . $sem . "','" . $stream . "','" . $paper_code . "','" . $file_store ."')";
                mysqli_query($con, $query) or die(mysqli_error($con));

                 
            
        }
        else{
            if($int_sem == "Internal Paper"){
                
                $file_store = "D:/CD-int/".$file_name;
        
                 move_uploaded_file($file_tmp_loc, $file_store);
                 $query = "INSERT INTO internal(sem_no, dept, p_code, internal_qsn)VALUES('" . $sem . "','" . $stream . "','" . $paper_code . "','" . $file_store ."')";
                mysqli_query($con, $query) or die(mysqli_error($con));
            }
            else{
                
                $file_store = "D:/CD-sem/".$file_name;
        
                 move_uploaded_file($file_tmp_loc, $file_store);
                 $query = "INSERT INTO semester(sem_no, dept, p_code, sem_qsn, name)VALUES('" . $sem . "','" . $stream . "','" . $paper_code . "','" . $file_store ."','" . $name ."')";
                mysqli_query($con, $query) or die(mysqli_error($con));
            }
        }
      
     // $file_store = "D:/pl/".$file_name;
        
     // move_uploaded_file($file_tmp_loc, $file_store);
      echo "<script type='text/javascript'>alert('Successfully Uploaded. Thank You for Contribution :)');</script>";
         echo '<script>window.location="index.php"</script>';
      }
   }
            
        
        
  
    
?>
    
    
    
      
