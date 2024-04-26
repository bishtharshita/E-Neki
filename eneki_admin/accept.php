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
    $id=$_POST["id"];
    $qty=$_POST["qty"];
    $sql1="UPDATE `products` SET `item_qty`=`item_qty`+$qty WHERE `item_id`=$id";
    $sql2="UPDATE `products_admin` SET `item_qty`=0 WHERE `item_id`=$id";
    $result1=mysqli_query($conn,$sql1);
    $result2=mysqli_query($conn,$sql2);
    if($result1 and $result2===TRUE)
    {
        echo "<h1 style='color:green; text-align:center;'>Accepted</h1>";
        echo "<h1 style='text-align:center'>Loading...</h1>";
        header('Refresh: 2; URL=donations.php');
    }
    else
    {
        echo "Failed";
    }
$conn->close();
?>