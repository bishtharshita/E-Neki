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

    $sql="UPDATE `doner` SET `doner_name`='$name',`doner_mobno`='$mobno',`doner_emailid`='$email',`doner_house_no`='$hno',`doner_locality`='$loc',`doner_landmark`='$land',`doner_pincode`='$pin',`doner_city`='$city',`doner_state`='$state' WHERE `doner_emailid`='$email'";
    $result=mysqli_query($conn,$sql);

    if($result===TRUE){
        echo "<h1 style='color:green; text-align:center;'>Updated Successfully</h1>";
        echo "<h1 style='text-align:center'>Loading...</h1>";
        header('Refresh: 2; URL=doner.php');
    }
    else{
        echo "Failed";
    }
    
    
?>