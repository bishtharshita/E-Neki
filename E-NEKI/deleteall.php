<?php
 include 'dbconnect.php';
 session_start();
 $user_id = $_SESSION['username'];

 if (!isset($user_id)) {
    header('location:needy login.html');
    exit;
 }

 $sql="DELETE FROM `cart` WHERE `emailid`='$user_id'";
 $result=mysqli_query($conn,$sql);
 if($result===TRUE)
 {
    echo "<h1 style='color:red; text-align:center'>All Items Deleted Successfully</h1>";
    echo "<h1 style='text-align:center'>Loading...</h1>";
    header('Refresh: 2; URL=cart.php');
 }
 else
 {
     echo "Failed";
 }
?>

