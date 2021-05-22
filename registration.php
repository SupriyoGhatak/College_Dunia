<?php

    require 'common.php';

$fname = $_POST['fname'];
$fname = mysqli_real_escape_string($con, $fname);
$lname = $_POST['lname'];
$lname = mysqli_real_escape_string($con, $lname);
$password = $_POST['cpassword'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

$email = isset($_POST['email']) ? trim($_POST['email']) : null;

// List of allowed domains
$allowed = [
    'heritageit.edu.in'
];

// Make sure the address is valid
if (filter_var($email, FILTER_VALIDATE_EMAIL))
{
    // Separate string by @ characters (there should be only one)
    $parts = explode('@', $email);
    
    $domain = array_pop($parts);
    
    
    if($domain == "heritageit.edu.in"){
        $query = "INSERT INTO user_info(fname, lname, email, password)VALUES('" . $fname . "','" . $lname . "','" . $email . "','" . $password . "')";
        mysqli_query($con, $query) or die(mysqli_error($con));
        $user_id = mysqli_insert_id($con);
        $_SESSION['user_id'] = $user_id;
        echo "<script type='text/javascript'>alert('Successfull');</script>";
       echo '<script>window.location="index.php"</script>';
    }
    else{
       $message = "Provide Only Heritage Email Id";
       echo "<script type='text/javascript'>alert('$message');</script>";
       echo '<script>window.location="signup.php"</script>';
      
    }
    
}
?>