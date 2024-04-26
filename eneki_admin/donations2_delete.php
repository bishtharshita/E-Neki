<?php
   
    $servername = "localhost"; 
    $username = "root"; 
    $password = "";
   
    $database = "eneki";
   
     // Create a connection 
     $conn = mysqli_connect($servername, 
         $username, $password, $database);
   
    // Code written below is a step taken
    // to check that our Database is 
    // connected properly or not. If our 
    // Database is properly connected we
    // can remove this part from the code 
    // or we can simply make it a comment 
    // for future reference.
   
    if($conn) {
        //echo "success"; 
    } 
    else {
        die("Error". mysqli_connect_error()); 
    } 

    $email=$_POST["id"];

    $sql="DELETE FROM `donation` WHERE `emailid`='$email'";
    $result=mysqli_query($conn,$sql);

    if($result===TRUE){
        echo "<h1 style='color:red; text-align:center;'>Deleted Successfully</h1>";
        echo "<h1 style='text-align:center'>Loading...</h1>";
        header('Refresh: 2; URL=donations_2.php');
    }
    else{
        echo "Failed";
    }
$conn->close();
?>