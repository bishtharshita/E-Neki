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

    $name=$_POST["name"];
    $mobno=$_POST["mobno"];
    $email=$_POST["email"];
    $hno=$_POST["hno"];
    $loc=$_POST["loc"];
    $land=$_POST["land"];
    $pin=$_POST["pin"];
    $city=$_POST["city"];
    $state=$_POST["state"];

    $sql="UPDATE `needy` SET `needy_name`='$name',`needy_mobno`='$mobno',`needy_emailid`='$email',`needy_house_no`='$hno',`needy_locality`='$loc',`needy_landmark`='$land',`needy_pincode`='$pin',`needy_city`='$city',`needy_state`='$state' WHERE `needy_emailid`='$email'";
    $result=mysqli_query($conn,$sql);

    if($result===TRUE){
        echo "<h1 style='color:green; text-align:center;'>Updated Successfully</h1>";
        echo "<h1 style='text-align:center'>Loading...</h1>";
        header('Refresh: 2; URL=needy.php');
    }
    else{
        echo "Failed";
    }
    
    
?>