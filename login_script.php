<?php

    require 'common.php';
    
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);

$query = "SELECT slno, email FROM user_info WHERE email='" . $email . "' AND password='" . $password . "'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);

if($num==0)
{
    echo "<script type='text/javascript'>alert('Enter Username or Password Correctly ');</script>";
       echo '<script>window.location="index.php"</script>';
}
 else {
    $row = mysqli_fetch_array($result);
    $_SESSION['user_id'] = $row['slno'];
    echo '<script>window.location="index.php"</script>';
}
